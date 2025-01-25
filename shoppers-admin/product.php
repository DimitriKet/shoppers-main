
<?php
function add() 
{
    global $conn;
    if(isset($_POST['sbm']))
    {
      $img=upload('img');
      $name=$_POST['name'];
      $description=$_POST['description'];
      $content=$_POST['content'];
      $sql="
      INSERT INTO `product` ( `name`, `img`,  `description`, `content`) 
      VALUES  ('{$name}','{$img}','{$description}','{$content}')";
        if(mysqli_query($conn, $sql))
            message('Thành Công!','product');
        else
            message('Thất bại!','product');
    }
    else
    {
      echo '
      <div style="padding:1%">
      <form action="" method="POST" enctype="multipart/form-data">
      <p>
          <label for="name">Name</label>
          <input class="form-control" name="name" type="text" value="" />
      </p>
      <p>
          <label for="name">Image</label>
          <input class="form-control" name="img"  type="file" />
      </p>
     
      <p>
          <label for="description">Description</label>
          <textarea class="form-control" name="description"></textarea>
      </p>
      <p>
      <label for="description">Content</label>
          <textarea class="form-control" name="content" id="editor"></textarea>
      </p>
      <p>
          <button type="submit"class="btn btn-primary" name="sbm">Thực hiện</button>
      </p>
      </div>
      ';
    }
}

function edit() 
{
    global $conn;
    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;
    if(isset($_POST['sbm']))
    {
      $img=upload('img');
      $name=$_POST['name'];
      $description=$_POST['description'];
      $content=$_POST['content'];
      if($img!='')
          $sql="
          update product set 
          `name`='{$name}',
          `img`='{$img}',
          `description`='{$description}',
          `content`='{$content}'
          where id=$id";
      else
          $sql="
          update product set 
          `name`='{$name}',
          `description`='{$description}',
          `content`='{$content}'
          where id=$id";
        if(mysqli_query($conn, $sql))
            message('Thành Công!','product');
        else
            message('Thất bại!','product');
    }
    else
    {
        $sql = "select * from product where id = $id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo '
      <div style="padding:1%">
      <form action="" method="POST" enctype="multipart/form-data">
      <p>
          <label for="name">Name</label>
          <input class="form-control" name="name" type="text" value="'.$row['name'].'" />
      </p>
      <p>
          <label for="name">Image</label>
          <input class="form-control" name="img"  type="file" />
      </p>
     
      <p>
          <label for="description">Description</label>
          <textarea class="form-control" name="description">'.$row['description'].'</textarea>
      </p>
      <p>
      <label for="description">Content</label>
          <textarea class="form-control" name="content" id="editor">'.$row['content'].'</textarea>
      </p>
      <p>
          <button type="submit"class="btn btn-primary" name="sbm">Thực hiện</button>
      </p>
      </div>
      ';
    }
}

function view() {

    global $conn;
    $data = '<div class="row">';
    $sql = "select * from product";
    $result = mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_assoc($result))
    {
        $data .= '
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="block-4 text-center border">
                <figure class="block-4-image">
                <a href="#"><img src="../images/'.$row['img'].'" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="#">'.$row['name'].'</a></h3>
                <p class="text-secondaty font-weight-bold">'. number_format($row['price']).' VND</p>
                </div>
            </div>
        </div>';
    }
    $data .= '</div>';
    echo $data;
}

function manage()
{
    global $conn;
    $data=
    "<table class='table' style='color:#7971ea;'>
    <tr class='text-weight'>
        <td>STT</td>
        <td>Image</td>
        <td>Name</td>
        <td>Date</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Status</td>
    </tr>";
    $stt=1;
    $sql='select * from product';
    $result=mysqli_query($conn,$sql); 
    while($row=mysqli_fetch_assoc($result))
    {
        if($row['status']==1)
        $status="<a href='index.php?cmd=product&action=status&id=".$row['id']."&status=".$row['status']."' class='btn btn-success'>Lock</a>";
        else
        $status="<a href='index.php?cmd=product&action=status&id=".$row['id']."&status=".$row['status']."' class='btn btn-secondary'>Unlock</a>";
        $data.= "
        <tr><td>".$stt++."</td>
            <td><img src='../images/".$row['img']."' width='30'></td>
            <td>".$row['name']."</td>
          
            <td>".$row['date']."</td>
            <td><a href='index.php?cmd=product&action=edit&id=".$row['id']."' class='btn btn-warning'>Edit</a></td>
            <td><a href='index.php?cmd=product&action=del&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
            <td>".$status."</td>
        </tr>";
    }
    $data.= '</table>';
    echo $data;
}

function del() 
{
    global $conn;
    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;

    $sql = "delete from product where id = $id";
    if (mysqli_query($conn, $sql)) 
        message("Success", "product");
    else 
        message("Failed", "product");
}

function status() 
{
    global $conn;

    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;
    if ($_GET['status'] == 1)   
        $sql = "update product set status = 0 where id = $id";
    else
        $sql = "update product set status = 1 where id = $id";
    if (mysqli_query($conn, $sql)) 
        message("Success", "product");
    else 
        message("Failed", "product");
}
?>
        
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-center gap-20 py-20">
                    <a href="index.php?cmd=product&action=add" class="btn btn-sm btn-primary">Add new product</a>
                    <a href="index.php?cmd=product&action=view" class="btn btn-sm btn-secondary">View product</a>
                    <a href="index.php?cmd=product&action=manage" class="btn btn-sm btn-success">Manage product</a>
                </div>
            </div>
            <div class="col-12">
            <?php
            if(isset($_GET['action']))
                $action=$_GET['action'];
            else 
                $action = 'manage';
            
            switch($action)
            {
                case 'edit': edit(); break;
                case 'view': view(); break;
                case 'status': status(); break;
                case 'add': add(); break;
                case 'del': del(); break;
                default: manage();
            }
            ?>
            </div>
        </div>
    </div>
</section>
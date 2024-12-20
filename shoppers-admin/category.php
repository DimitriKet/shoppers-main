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
      INSERT INTO `category` ( `name`, `img`,  `description`, `content`) 
      VALUES  ('{$name}','{$img}','{$description}','{$content}')";
        if(mysqli_query($conn, $sql))
            message('Thành Công!','category');
        else
            message('Thất bại!','category');
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
          <label for="name">Ảnh</label>
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
          update category set 
          `name`='{$name}',
          `img`='{$img}',
          `description`='{$description}',
          `content`='{$content}'
          where id=$id";
      else
          $sql="
          update category set 
          `name`='{$name}',
          `description`='{$description}',
          `content`='{$content}'
          where id=$id";
        if(mysqli_query($conn, $sql))
            message('Thành Công!','category');
        else
            message('Thất bại!','category');
    }
    else
    {
        $sql = "select * from category where id = $id";
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
          <label for="name">Ảnh</label>
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

function manage()
{
    global $conn;
    $data=
    "<table class='table' style='color:#7971ea;'>
    <tr class='text-weight'>
        <td>STT</td>
        <td>Ảnh</td>
        <td>Tên</td>
        <td>Date</td>
        <td>Edit</td>
        <td>Xóa</td>
        <td>Khóa</td>
    </tr>";
    $stt=1;
    $sql='select * from category';
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        if($row['status']==1)
        $status="<a href='index.php?cmd=category&action=status&id=".$row['id']."&status=".$row['status']."' class='btn btn-success'>Lock</a>";
        else
        $status="<a href='index.php?cmd=category&action=status&id=".$row['id']."&status=".$row['status']."' class='btn btn-secondary'>Unlock</a>";
        $data.= "
        <tr><td>".$stt++."</td>
            <td><img src='../images/".$row['img']."' width='30'></td>
            <td>".$row['name']."</td>
          
            <td>".$row['date']."</td>
            <td><a href='index.php?cmd=category&action=edit&id=".$row['id']."' class='btn btn-warning'>Sửa</a></td>
            <td><a href='index.php?cmd=category&action=del&id=".$row['id']."' class='btn btn-danger'>Xóa</a></td>
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

    $sql = "delete from category where id = $id";
    if (mysqli_query($conn, $sql)) 
        message("Success", "category");
    else 
        message("Failed", "category");
}

function status() 
{
    global $conn;

    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;
    if ($_GET['status'] == 1)   
        $sql = "update category set status = 0 where id = $id";
    else
        $sql = "update category set status = 1 where id = $id";
    if (mysqli_query($conn, $sql)) 
        message("Success", "category");
    else 
        message("Failed", "category");
}
?>
        
<section class="">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-center gap-20 py-20">
                    <a href="index.php?cmd=category&action=add" class="btn btn-sm btn-primary">Add new Category</a>
                    <a href="index.php?cmd=category-detail" class="btn btn-sm btn-primary">View Category</a>
                    <a href="index.php?cmd=category&action=manage" class="btn btn-sm btn-primary">Manage Category</a>
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
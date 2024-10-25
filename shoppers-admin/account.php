<?php
function add(){

}

function delete(){
    
}

function edit(){
    
}

function manage()
{
    global $conn;
    $data=
    "<table class='table' style='color:#7971ea;'>
    <tr>
        <td>ID</td>
        <td>Image</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Date</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Lock</td>
    </tr>";
    $stt = 1;
    $sql = 'select * from account';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['status'])
        $status = "<a href='index.php?cmd=account&action=status&id=".$row['id']."&status=".$row['status']."' class='btn btn-success'>Lock</a>";
        else
        $status = "<a href='index.php?cmd=account&action=status&id=".$row['id']."&status = ".$row['status']."' class='btn btn-secondary'>Unlock</a>";
        $data .="
        <tr><td>".$stt++."</td>
            <td><img src='../img/".$row['img']."' width='80'></td>
            <td>".$row['name']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['date']."</td>
            <td><a href='index.php?cmd=account&action=edit&id=".$row['id']."' class='btn btn-warning'>Edit</a></td>
            <td><a href='index.php?cmd=account&action=del&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
            <td>".$status."</td>
        </tr>";
    }
    $data.='</table>';
    echo $data;
}
?>

<section class="">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-center gap-20 py-20">
                    <a href="index.php?cmd=account&action=add" class="btn btn-sm btn-primary">Add new Account</a>
                    <a href="index.php?cmd=account&action=edit" class="btn btn-sm btn-secondary">Edit Info</a>
                    <a href="index.php?cmd=account&action=manage" class="btn btn-sm btn-primary">Manage Account</a>
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
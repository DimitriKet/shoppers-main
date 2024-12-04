<?php 
function connect()
{
    $conn = false;
    $conn = mysqli_connect('localhost', 'root', '', 'shopper_database', '3306');
    if (mysqli_connect_errno()) 
    {
        echo "Kết nối đến database thất bại: " . mysqli_connect_error($conn);
        exit();
    }
    return $conn;
}

function login($email,$password)
{
    global $conn;
    $sql="Select * from account where email='{$email}' and password='{$password}' and status=1";
    $result = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($result);
    if($total == 1)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['loginname'] = $row['name'];
        $_SESSION['loginimg'] = $row['img'];
        $_SESSION['loginphone'] = $row['phone'];
        $_SESSION['loginemail'] = $row['email'];
        $_SESSION['loginstatus'] = true;
        return true;
    }
    else
        return false;
}

function upload($filename)
{
    $dir = "../images/";
    $target_file = $dir . basename($_FILES[$filename]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $newfilename = time().".".$imageFileType;
    if (move_uploaded_file($_FILES[$filename]["tmp_name"],$dir.$newfilename))
        return $newfilename;
    else 
        return  "";

}

function message($text,$cmd)
{
    $_SESSION['msg']="<div class='alert alert-success'>".$text."</div>";
    echo "<script>document.location.href='index.php?cmd=".$cmd."'</script>";
}

$conn = connect();
?>
<?php
session_start();
$maxacnhan = $_POST['maxacnhan'];
$matk=$_GET['id'];
require('connect.php');
$sql = "Select * from taikhoan where matk = '$matk'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
if( $row['maxacnhan']==$maxacnhan){
    $sql = "UPDATE taikhoan set trangthai = '1' where matk='$matk';";
    mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            $_SESSION['matk']=$row['matk'];
            $_SESSION['quyen']=$row['maquyen'];
            echo '<script language="javascript">';
            echo 'alert("Tài khoản đã được kích hoạt");';
            echo 'location.href="admin.php";';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Kích hoạt tài khoản thất bại");';
            echo 'location.href="login.php";';
            echo '</script>';
        }
}
else{
    echo '<script language="javascript">';
    echo 'alert("Sai mã kích hoạt");';
    echo 'location.href="login.php";';
    echo '</script>';
}
mysqli_close($conn);
?>
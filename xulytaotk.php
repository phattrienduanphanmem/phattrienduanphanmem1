<?php
    $tentk=$_POST['tentk'];
    $matkhau =$_POST['matkhau'];
    $email =$_POST['email'];
    $matk=$_GET['id'];
    require('connect.php');
    $timemail = "Select * from taikhoan where email='$email' ";
    $result = mysqli_query($conn,$timemail);
    $row = mysqli_fetch_assoc($result);
    $pass = password_hash($matkhau,PASSWORD_DEFAULT);
    if(empty($row['Email'])){
        $sql = "INSERT INTO taikhoan(tentk,email,matkhau,maquyen) 
        values ('$tentk','$email','$pass','1');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("Tạo tài khoản thành công");';
            echo 'location.href="Register.php?id='.$matk.'";';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Tạo tài khoản thất bại");';
            echo 'location.href="Register.php?id='.$matk.'";';
            echo '</script>';
        };
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Email đã có tài khoản. Không thể tạo");';
        echo 'location.href="Register.php?id='.$matk.'";';
        echo '</script>';
    }
    mysqli_close($conn);
?>



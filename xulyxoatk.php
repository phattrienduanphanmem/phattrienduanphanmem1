<?php
    $taikhoan=$_POST['taikhoan'];
    $matk=$_GET['id'];
    require('connect.php');
    if(isset($taikhoan)){
        $sql = "DELETE FROM taikhoan WHERE email='$taikhoan';";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("Xóa tài khoản thành công");';
            echo 'location.href="xoataikhoan.php?id='.$matk.'"</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Xóa tài khoản thất bại");';
            echo 'location.href="xoataikhoan.php?id='.$matk.'"</script>';
        };
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("hãy chọn tài khoản và quyền được cấp");';
        echo 'location.href="xoataikhoan.php?id='.$matk.'"</script>';
    }
    mysqli_close($conn);
?>
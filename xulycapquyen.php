<?php
    $taikhoan=$_POST['taikhoan'];
    $quyen =$_POST['quyen'];
    $matk=$_GET['id'];
    require('connect.php');
    if ($quyen=="admin") $maquyen='3';
    else 
    {if ($quyen=="manager") $maquyen='2';
    else $maquyen='1';
    }
    if(isset($taikhoan)&isset($quyen)){
        $sql = "UPDATE taikhoan set maquyen ='$maquyen' where email='$taikhoan';";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("Cấp quyền thành công");';
            echo 'location.href="capquyen.php?id='.$matk.'";';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Cấp quyền thất bại");';
            echo 'location.href="capquyen.php?id='.$matk.'";';
            echo '</script>';
        };
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("hãy chọn tài khoản và quyền được cấp");';
        echo 'location.href="capquyen.php?id='.$matk.'";';
        echo '</script>';
    }
    mysqli_close($conn);
?>
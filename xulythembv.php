<?php
    $namechude=$_POST['chude'];
    $tieude =$_POST['tieude'];
    $noidung =$_POST['noidung'];
    $matk=$_GET['id'];
    require('connect.php');
    Switch($namechude){
        case 'tt':
            $chude='Tin tức';
            break;
        case 'tb':
            $chude='Thông báo';
            break;
    }
    $error =array();
    $target_dir="images/images_post/";
    $target_file=$target_dir.basename($_FILES['image']['name']);
    if($_FILES['image']['size']>3145728){
        $error['image']="Chỉ được upload file dưới 3MB";
    }
    $file_type = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $file_type_allow= array('png','jpg','jpeg','gif');
    if(!in_array(strtolower($file_type),$file_type_allow)){
        $error['image']="Chỉ được upload file ảnh dưới dạng gif, jpg, jpeg, png";
    }
    if(file_exists($target_file)){
        $error['image']="File đã tồn tài trên hệ thống";
    }
    if(empty($error)){
        $sql = "INSERT INTO baiviet(chude,tieude,anh,noidung,ngaytao,matk) 
        values ('$chude','$tieude','$target_file','$noidung',NOW(),'$matk');";
        mysqli_set_charset($conn,'UTF8');
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            if(mysqli_query($conn,$sql)){
                echo '<script language="javascript">';
                echo 'alert("Tạo bài viết thành công");';
                echo 'location.href="thembaiviet.php?id='.$matk.'";';
                echo '</script>';
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Tạo bài viết thất bại");';
                echo 'location.href="thembaiviet.php?id='.$matk.'";';
                echo '</script>';
            };
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Up ảnh thất bại");';
            echo 'location.href="thembaiviet.php?id='.$matk.'";';
            echo '</script>';
        }
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("'.$error['image'].'");';
        echo 'location.href="thembaiviet.php?id='.$matk.'";';
        echo '</script>';
    }
    mysqli_close($conn);
?>
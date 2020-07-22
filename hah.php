<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        echo '<pre>';print_r($_FILES);echo '</pre>';
    }
    $error =array();
    $target_dir="images/tuyensinhdaihoc/";
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
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            echo '<script language="javascript">';
            echo 'alert("Up ảnh thành công");';
            echo 'location.href="newpost.php?id='.$matk.'";';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Up ảnh thất bại");';
            echo 'location.href="newpost.php?id='.$matk.'";';
            echo '</script>';
        }
    }
?>
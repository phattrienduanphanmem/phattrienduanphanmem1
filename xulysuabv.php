<?php
    $namechude=$_POST['chude'];
    $tieude =$_POST['tieude'];
    $noidung =$_POST['noidung'];
    $matk=$_GET['id'];
    $mabv=$_GET['post'];
    require('connect.php');
    $sqlpost = "Select * from baiviet where mabv = '$mabv'";
    $rowpost = mysqli_fetch_assoc(mysqli_query($conn, $sqlpost));
    Switch($namechude){
        case 'tt':
            $chude='Tin tức';
            break;
        case 'tb':
            $chude='Thông báo';
            break;
            
    }
    if(empty($_FILES['image']['name'])){
        if($rowpost['chude']==$chude&$rowpost['tieude']==$tieude&$rowpost['noidung']==$noidung){
        echo '<script language="javascript">';
        echo 'alert("Bài viết không có sự thay đổi nào");';
        echo 'location.href="Post.php?id='.$matk.'";';
        echo '</script>';
        }
        else{
            $sql = "UPDATE baiviet set  chude='$chude', tieude='$tieude',noidung='$noidung',ngaytao=NOW() where mabv='$mabv';";
            mysqli_set_charset($conn,'UTF8');
            if(mysqli_query($conn,$sql)){
                echo '<script language="javascript">';
                echo 'alert("Sửa bài viết thành công");';
                echo 'location.href="Post.php?id='.$matk.'";';
                echo '</script>';
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Sửa bài viết thất bại");';
                echo 'location.href="Post.php?id='.$matk.'";';
                echo '</script>';
            };
        }
    }
    else {
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
        $xoa=unlink($rowpost['anh']);
        $sql = "UPDATE baiviet set  chude='$chude', tieude='$tieude',anh='$target_file',noidung='$noidung',ngaytao=NOW() where mabv='$mabv';";
        mysqli_set_charset($conn,'UTF8');
        if($xoa){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                if(mysqli_query($conn,$sql)){
                    echo '<script language="javascript">';
                    echo 'alert("Sửa bài viết thành công");';
                    echo 'location.href="Post.php?id='.$matk.'";';
                    echo '</script>';
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Sửa bài viết thất bại");';
                    echo 'location.href="Post.php?id='.$matk.'";';
                    echo '</script>';
                };
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Up ảnh thất bại, không thể sửa bài viết");';
                echo 'location.href="suabv.php?id='.$matk.'&post='.$mabv.';';
                echo '</script>';
            }
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Xóa ảnh cũ trên server thất bại, không thể sửa bài viết");';
            echo 'location.href="suabv.php?id='.$matk.'&post='.$mabv.';';
            echo '</script>';
        }
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("'.$error['image'].'");';
        echo 'location.href="suabv.php?id='.$matk.'&post='.$mabv.'";';
        echo '</script>';
    }
    mysqli_close($conn);
}
?>
<?php
    require('connect.php');
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $result=mysqli_query($conn, "select * from quan where matinh='$id'");
        echo '<option value="" ></option>';
        while($row = mysqli_fetch_array($result)){
            echo '<option value="'.$row['maquan'].'" >' .$row['tenquan']. '</option>';
        }
    }
    if(isset($_POST['idtruong'])){
        $id=$_POST['idtruong'];
        $result=mysqli_query($conn, "select * from truong where maquan='$id'");
        echo '<option value="" ></option>';
        while($row = mysqli_fetch_array($result)){
            echo '<option value="'.$row['matruong'].'" >' .$row['tentruong']. '</option>';
        }
    }
    mysqli_close($conn);
?>

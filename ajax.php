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
    if(isset($_POST['idnam'])){
        $nam=$_POST['idnam'];
        $matk=$_POST['idtk'];
        $result=mysqli_query($conn, "select * from diemchuan,nganh where diemchuan.manganh=nganh.manganh and nam='$nam'");
        $i=1;
        while($rowtk = mysqli_fetch_array($result)){
            echo '<tr><td>'.$i.'</td>';
            echo '<td>'.$rowtk['manganh'].'</td>';
            echo '<td>'.$rowtk['tennganh'].'</td>';
            echo '<td>'.$rowtk['matohop'].'</td>';
            echo '<td>'.$rowtk['chitieu'].'</td>';
            echo '<td>'.$rowtk['diem'].'</td>';
            echo '<td>'.$rowtk['dieukien'].'</td>';
            echo '<td><a href="suadiem.php?id='.$matk.'&diem='.$rowtk['madiem'].'"><img src="images/edit.gif" border="0"></a></td>';
            echo '<td><a href="xulyxoadc.php?id='.$matk.'&diem='.$rowtk['madiem'].'"><img src="images/deleted.jpg" border="0"></a></td></tr>';
            $i++;
        }
    }
    if(isset($_POST['idnam2'])){
        $nam=$_POST['idnam2'];
        $result=mysqli_query($conn, "select * from diemchuan,nganh where diemchuan.manganh=nganh.manganh and nam='$nam'");
        $i=1;
        while($rowtk = mysqli_fetch_array($result)){
            echo '<tr><td>'.$i.'</td>';
            echo '<td>'.$rowtk['manganh'].'</td>';
            echo '<td>'.$rowtk['tennganh'].'</td>';
            echo '<td>'.$rowtk['matohop'].'</td>';
            echo '<td>'.$rowtk['chitieu'].'</td>';
            echo '<td>'.$rowtk['diem'].'</td>';
            echo '<td>'.$rowtk['dieukien'].'</td></tr>';
            $i++;
        }
    }
    mysqli_close($conn);
?>

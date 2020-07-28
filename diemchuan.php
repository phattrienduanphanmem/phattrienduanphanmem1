<?php
include("header.php");
?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
            <div class="row">
                <?php include("menusinhvien.php");?>
                <div class="col-md-8 col-lg-9 col-main">
                    <div class="row">
                        <div class="col-lg-10">Điểm chuẩn trường đại học Thủy Lợi</div>
                        <div class="row" style="margin-bottom: 10px;">
                            <strong>Năm:</strong> 
                            <select class="form-control" style="width:100px; height:30px" id="nam" name="nam">
                            <?php
                            require('connect.php');
                            $sqlnam="select distinct nam from diemchuan order by nam desc";
                            mysqli_set_charset($conn, 'UTF8');
                            $resultnam = mysqli_query($conn, $sqlnam);
                            if (mysqli_num_rows($resultnam) > 0) {
                            while ($rownam = mysqli_fetch_assoc($resultnam)) {
                                echo '<option value="' . $rownam['nam'] . '" ><a href="#">' . $rownam['nam'] . '</a></option>';
                            }}
                            mysqli_close($conn);
                            ?> 
                            </select>
                        </div>
                    </div>
                    <div class="tab active">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Mã ngành</th>
                                    <th>Tên ngành</th>
                                    <th>Tổ hợp môn</th>
                                    <th>Chỉ tiêu</th>
                                    <th width="40px">Điểm chuẩn</th>
                                    <th>Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody id="bangdiem" name="bangdiem">
                            <?php 
                            require('connect.php');
                            $result=mysqli_query($conn, "select * from diemchuan,nganh where diemchuan.manganh=nganh.manganh and nam='2020'");
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
                            mysqli_close($conn);
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <script>
                    $(document).ready(function(){
                    $("#nam").on('change',function(){
                        var nam=$(this).val();
                        $.ajax({
                            type:"POST",
                            url:"ajax.php",
                            data:{idnam2:nam},
                            dataType:"html",
                            success:function(data){
                            $("#bangdiem").html(data);
                        }
                        });
                    });
                });
                </script>
                </div>              
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
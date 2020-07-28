<?php
include("head.php");
$matk=$_GET['id'];
require('connect.php');
$row = mysqli_fetch_assoc(mysqli_query($conn, "Select * from taikhoan where matk = '$matk'"));
$maquyen = $row['maquyen'];
?>
<body id="page-top">
    <div id="wrapper">
    <?php include("menu.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <nav class="navbar navbar-light navbar-expand-md">
                            <div class="container-fluid"><a class="navbar-brand" href="qldiemchuan.php?id=<?php echo $matk?>">Điểm chuẩn</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-2">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="themdiem.php?id=<?php echo $matk?>">Thêm điểm chuẩn</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $row['tentk']?></span><img class="border rounded-circle img-profile" src="images/avatar5.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="hoso.php?id=<?php echo $row['matk']?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="login.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
            </div>
            </nav>
            <div class="container-fluid" style="overflow: auto;">
            <div class="row pull-right">
                <strong>Năm:</strong> 
                <select class="form-control" style="width:100px; height:30px" id="nam" name="nam">
                <?php
                $sqlnam="select distinct nam from diemchuan order by nam desc";
                mysqli_set_charset($conn, 'UTF8');
                $resultnam = mysqli_query($conn, $sqlnam);
                if (mysqli_num_rows($resultnam) > 0) {
                while ($rownam = mysqli_fetch_assoc($resultnam)) {
                    echo '<option value="' . $rownam['nam'] . '" ><a href="#">' . $rownam['nam'] . '</a></option>';
                }
                }
                ?> 
                </select>
                
            </div>
            <div >
                <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Mã ngành</th>
                        <th>Tên ngành</th>
                        <th>Tổ hợp môn</th>
                        <th>Chỉ tiêu</th>
                        <th>Điểm chuẩn</th>
                        <th>Ghi chú</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody id="bangdiem" name="bangdiem">
                <?php 
                $result=mysqli_query($conn, "select * from diemchuan,nganh where diemchuan.manganh=nganh.manganh and nam='2020'");
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
        }?>
                </tbody>
                </table>
            </div>
            <script>
                    $(document).ready(function(){
                    $("#nam").on('change',function(){
                        var nam=$(this).val();
                        var matk='<?php echo $matk?>';
                        $.ajax({
                            type:"POST",
                            url:"ajax.php",
                            data:{idnam:nam , idtk:matk},
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
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

<?php
include("foot.php");
?>
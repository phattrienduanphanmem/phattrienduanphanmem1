<?php
session_start();
if(empty($_SESSION['matk'])){ header('Location: login.php');}
include("head.php");
$matk=$_SESSION['matk'];
require('connect.php');
$sql = "Select * from taikhoan where matk = '$matk'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<body id="page-top">
    <div id="wrapper">
    <?php include("menu.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <nav class="navbar navbar-light navbar-expand-md">
                            <div class="container-fluid"><a class="navbar-brand" href="#">Tuyển sinh</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div
                                    class="collapse navbar-collapse" id="navcol-2">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="TuyenSinh.php">Đơn chưa duyệt</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="QuanLyDonDaDuyet.php">Đơn đã xét duyệt</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="QuanLyDiem.php">Quản lý điểm</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="QuanLyDonLoaiBo.php">Đơn loại bỏ</a></li>
                                    </ul>
                            </div>
                    </div>
                    </nav>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $row['tentk']?></span><img class="border rounded-circle img-profile" src="images/avatar5.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="hoso.php?id=<?php echo $row['matk']?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
        </div>
        </nav>
        <div class="container">
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Sắp xếp theo</button>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div><span>Lọc theo lượng chỉ tiêu: &nbsp; &nbsp;&nbsp;</span><input type="number">
            <hr><button class="btn btn-primary" type="button">Lọc thí sinh</button></div>
        <div class="container">
            <div class="table-responsive table-bordered table table-hover table-bordered results">
                <table class="table table-bordered table-hover">
                    <thead class="bill-header cs">
                        <tr>
                            <th id="trs-hd" width="5%">Stt</th>
                            <th id="trs-hd" width="10%">ID Thí sinh</th>
                            <th id="trs-hd" width="20%">Họ tên thí sinh</th>
                            <th id="trs-hd" width="15%">Ngày nộp đơn</th>
                            <th id="trs-hd" width="15%">Ngày xét duyệt</th>
                            <th id="trs-hd" width="15%">Mã QR</th>
                            <th id="trs-hd" width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1977</td>
                            <td>Ông Giáo</td>
                            <td>15-07-2020<br></td>
                            <td>15-07-2020<br></td>
                            <td class="d-xl-flex justify-content-xl-center"><img src="assets/img/qrcode.png" style="max-width: 100px;max-height: 100px;"></td>
                            <td class="text-center"><a class="btn btn-success" role="button" style="margin-left: 5px;" href="#"><i class="fa fa-folder-open-o" style="font-size: 15px;"></i></a><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>7791</td>
                            <td>Cậu Vàng</td>
                            <td>15-07-2020<br></td>
                            <td>15-07-2020<br></td>
                            <td class="d-xl-flex justify-content-xl-center"><img src="assets/img/qrcode.png" style="max-width: 100px;max-height: 100px;"></td>
                            <td class="text-center"><a class="btn btn-success" role="button" style="margin-left: 5px;" href="#"><i class="fa fa-folder-open-o" style="font-size: 15px;"></i></a><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
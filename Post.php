<?php
include("head.php");
$matk=$_GET['id'];
require('connect.php');
$sql = "Select * from taikhoan where matk = '$matk'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$maquyen = $row['maquyen'];
if($maquyen=="3"){$sqlpost = "Select * from baiviet";}
else if($maquyen=="2"){$sqlpost = "Select * from baiviet where matk = '$matk'";}
$resultpost = mysqli_query($conn, $sqlpost);
?>

<body id="page-top">
    <div id="wrapper">
    <?php include("menu.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <nav class="navbar navbar-light navbar-expand-md">
                            <div class="container-fluid"><a class="navbar-brand" href="Post.php?id=<?php echo $matk?>">Bài viết</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-2">
                                    <ul class="nav navbar-nav">

                                        <li class="nav-item" role="presentation"><a class="nav-link" href="thembaiviet.php?id=<?php echo $matk?>">Thêm bài viết</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $row['tentk']?></span><img class="border rounded-circle img-profile" src="images/avatar5.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="login.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid" style="overflow: auto;">
                <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th width="40px">Sửa</th>
                        <th width="40px">Xoá</th>
                        <th width="80px">Mã bài viết</th>
                        <th width="200px">Tiêu đề</th>
                        <th width="150px">Ảnh</th>
                        <th width="400px">Nội dung</th>
                        <th width="193px">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
              <?php
                if (mysqli_num_rows($resultpost) > 0) {
                  while ($rowpost = mysqli_fetch_assoc($resultpost)) {
                    echo '<tr><td><a href="suabv.php?id='.$matk.'&post='.$rowpost['mabv'].'"><img src="images/edit.gif" border="0"></a></td>';
                    echo '<td><a href="xulyxoabv.php?id='.$matk.'&post='.$rowpost['mabv'].'"><img src="images/deleted.jpg" border="0"></a></td>';
                    echo '<td>'.$rowpost['mabv'].'</td>';
                    echo '<td>'.$rowpost['tieude'].'</td>';
                    echo '<td><img src="'.$rowpost['anh'].'" width="150px" height="150px"></td>';
                    echo '<td>'.$rowpost['noidung'].'</td>';
                    echo '<td>'.$rowpost['ngaytao'].'</td></tr>';
                  }
                }
              ?>
            </tbody>
    
</table></div>
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
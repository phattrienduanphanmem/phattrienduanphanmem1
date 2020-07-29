<?php
include("head.php");
$matk=$_GET['id'];
require('connect.php');
$sql = "Select * from taikhoan where matk = '$matk'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$maquyen = $row['maquyen'];
?>
<?php
    $sqltk="select * from taikhoan";
    mysqli_set_charset($conn, 'UTF8');
    $result = mysqli_query($conn, $sqltk);
?>

<body id="page-top">
    <div id="wrapper">
    <?php include("menu.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <nav class="navbar navbar-light navbar-expand-md">
                            <div class="container-fluid"><a class="navbar-brand" href="User.php?id=<?php echo $matk?>">User</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-2">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="Register.php?id=<?php echo $matk?>">Thêm admin</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="capquyen.php?id=<?php echo $matk?>">Cấp quyền</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="xoataikhoan.php?id=<?php echo $matk?>">Xóa</a></li>
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
                <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>

                        <th>Permission</th>
                    </tr>
                </thead>
                <tbody>
              <?php
                if (mysqli_num_rows($result) > 0) {
                  while ($rowtk = mysqli_fetch_assoc($result)) {
                    if ($rowtk['maquyen']==3) $maquyen1='Super Admin';
                    else 
                    {if ($rowtk['maquyen']==2) $maquyen1='Admin';
                    else $maquyen1='Viewer';
                    }
                    echo '<tr><td>'.$rowtk['matk'].'</td>';
                    echo '<td>'.$rowtk['tentk'].'</td>';
                    echo '<td>'.$rowtk['email'].'</td>';

                    echo '<td>'.$maquyen1.'</td></tr>';
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
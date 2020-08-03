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
                            <div class="container-fluid"><a class="navbar-brand" href="Post.php">Bài viết</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-2">
                                    <ul class="nav navbar-nav">

                                        <li class="nav-item" role="presentation"><a class="nav-link" href="thembaiviet.php">Thêm bài viết</a></li>
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
            <form class="form-register" id="fileupload"method="POST" enctype="multipart/form-data" action="xulythembv.php">
                <div class="container-fluid">
                    <h6 style="color: rgb(0,0,0);">Chủ đề bài viết</h6>
                    <select name="chude" id="chude" class="form-control">
                    <option value="tt">Tin tức</option>
                    <option value="tb">Thông báo</option>
                    </select>
                    <h6 style="color: rgb(0,0,0);">Tiêu đề bài viết</h6><input class="form-control" id="tieude"name="tieude" type="text" required autofocus>
                    <input type="file" name="image" id="image" class="form-control " style="margin-top:20px" required autofocus>
                    <h6 style="color: rgb(0,0,0);">Tóm tắt</h6>
                    <input class="form-control" id="tomtat" name="tomtat" type="text" required autofocus>
                    <h6 style="color: rgb(0,0,0);">Nội dung</h6>
                    <textarea name="noidung" id="noidung" rows="10" cols="150"></textarea>
                <hr><button class="btn btn-primary" type="submit"id="newpost" name="newpost">Tạo bài viết</button></div>
            </form>
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
<script src="./ckeditor/ckeditor.js"></script>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'noidung' );// tham số là biến name của textarea
</script>
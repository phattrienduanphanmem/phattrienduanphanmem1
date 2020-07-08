<!doctype html>
<html lang="en">
  <head>
    <title>Quản Lý Lịch Trình Giảng Dạy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="skins/css/bootstrap.min.css" >
    <link rel="stylesheet" href="skins/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="xet/style.css">
  </head>
  <body>
  <form method="post" action="/" id="Form" enctype="multipart/form-data">
<!-- BEGIN: HEADER -->
<header class="header-page">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-7">
          <div class="header-brand">
            <a href="/">
                <img src="skins/images/logo.png" alt="Trường Đại học Thủy lợi" class="d-none d-md-block">
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="header-right">
            <ul class="header-links">
              <li><a href="#">Đăng ký</a></li>
              <li><a href="#">Đăng nhập</a></li>
              <li><a href="#">Liên hệ</a></li>
            </ul>
<!--Begin Search-->
    <div class="header-search ng-scope" ng-controller="myCntrl1533">
        <div class="form-search">
            <input class="form-control" type="text" id="tbxHomekeyword" placeholder="Tìm kiếm">
            <input type="button" class="form-submit" ng-click="formClick()">
        </div>
    </div>  
<!--End Search-->
            <div class="languages">
              <a href="#"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- END: HEADER -->
<section class="section-banner">
    <div class="navigation">
      <div class="container">
    <nav class="mainmenu" id="mainmenu">
    <ul class="menu clearfix">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:130%"></i></a></li>
            <li><a href="http://www.tlu.edu.vn">TLU</a></li>
            <li>
                <a href="tuyensinhdaihoc.php">Tuyển sinh đại học</a>
            </li>
            <li>
                <a href="tintuyensinhthacsi.php">Tuyển sinh thạc sĩ</a>
            </li>
            <li>
                <a href="tuyensinhtiensi.php">Tuyển sinh tiến sĩ</a>
            </li>
            <li>
                <a>Ngành đào tạo</a>
                <ul class="sub-menu">
                    <li><a  href="nganhdaotaodaihoc.php">Ngành đào tạo ĐẠI HỌC</a></li>
                    <li><a  href="nganhdaotaothacsi.php">Ngành đào tạo THẠC SĨ</a></li>
                    <li><a  href="nganhdaotaotiensi.php">Ngành Đào tạo TIẾN SĨ</a></li>
                </ul>
            </li>
            <li>
                <a href="xettuyentructuyen.php">Đăng ký xét tuyển đại học</a>
            </li>
        </ul>
        </nav>
    </div>
</div>
</section>
<div style="margin-top:50px"></div>
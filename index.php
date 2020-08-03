<?php
include("header.php");
?>
<div class="banner-item slick-slide slick-current slick-active" style="margin-top:50px">
    <img src=images/banner-img-3.jpg >
</div>
<main class="main-content">
    <div class="container">
        <div style="margin-top:20px"></div>
        <div class="admission">
            <div class="Normal">
	            <div class="heading">
                    <h3 class="title typescale-1">Tuyển sinh</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-9 col-featured">
                    <div class="row featured">
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="tuyensinhdaihoc.php"><img alt="Tin tuyển sinh đại học" src="images/featured-thumb1.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhdaihoc.php">Tuyển sinh đại học</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="tuyensinhthacsi.php"><img alt="Tin tuyển sinh đại học" src="images/featured-thumb2.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhthacsi.php">Tuyển sinh thạc sĩ</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="tuyensinhtiensi.php"><img alt="Tin tuyển sinh đại học" src="images/featured-thumb3.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhtiensi.php">Tuyển sinh tiến sĩ</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="nganhdaotaodaihoc.php"><img alt="Tin tuyển sinh đại học" src="images/totnghiepdhthumb.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="nganhdaotaodaihoc.php">Ngành đào tạo ĐẠI HỌC</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="nganhdaotaothacsi.php"><img alt="Tin tuyển sinh đại học" src="images/thacsithumb.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="nganhdaotaothacsi.php">Ngành đào tạo THẠC SĨ</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" ng-repeat="item in AllItems" ng-show="$index==1">
                                <div class="featured-img">
                                    <a href="nganhdaotaotiensi.php"><img alt="Tin tuyển sinh đại học" src="images/doctorate.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a ng-bind-html="item.Name" class="ng-binding" href="nganhdaotaotiensi.php">Ngành Đào tạo TIẾN SĨ</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="block-ads">
                        <div id="dnn_ctr1509_HtmlModule_lblContent" class="Normal">
                            <p><a href="/xet-tuyen-truc-tuyen"><img alt="Image" src="images/XetTuyenBanner.jpg"> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-qa">
                    <div class="qa ng-scope" ng-controller="myCntrl1591">
                     <?php 
                        include("./formquestion.php");
                     ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-news">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box-news">
                        <div class="heading">
                            <h3 class="title typescale-1"><a href="tintucdaihoc.php" ng-bind-html="CategoryName" class="ng-binding">Tin tức đại học</a></h3>
                        </div>
                        <div class="view-all"><a href="tintucdaihoc.php" class="btn btn-outline-dark rounded-0">Xem thêm <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-news">
                        <div class="heading">
                            <h3 class="title typescale-1"><a href="tintucsaudaihoc.php" ng-bind-html="CategoryName" class="ng-binding">Tin tức sau đại học</a></h3>
                        </div>
                            <div class="view-all"><a href="tintucsaudaihoc.php" class="btn btn-outline-dark rounded-0">Xem thêm <i class="fa fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
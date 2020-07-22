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
                        <div class="title typescale-4 text-center">Đặt câu hỏi mới</div>
                        <div class="qa-form">
                            <form class="forms ng-pristine ng-invalid ng-invalid-required" action="" method="POST">
                                <div class="form-group">
                                    <label class="required">Họ tên</label>
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="qa.PostUser" id="PostUser">
                                </div>
                                <div class="form-group">
                                    <label class="required">Địa chỉ</label>
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="qa.PostUserAddress" id="PostUserAddress">
                                </div>
                                <div class="form-group">
                                    <label class="required">Email</label>
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="qa.PostUserMail" id="PostUserMail">
                                </div>
                                <div class="form-group">
                                    <label class="required">Ngành tuyển sinh</label>
                                    <select ng-model="mdlCate" ng-change="CateChanged(mdlCate)" class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="mdlCate" data-ng-options="item as item.CateName for item in FaqCategories"><option value="" class="" selected="selected">--- Lĩnh vực ---</option><option label="Kỹ thuật cơ điện tử" value="object:63">Kỹ thuật cơ điện tử</option><option label="Kỹ thuật ô tô" value="object:64">Kỹ thuật ô tô</option><option label="Chương trình tiên tiến ngành Kỹ thuật xây dựng" value="object:65">Chương trình tiên tiến ngành Kỹ thuật xây dựng</option><option label="Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước" value="object:66">Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước</option><option label="Kỹ thuật điều khiển và tự động hóa" value="object:67">Kỹ thuật điều khiển và tự động hóa</option><option label="Quản lý xây dựng" value="object:68">Quản lý xây dựng</option><option label="Kinh tế" value="object:69">Kinh tế</option><option label="Kỹ thuật điện" value="object:70">Kỹ thuật điện</option><option label="Thủy văn học" value="object:71">Thủy văn học</option><option label="Kỹ thuật cơ sở hạ tầng" value="object:72">Kỹ thuật cơ sở hạ tầng</option><option label="Nhóm ngành Kỹ thuật Cơ khí" value="object:73">Nhóm ngành Kỹ thuật Cơ khí</option><option label="Nhóm ngành Công nghệ thông tin" value="object:74">Nhóm ngành Công nghệ thông tin</option><option label="Công nghệ sinh học" value="object:75">Công nghệ sinh học</option><option label="Kỹ thuật hóa học" value="object:76">Kỹ thuật hóa học</option><option label="Kỹ thuật môi trường" value="object:77">Kỹ thuật môi trường</option><option label="Kỹ thuật cấp thoát nước" value="object:78">Kỹ thuật cấp thoát nước</option><option label="Kỹ thuật tài nguyên nước" value="object:79">Kỹ thuật tài nguyên nước</option><option label="Kỹ thuật xây dựng công trình giao thông" value="object:80">Kỹ thuật xây dựng công trình giao thông</option><option label="Công nghệ kỹ thuật xây dựng" value="object:81">Công nghệ kỹ thuật xây dựng</option><option label="Kỹ thuật xây dựng" value="object:82">Kỹ thuật xây dựng</option><option label="Kỹ thuật xây dựng công trình thủy" value="object:83">Kỹ thuật xây dựng công trình thủy</option></select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Tiêu đề hỏi</label>
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="qa.PostTitle" id="PostTitle">
                                </div>
                                <div class="form-group">
                                    <label class="required">Câu hỏi</label>
                                    <textarea class="form-control ng-pristine ng-untouched ng-valid ng-empty" cols="10" rows="4" ng-model="qa.PostContent" id="PostContent"></textarea>
                                </div>
                                <div style="margin-top:3px;text-align:center;">
                                    <button type="button" class="btn btn-outline-dark2" ng-click="SendQA()" style="width:150px;margin-right:12px">Gửi câu hỏi</button>
                                </div>
                            </form>
                        </div>
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
<?php
include("header.php");
require('connect.php');
$sql = "Select * from baiviet where chude = 'Tin tức sau đại học'";
$result = mysqli_query($conn, $sql);
?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
        <div class="row">
            <div class="col-md-4 col-lg-3 slide-left mb-4 mb-md-0">
                <div class="category">
                    <div class="heading2">
                        <h3 class="title typescale-4"><a href="http://ts.tlu.edu.vn/nganh-dao-tao-dai-hoc" ng-bind-html="CategoryName" class="ng-binding">Ngành đào tạo ĐẠI HỌC</a> <i class="fa fa-angle-down d-md-none"></i></h3>
                    </div>
                    <div class="category-content">
                        <ul class="category-list">
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope">
                                <a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật xây dựng công trình thủy</a>
                            </li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật xây dựng</a></li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Công nghệ kỹ thuật xây dựng</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật xây dựng công trình giao thông</a></li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật tài nguyên nước</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật cấp thoát nước</a></li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật môi trường</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật hóa học</a></li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Công nghệ sinh học</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Nhóm ngành Công nghệ thông tin</a></li>
                            <li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Nhóm ngành Kỹ thuật Cơ khí</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật cơ sở hạ tầng</a></li>
                            <!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Thủy văn học</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật điện</a></li>
                            <!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kinh tế</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Quản lý xây dựng</a></li>
                            <!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật điều khiển và tự động hóa</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước</a></li>
                            <!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Chương trình tiên tiến ngành Kỹ thuật xây dựng</a></li><!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật ô tô</a></li>
                            <!-- end ngRepeat: item in AllItems --><li ng-repeat="item in AllItems" style="list-style:disc;margin-left:10px" class="ng-scope"><a ng-click="ViewItem(item)" class="ng-binding">Kỹ thuật cơ điện tử</a></li><!-- end ngRepeat: item in AllItems -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-main">
                <div class="post">
                    <div class="heading">
                        <h3 class="title typescale-1 ng-binding" ng-bind-html="NewsItem.Name">Kỹ thuật xây dựng công trình thủy</h3>
                    </div>
                    <div class="post-content ng-binding" ng-bind-html="NewsItem.Content"><p><img alt="" src="http://www.tlu.edu.vn/Portals/0/2020/Thang5/KTXDCTThuy.jpg" title="">​<br></p><div></div></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
            <div class="row">
        <!--Begin Tab-->
        <nav class="navbar navbar-light navbar-expand-md">
            <button class="tablink nav-link active" onclick="openPage('News', this, 'white')" id="defaultOpen" style="background-color: white;">Tin tức</button>
            <button class="tablink nav-link" onclick="openPage('Inform', this, 'white')" style="">Thông báo</button>
        </nav>

        <div id="News" class="tabcontent" style="display: block;">
            <div class="row-">
                <ul class="unstyle-dot">
                <?php
                require('connect.php');
                $sql = "Select * from baiviet where chude = 'Tin tức'";
                $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <li ng-repeat="item in AllMoreItems" class="ng-scope">
                            <div class="row">
                                <div class="col-sm-3">
                                    <figure class="figure">
                                        <a href="#">
                                            <img class="img-responsive" alt="Image" src="<?php echo $row['anh']; ?>">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-sm-9" style="text-align:justify">
                                    <h3 class="related-title">
                                        <a href="#" class="ng-binding"><?php echo $row['tieude'] ?></a>
                                    </h3>
                                    <p class="time-post ng-binding" ng-bind="item.PublishTime | date:'dd/MM/yyyy HH:mm'" style="font-size:12px"><?php echo $row['ngaytao']; ?></p>
                                    <p ng-bind-html="item.Description" class="ng-binding"><?= $row['noidung']; ?></p>
                                    <p class="text-right font-16px"><a href="#!"><i class="fa fa-angle-right"></i> <em>Xem chi tiết</em></a></p>
                                </div>
                            </div>
                        </li>
                        <?php }} ?>
                </ul>
                <div class="text-right pt-3" style="width:100%">
                    <a ng-href="http://www.tlu.edu.vn/tin-tuc" class="more" href="http://www.tlu.edu.vn/tin-tuc">
                        <i class="fa fa-angle-double-right"></i>Xem tất cả
                    </a>
                </div>
            </div>
        </div>

        <div id="Inform" class="tabcontent" style="display: none;">
            <div class="row-">
                <ul class="unstyle-dot">
                    <li ng-repeat="item in InformItems" class="ng-scope"><a ng-href="http://www.tlu.edu.vn/tin-tuc/thong-bao-cap-hoc-bong-cho-thi-sinh-11064" ng-bind-html="item.Name" class="ng-binding" href="http://www.tlu.edu.vn/tin-tuc/thong-bao-cap-hoc-bong-cho-thi-sinh-11064">Thông báo cấp Học bổng cho thí sinh trúng tuyển Đại học hệ chính quy và nhập học vào Trường Đại học Thủy lợi năm 2020</a><span ng-show="item.Icon!=''" class="ng-hide"><img ng-src=""></span></li><!-- end ngRepeat: item in InformItems --><li ng-repeat="item in InformItems" class="ng-scope"><a ng-href="http://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-thong-bao-tuyen-11062" ng-bind-html="item.Name" class="ng-binding" href="http://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-thong-bao-tuyen-11062">Trường Đại học Thủy lợi thông báo Tuyển sinh đại học hệ chính quy năm 2020</a><span ng-show="item.Icon!=''" class="ng-hide"><img ng-src=""></span></li><!-- end ngRepeat: item in InformItems --><li ng-repeat="item in InformItems" class="ng-scope"><a ng-href="http://www.tlu.edu.vn/tin-tuc/cuoc-thi-tim-kiem-y-tuong-kinh-doanh-13211" ng-bind-html="item.Name" class="ng-binding" href="http://www.tlu.edu.vn/tin-tuc/cuoc-thi-tim-kiem-y-tuong-kinh-doanh-13211">Cuộc thi tìm kiếm ý tưởng kinh doanh mới do Hiệp hội Doanh nghiệp Đức (GBA) tổ chức</a><span ng-show="item.Icon!=''" class="ng-hide"><img ng-src=""></span></li><!-- end ngRepeat: item in InformItems --><li ng-repeat="item in InformItems" class="ng-scope"><a ng-href="http://www.tlu.edu.vn/tin-tuc/mot-so-thong-tin-sinh-hoat-lop-thang-7-13209" ng-bind-html="item.Name" class="ng-binding" href="http://www.tlu.edu.vn/tin-tuc/mot-so-thong-tin-sinh-hoat-lop-thang-7-13209">Một số thông tin sinh hoạt lớp tháng 7 năm 2020</a><span ng-show="item.Icon!=''" class="ng-hide"><img ng-src=""></span></li><!-- end ngRepeat: item in InformItems --><li ng-repeat="item in InformItems" class="ng-scope"><a ng-href="http://www.tlu.edu.vn/tin-tuc/thong-bao-so-2-cuoc-thi-sinh-vien-voi-13207" ng-bind-html="item.Name" class="ng-binding" href="http://www.tlu.edu.vn/tin-tuc/thong-bao-so-2-cuoc-thi-sinh-vien-voi-13207">Thông báo số 2 Cuộc thi “Sinh viên với ý tưởng khởi nghiệp”  năm 2020</a><span ng-show="item.Icon!=''" class="ng-hide"><img ng-src=""></span></li><!-- end ngRepeat: item in InformItems -->
                </ul>
                <div class="text-right pt-3" style="width:100%">
                    <a ng-href="http://www.tlu.edu.vn/thong-bao" class="more" href="http://www.tlu.edu.vn/thong-bao">
                        <i class="fa fa-angle-double-right"></i>Xem tất cả
                    </a>
                </div>
            </div>
        </div>
    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
                tablinks[i].classList.remove("active");
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            elmnt.classList.add("active");
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


                
            </div>
        </div>
    </div>
</main>
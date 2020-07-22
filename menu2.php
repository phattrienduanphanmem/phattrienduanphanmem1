<div class="col-md-4 col-lg-3 slide-left mb-4 mb-md-0">
    <div class="tlu-menu ng-scope" ng-controller="myCntrl1534">
        <div class="column-2">
            <ul style="padding-left: 0px;">
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhdaihoc.php">Tuyển sinh đại học</a>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhthacsi.php">Tuyển sinh thạc sĩ</a>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href="tuyensinhtiensi.php">Tuyển sinh tiến sĩ</a>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a  ng-bind-html="item.Name" class="ng-binding" href="tintucdaihoc.php">Tin tức đại học</a>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href="tintucsaudaihoc.php">Tin tức sau đại học</a>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding">Ngành đào tạo</a>
                    <ul>
                        <li ng-repeat="item1 in item.Children" class="ng-scope">
                            <a ng-bind-html="item1.Name" class="ng-binding" href="nganhdaotaodaihoc.php">Ngành đào tạo ĐẠI HỌC</a>
                        </li>
                        <li ng-repeat="item1 in item.Children" class="ng-scope">
                            <a ng-bind-html="item1.Name" class="ng-binding" href="nganhdaotaothacsi.php">Ngành đào tạo THẠC SĨ</a>
                        </li>
                        <li ng-repeat="item1 in item.Children" class="ng-scope">
                            <a ng-bind-html="item1.Name" class="ng-binding" href="nganhdaotaotiensi.php">Ngành Đào tạo TIẾN SĨ</a>
                        </li>
                    </ul>
                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href="hoidap.php">Hỏi đáp</a>

                </li>
                <li ng-repeat="item in AllItems" ng-if="$index>0" class="ng-scope">
                    <a ng-bind-html="item.Name" class="ng-binding" href=xettuyentructuyen.php>Đăng ký xét tuyển đại học</a>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
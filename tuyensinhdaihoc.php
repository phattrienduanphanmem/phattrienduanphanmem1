<?php
include("header.php");
require('connect.php');
$sql = "Select * from baiviet where chude = 'Tuyển sinh đại học'";
$result = mysqli_query($conn, $sql);
?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
            <div class="row">
                <?php include("menu2.php"); ?>
                <div class="col-md-8 col-lg-9 col-main">
                    <div class="heading">
                        <h3 class="title typescale-1">Tuyển sinh đại học</h3>
                    </div>
                    <ul class="related-list" stype="list-style:none">
                    <?php
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
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
<?php
include("header.php");
require('connect.php');
$result = mysqli_fetch_assoc(mysqli_query($conn, "Select * from baiviet where chude = 'Học Phí'"));
?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
            <div class="row">
                <?php include("menusinhvien.php");?> 
                <div class="col-md-8 col-lg-9 col-main">
                    <div class="col-md-12" style="border: 1px solid #ff6e00;">
                        <h1 style="text-align:center; padding: 10px 0px;"><?php echo $result['tieude']; ?></h1>
                        <p><?php echo $result['noidung'];?></p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
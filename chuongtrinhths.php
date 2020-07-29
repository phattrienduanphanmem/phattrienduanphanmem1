<?php
include("header.php");

?>
<main class="main-content">
    <div class="container">
        <div style="margin-top:70px"></div>
        <div class="primary-content">
            <div class="row">
                <?php include("menuctdt.php");?>
                <div class="col-md-8 col-lg-9 slide-left mb-8 mb-md-0">
                <div class="col-md-12" style="border: 1px solid #ffddc3;">
        <div class="news-title ng-binding" ng-bind-html="Name" style="padding: 10px 10px;" ng-show="Viewtitle">Chương trình đào tạo các chuyên ngành trình độ thạc sĩ</div>

        <!-- Load Facebook SDK for JavaScript -->
        <div class="row" style="padding: 15px 0px;">
            <div class="col-md-12">

                <table style="width: 100%">
                    <tbody><tr>
                        <td style="width: 20%;padding-left:10px"><span ng-bind-html="PublishTime | date:'dd/MM/yyyy HH:mm'" class="ng-binding">28/03/2017 00:00</span></td>
                        <td>&nbsp;</td>
                        <td style="text-align:right;padding-right:5px"><i class="fa fa-eye" aria-hidden="true"></i> <span ng-bind-html="Hit" class="ng-binding">8639</span></td>
                        <td style="width: 10%;">
                            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                            <script>
                                (function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                            <!-- Your share button code -->
                            <div class="fb-share-button fb_iframe_widget" data-href="/chuong-trinh-dao-tao-ths" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=84&amp;href=http%3A%2F%2Fwww.tlu.edu.vn%2Fchuong-trinh-dao-tao-ths&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="f1c0779928e46c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.0/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfffc7585698344%26domain%3Dwww.tlu.edu.vn%26origin%3Dhttp%253A%252F%252Fwww.tlu.edu.vn%252Ff1abc25d4662188%26relation%3Dparent.parent&amp;container_width=84&amp;href=http%3A%2F%2Fwww.tlu.edu.vn%2Fchuong-trinh-dao-tao-ths&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
        </div>

        <div ng-show="Viewimg" class="ng-hide"><img ng-src="/Portals/0/Images/CTDT.jpg" src="/Portals/0/Images/CTDT.jpg"></div>

        <div class="col-md-12">
            <div class="news-sumary ng-binding ng-hide" ng-bind-html="Description" ng-show="Viewsum">Hiện nay trường Đại học Thủy lợi đang đào tạo 20 chuyên ngành trình độ thạc sĩ trong đó có 4 chuyên ngành được đào tạo bằng Tiếng Anh.</div>
            <div class="news-content ng-binding" ng-bind-html="Content"><p style="text-align: center;"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>DANH MỤC CÁC CHUYÊN NGÀNH ĐÀO TẠO THẠC SĨ</strong></span></span></p>

<p><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>1. Các chuyên ngành học bằng tiếng Việt</strong></span></span></p>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="650">
 <tbody>
  <tr>
   <td style="width:47px;height:60px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>STT</strong></span></span></p>
   </td>
   <td style="width:360px;height:60px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>Chuyên ngành</strong></span></span></p>
   </td>
   <td style="width:129px;height:60px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>Mã số</strong></span></span></p>
   </td>
   <td style="width:114px;height:60px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>Nội dung chương trình </strong></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">1</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật xây dựng công trình thủy</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580202</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/C.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">2</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật xây dựng công trình dân dụng và công nghiệp</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580208</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/CX.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">3</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Địa kỹ thuật xây dựng</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580204</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/DKT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">4</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Quản lý xây dựng</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580302</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/QLXD.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;height:36px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">5</span></span></p>
   </td>
   <td style="width:360px;height:36px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật tài nguyên nước</span></span></p>
   </td>
   <td style="width:129px;height:36px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580212</span></span></p>
   </td>
   <td style="width:114px;height:36px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/Q.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">6</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật cơ sở hạ tầng</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580210</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/CTN.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">7</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Thủy văn học</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60440225</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/V.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">8</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Khoa học môi trường</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60440301</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/KHMT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">9</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật môi trường</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60520320</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/KTMT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">10</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật cơ khí</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60520103</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/CK.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">11</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật xây dựng công trình biển</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580203</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="/Portals/0/2017-3/11_KTXDCTB_CH.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">12</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Quản lý tài nguyên và môi trường</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60850101</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/KT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">13</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật điện</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60520202</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/KTD.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">14</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Quản lý kinh tế</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60340410</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/QLKT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">15</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Công nghệ thông tin</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60480201</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/CNTT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">16</span></span></p>
   </td>
   <td style="width:360px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật xây dựng công trình giao thông</span></span></p>
   </td>
   <td style="width:129px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">60580205</span></span></p>
   </td>
   <td style="width:114px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="http://daotao.tlu.edu.vn/ftp/p3/Upload/CH/ChuongTrinhDaoTao/nam2017/CTGT.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
 </tbody>
</table>

<div style="clear:both;">&nbsp;</div>

<p><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>2. Các chuyên ngành học bằng tiếng Anh</strong></span></span></p>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="652">
 <tbody>
  <tr>
   <td style="width:47px;height:20px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>STT</strong></span></span></p>
   </td>
   <td style="width:485px;height:20px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>Chuyên ngành</strong></span></span></p>
   </td>
   <td style="width:120px;height:20px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;"><strong>Nội dung chương trình</strong></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;height:24px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">1</span></span></p>
   </td>
   <td style="width:485px;height:24px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Quản lý tổng hợp tài nguyên nước</span></span></p>
   </td>
   <td style="width:120px;height:24px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="/Portals/0/2017-3/17_QLTHTNN_CH.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;height:33px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">2</span></span></p>
   </td>
   <td style="width:485px;height:33px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Quản lý và giảm nhẹ thiên tai</span></span></p>
   </td>
   <td style="width:120px;height:33px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="/Portals/0/2017-3/18_QLGNTT_CH.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;height:18px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">3</span></span></p>
   </td>
   <td style="width:485px;height:18px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Kỹ thuật công trình biển và Quản lý tổng hợp vùng bờ</span></span></p>
   </td>
   <td style="width:120px;height:18px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="/Portals/0/2017-3/19_KTCTBvQLBDB_CH.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
  <tr>
   <td style="width:47px;height:18px;">
   <p align="center"><span style="font-size:130%;"><span style="font-family:times new roman;">4</span></span></p>
   </td>
   <td style="width:485px;height:18px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;">Công trình thủy lợi bền vững (do Vương quốc Bỉ cấp bằng và sẽ có thông báo sau)</span></span></p>
   </td>
   <td style="width:120px;height:18px;">
   <p><span style="font-size:130%;"><span style="font-family:times new roman;"><a href="/Portals/0/2017-3/20_CTTLBV.pdf">Xem chi tiết</a></span></span></p>
   </td>
  </tr>
 </tbody>
</table>

<div style="clear:both;">&nbsp;</div>

<p>&nbsp;</p>
</div>
            <div ng-bind-html="Tags" style="margin-top: 20px;text-align: justify;" class="ng-binding"></div>
        </div>
    </div>
                </div>

                
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>
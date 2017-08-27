<div class="footer-top-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer-about-us">
          <h2><span>Thực Phẩm Sạch</span></h2>
          <p>- Cửa hàng số 1: Số 5 lô I4 khu đô thị Yên Hòa, Trung Kính, Cầu Giấy, Hà Nội (Qua Nội thất Nhà Xinh đường đôi Trung Kính rẽ phải hoặc Rẽ vào ngõ 37 đường Trần Kim Xuyến). Điện thoại 0969 224 255</p>
          <p>- Cửa hàng số 2: Số 146 Nguyễn Khuyến, Đống Đa, Hà Nội. ĐT: 0986 672 525</p>
          <p>- Cửa hàng số 3: Chung cư A1, ngõ 229 phố Vọng, Hai Bà Trưng, Hà Nội. ĐT: 0986 634 048</p>
          <p>- Thời gian: 6h-20h hàng ngày.</p>
          <p>- Email: khanhhbit@gmail.com</p>
          <div class="footer-social">
            <a href="https://www.facebook.com/profile.php?id=100006828376284" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/khanhhbvip1/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCP5knfvf0-8CtJUPxA-YYEA" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="https://plus.google.com/118106247562991483611?hl=vi" target="_blank"><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
          <h2 class="footer-wid-title">Giới thiệu về chúng tôi</h2>
          <ul>
            <li><a href="<?php echo site_url('gioithieu/index') ?>">Về chúng tôi</a></li>
            <li><a href="<?php echo site_url('gioithieu/cachmuahang') ?>">Cách mua hàng</a></li>
            <li><a href="<?php echo site_url('gioithieu/thanhtoan') ?>">Hình thức thanh toán</a></li>
            <li><a href="<?php echo site_url('gioithieu/map') ?>">Bản đố</a></li>
            <li><a href="<?php echo site_url('contact') ?>">liên lạc</a></li>
          </ul>                        
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
          <h2 class="footer-wid-title">Danh mục sản phẩm</h2>
          <ul>
          <?php foreach($catalog_list as $row): ?>
            <li><a href="<?php echo base_url('product/catalog/'.$row->id) ?>"><?php echo $row->name ?></a></li>
          <?php endforeach; ?>
          </ul>                        
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-newsletter">
          <h2 class="footer-wid-title">Fanpage</h2>
         <div class="fb-page" data-href="https://www.facebook.com/G%C3%B3c-Gi%E1%BA%A3i-Tr%C3%AD-713204378709143/" data-width="263" data-height="348" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/G%C3%B3c-Gi%E1%BA%A3i-Tr%C3%AD-713204378709143/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/G%C3%B3c-Gi%E1%BA%A3i-Tr%C3%AD-713204378709143/">Thực Phẩm Sạch Xuân Khánh</a></blockquote></div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="copyright">
          <p>&copy; 2017 Thực phẩm sạch - bản quyền thuộc. <a href="https://www.facebook.com/profile.php?id=100006828376284" target="_blank">Nguyễn Khánh</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="footer-card-icon">
          <i class="fa fa-cc-discover"></i>
          <i class="fa fa-cc-mastercard"></i>
          <i class="fa fa-cc-paypal"></i>
          <i class="fa fa-cc-visa"></i>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End footer bottom area -->

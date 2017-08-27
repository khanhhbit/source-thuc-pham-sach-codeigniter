<div class="content">
  <?php $this->load->view('site/content',$this->data) ?>
</div>

<div class="about"> 
  <div class="container">
    <div class="about-top grid-1">
      <div class="col-md-4 about-left">
        <figure class="effect-bubba">
          <img class="img-responsive" src="<?php echo public_url()?>site/images/giao-hang-tai-nha.jpg" alt="giao-hang-tai-nha"/>
          <figcaption>
            <h2>Giao Hàng Tận Nhà</h2>
            <p>Nhanh chóng chuyện nghiệp</p>  
          </figcaption>     
        </figure>
      </div>
      <div class="col-md-4 about-left">
        <figure class="effect-bubba">
          <img class="img-responsive" src="<?php echo public_url()?>site/images/thuc-pham-danh-cho-phu-nu-sau-sinh.jpg" alt="thuc-pham-danh-cho-phu-nu-sau-sinh"/>
          <figcaption>
            <h4>Xuất Sứ Rõ Ràng</h4>
            <p>An Toàn, Sạch Sẽ</p>  
          </figcaption>     
        </figure>
      </div>
      <div class="col-md-4 about-left">
        <figure class="effect-bubba">
          <img class="img-responsive" src="<?php echo public_url()?>site/images/thuc-pham-sach.png" alt="thuc-pham-sach"/>
          <figcaption>
            <h4>Dịch Vụ Chuyên Nghiệp</h4>
            <p>Tất Cả Chỉ Có Tại Cửa Hàng Chúng Tôi</p>  
          </figcaption>     
        </figure>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="maincontent-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="latest-product">
          <h2 class="section-title">SẢN PHẨM MỚI NHẤT </h2>       
          <div class="product-carousel">
           <?php foreach($product_news as $row):?>
            <div class="single-product">
              <div class="product-f-image">
                <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>">
                <div class="product-hover">
                  <a href="<?php echo base_url('cart/add/'.$row->id) ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Mua Hàng</a>
                  <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" class="view-details-link" title="<?php echo $row->name ?>"><i class="fa fa-link"></i> Chi Tiết</a>
                </div>
              </div>  
              <div class="salel">
                <?php if($row->discount):?>
                  <div class="sale"><?php echo $row->discount ?>%</div>
                <?php else: ?>
                  <div style="display: none"></div>
                <?php endif; ?>
              </div>          
              <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
              </h2>           
              <div class="product-carousel-price">
                <?php if($row->discount > 0):?>
                  <?php $price_news = $row->price - $row->price/100 *$row->discount; ?>
                  <ins><?php echo number_format($price_news) ?> đ</ins> 
                  <del><?php echo number_format($row->price) ?> đ</del>
                <?php else: ?>
                 <ins><?php echo number_format($row->price)?> đ</ins>
               <?php endif; ?>
             </div> 
             <div class="view">
              <h4>Lượt Xem : <?php echo $row->view ?></h4>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>
</div> <!-- End main content area -->

<div class="maincontent-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="latest-product">
        <h2 class="section-title">RAU HỮU CƠ </h2>       
        <div class="product-carousel">
         <?php foreach($product_sp1 as $row):?>
          <div class="single-product">
            <div class="product-f-image">
              <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>">
              <div class="product-hover">
                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Mua Hàng</a>
                <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" class="view-details-link"><i class="fa fa-link"></i> Chi Tiết</a>
              </div>
            </div>  
            <div class="salel">
              <?php if($row->discount):?>
                <div class="sale"><?php echo $row->discount ?>%</div>
              <?php else: ?>
                <div style="display: none"></div>
              <?php endif; ?>
            </div>           
            <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>"><?php echo $row->name ?></a></h2>           
            <div class="product-carousel-price">
              <?php if($row->discount > 0):?>
                <?php $price_news = $row->price - $row->price/100 *$row->discount; ?>
                <ins><?php echo number_format($price_news) ?> đ</ins> 
                <del><?php echo number_format($row->price) ?> đ</del>
              <?php else: ?>
               <ins><?php echo number_format($row->price)?> đ</ins>
             <?php endif; ?>
           </div>
           <div class="view">
            <h4>Lượt Xem : <?php echo $row->view ?></h4>
          </div> 
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</div>
</div> <!-- End main content area -->

<div class="product-widget-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="single-product-widget">
          <h2 class="product-wid-title">Sản phẩm bán chạy</h2>
          <a href="<?php echo base_url('san-pham') ?>" class="wid-view-more">Xem Tất Cả</a>
            <?php foreach($product_view as $row): ?>
            <div class="single-wid-product">
              <div class="productm-img">
                <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>">
                <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>" class="product-thumb">
                </a>
              </div>
              <div class="salel">
                <?php if($row->discount):?>
                  <div class="saler"><?php echo $row->discount ?>%</div>
                <?php else: ?>
                  <div style="display: none"></div>
                <?php endif; ?>
              </div> 
              <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
              </h2>
              <div class="product-wid-price">
                <?php if($row->discount >0): ?>
                  <?php $price_buyed = $row->price - $row->price/100 * $row->discount ?>
                  <ins><?php echo number_format($price_buyed) ?>đ</ins> <del><?php echo number_format($row->price) ?>đ</del> | <b>Lượt mua: <?php echo $row->buyed ?></b>
                <?php else: ?>
                  <ins><?php echo number_format($row->price) ?>đ</ins> | <b>Lượt mua: <?php echo $row->buyed ?></b>
                <?php endif; ?>
              </div>                           
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-product-widget">
          <h2 class="product-wid-title">Mua Nhiều Nhất</h2>
          <a href="<?php echo base_url('san-pham') ?>" class="wid-view-more">Xem Tất Cả</a>
          <?php foreach($product_buyed as $row): ?>
            <div class="single-wid-product">
              <div class="productm-img">
                <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>">
                <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>" class="product-thumb">
                </a>
              </div>
              <div class="salel">
                <?php if($row->discount):?>
                  <div class="saler"><?php echo $row->discount ?>%</div>
                <?php else: ?>
                  <div style="display: none"></div>
                <?php endif; ?>
              </div>
              <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
              </h2>
              <div class="product-wid-price">
                <?php if($row->discount >0): ?>
                  <?php $price_buyed = $row->price - $row->price/100 * $row->discount ?>
                  <ins><?php echo number_format($price_buyed) ?>đ</ins> <del><?php echo number_format($row->price) ?>đ</del> | <b>Lượt mua: <?php echo $row->buyed ?></b>
                <?php else: ?>
                  <ins><?php echo number_format($row->price) ?>đ</ins> | <b>Lượt mua: <?php echo $row->buyed ?></b>
                <?php endif; ?>
              </div>                           
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-product-widget">
          <h2 class="product-wid-title">Xem Nhiều Nhất</h2>
          <a href="<?php echo base_url('san-pham') ?>" class="wid-view-more">Xem Tất Cả</a>
          <?php foreach($product_view as $row): ?>
            <div class="single-wid-product">
              <div class="productm-img">
                <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>">
                <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>" class="product-thumb">
                </a>
              </div>
              <div class="salel">
                <?php if($row->discount):?>
                  <div class="saler"><?php echo $row->discount ?>%</div>
                <?php else: ?>
                  <div style="display: none"></div>
                <?php endif; ?>
              </div>
              <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a></h2>
              <div class="product-wid-price">
                <?php if($row->discount >0): ?>
                  <?php $price_view = $row->price - $row->price/100 * $row->discount ?>
                  <ins><?php echo number_format($price_view) ?>đ</ins> <del><?php echo number_format($row->price) ?>đ</del> | <b>Lượt xem: <?php echo $row->view ?></b>
                <?php else: ?>
                  <ins><?php echo number_format($row->price) ?>đ</ins> | <b>Lượt xem: <?php echo $row->view ?></b>
                <?php endif; ?>
              </div>                           
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End product widget area -->

<div class="home-banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4">
        <a href=""><img src="<?php echo base_url('upload/slide/banner1.jpg') ?>" alt="thuc-pham-sach"></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <a href=""><img src="<?php echo base_url('upload/slide/banner2.jpg') ?>" alt="thuc-pham-sach"></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <a href=""><img src="<?php echo base_url('upload/slide/banner1.jpg') ?>" alt="thuc-pham-sach"></a>
      </div>
    </div>
  </div>
</div>

<div class="home-news">
  <div class="container">
    <h2 class="text1">Góc tin tức &amp; Tư vấn</h2>

    <div class="row">
      <?php foreach($news_list as $row):?>
        <div class="col-xs-12 col-sm-12 col-md-4">  
          <div class="detail-news">
            <a href="<?php echo base_url('news/chitietnews/'.$row->id) ?>"><img src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->title ?>">
            </a>
            <h4><a href="<?php echo base_url('news/chitietnews/'.$row->id) ?>"><?php echo $row->title ?></a></h4>
            <div class="meta">
              <span><i class="fa fa-calendar-minus-o"></i> <?php echo mdate('%d-%m-%y',$row->created) ?> | <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row->count_view ?></span>
            </div>
            <p><?php echo $row->intro ?></p>
            <a href="<?php echo base_url('news') ?>" class="more">Xem thêm</a>     
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<style>

</style>

<div class="opinion">
  <div class="container"> 
    <h2 class="text1">Ý kiến của khách hàng khi mua sản phẩm</h2> 
    <div class="row"> 
     <div class="col-md-12"> 
      <div id="testimonial-slider" class="owl-carousel"> 
       <div class="testimonial"> 
        <div class="content"> 
         <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt.jpg') ?>" alt="Hoàng phương thảo" /></a> 
         </div>
         <div class="testimonial-prof"> 
          <h3 class="testimonial-title">Hoàng phương thảo</h3> <span class="testimonial-post">Email: hoangthao@gmail.com</span> 
          <p class="description">Điện thoại:
           <br />Địa chỉ:Hoa Bằng, Cầu Giấy, Hà Nội
         </p> 
         <p>tôi thấy cửa hàng bán sản phẩm rất chất lượng, an toàn, vừa giá, nhân viên chăm dễ thương rất tận tình với công việc, chúc cửa hàng ngày càng phất triển </p>
       </div> 
     </div> 
   </div>
   <div class="testimonial"> 
    <div class="content"> 
     <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt2.jpg') ?>" alt="Nguyễn Thị Mỹ Linh" /></a> 
     </div>
     <div class="testimonial-prof"> 
      <h3 class="testimonial-title">Nguyễn Thị Mỹ Linh</h3> <span class="testimonial-post">Email: linhlinhveuto@gmail.com</span> 
      <p class="description">Điện thoại:  
       <br />Địa chỉ: Lạc Trung, Hai Bà Trưng, Hà Nội
     </p> 
     <p>giao hàng nhanh chóng, tôi đã mua nhiều năm ở cửa hàng, giá cả rẻ, có nguồn hàng cung cấp an toàn, có nhiều đợt khuyến mại</p> 
   </div> 
 </div> 
</div>
<div class="testimonial"> 
  <div class="content"> 
   <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt1.jpg') ?>" alt="Kiều Anh" /></a> 
   </div>
   <div class="testimonial-prof"> 
    <h3 class="testimonial-title">Kiều Anh</h3> <span class="testimonial-post">Email: kieuanh@gmail.com</span> 
    <p class="description">Điện Thoại:  
     <br />Địa chỉ: Hà Nội
   </p> 
   <p>Rất thích của hàng thực phẩm này, mua đồ ở đây đảm bảo chất lượng, nhân viên nhiệt tình, giao hàng tận nhà nhanh chóng chỉ cần gọi 1 cuộc điện thoại là 1 lúc sau đã có hàng</p>
 </ul> 
</div> 
</div> 
</div>
<div class="testimonial"> 
  <div class="content"> 
   <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt3.jpg') ?>" alt="Thùy dương" /></a> 
   </div>
   <div class="testimonial-prof"> 
    <h3 class="testimonial-title">Thùy dương</h3> <span class="testimonial-post">Email: duongthuyduong@gmail.com</span> 
    <p class="description">Điện thoại:  
     <br />Địa chỉ: Cầu giấy, hà nội
   </p> 
   <p>Cửa hàng có đội ngũ nhân viên dễ thương, trẻ trung, tận tình trong công việc, chúc cửa hàng ngày càng đông khách hàng, luôn luôn ủng hộ cửa hàng </p> 
 </div> 
</div> 
</div>
<div class="testimonial"> 
  <div class="content"> 
   <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt4.jpg') ?>" alt="Mai vân" /></a> 
   </div>
   <div class="testimonial-prof"> 
    <h3 class="testimonial-title">Mai vân</h3> <span class="testimonial-post">Email: maimaivan@gmail.com</span> 
    <p class="description">Điện thoại: 
     <br />Địa chỉ: Cầu giấy, hà nội
   </p> 
   <p>Chúc cửa hàng ngày càng phát triển, rất vui khi biết đến cửa hàng thực phẩm sạch này, thực phẩm mua về ăn rất ngon và ngọn, mình sẽ tiếp tục đến cửa hàng để mua </p> 
 </div> 
</div> 
</div>
<div class="testimonial"> 
  <div class="content"> 
   <div class="testimonial-pic"> <a href="" target="_blank"><img src="<?php echo base_url('upload/avatar/avt5.jpg') ?>" alt="Thu trang" /></a> 
   </div>
   <div class="testimonial-prof"> 
    <h3 class="testimonial-title">Thu trang</h3> <span class="testimonial-post">Email: thutranghoang@gmail.com</span> 
    <p class="description">Điện thoại: 
     <br />cầu giấy, hà nội
   </p> 
   <p>Nhân viên nhiệt tình, có nguồn ahfng cung cấp an toàn, giá rẻ và có nhiều đợt khuyến mại, chúc của hàng ngày càng phát triển luôn ủng hộ của hàng</p>
 </div> 
</div> 
</div> 
</div> 
</div> 
</div>
</div> 
</div>                                                  
<script>
 $(document).ready(function(){
  $("#testimonial-slider").owlCarousel({
    items:3,
    itemsDesktop:[1000,2],
    itemsDesktopSmall:[979,2],
    itemsTablet:[650,1],
    pagination: true,
    autoPlay:true
  });
}); 
</script>
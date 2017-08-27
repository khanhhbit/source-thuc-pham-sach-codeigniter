<style>

  *, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  p {
    margin: 0 0 20px;
    line-height: 1.5;
  }

  main {
    padding: 0px;
    margin: 0 auto;
    background: #fff;
  }

  section {
    display: none;
    padding: 20px 0 0;
    border-top: 1px solid #ddd;
  }

  main input {
    display: none;
  }

  label {
    display: inline-block;
    margin: 0 0 -1px;
    padding: 15px 25px;
    font-weight: 600;
    text-align: center;
    color: #bbb;
    border: 1px solid transparent;
  }

  label:before {
    font-family: fontawesome;
    font-weight: normal;
    margin-right: 10px;
  }
  label[for*='3']:before { content: '\f05a'; }
  label[for*='4']:before { content: '\f167'; }
  label[for*='5']:before { content: '\f27b'; }

  label:hover {
    color: #f59232;
    cursor: pointer;
  }

  input:checked + label {
    color: #555;
    border: 1px solid #ddd;
    border-top: 2px solid #4caf50;
    border-bottom: 1px solid #fff;
  }
  #tab3:checked ~ #content3,
  #tab4:checked ~ #content4,
  #tab5:checked ~ #content5{
    display: block;
  }
  ins {
    text-decoration: none;
    font-weight: 700;
    color: red;
  }

  @media screen and (max-width: 650px) {
    label {
      font-size: 0;
    }
    label:before {
      margin: 0;
      font-size: 18px;
    }
  }

  @media screen and (max-width: 360px) {
    label {
      padding: 15px;
    }
  }
</style>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

<!--main-->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="left">
          <div class="box-left">
            <div class="title-box-left">
              <h2>Danh Mục Sản Phẩm</h2>
            </div>
            <div style="clear: both;"></div>
            <?php foreach($catalog_list as $row): ?>
              <div class="single-sidebar">
                <ul>
                 <li><a href="<?php echo site_url('product/catalog/'.$row->id) ?>" title="<?php echo $row->name?>"><font class="fa fa-angle-double-right"> <?php echo $row->name?></font></a></li>
               </ul>
             </div>
           <?php endforeach; ?>
         </div>
       </div>

       <div class="left">
        <div class="box-left">
          <div class="title-box-left">
            <h2>Tin Tức Liên Quan</h2>
          </div>
          <div style="clear: both;"></div>

          <div class="single-sidebar">
            <ul>
              <?php foreach($news_list as $row): ?>
                <li ><a href="<?php echo site_url('news/chitietnews/'.$row->id) ?>" title="<?php echo $row->title ?>"><font class="fa fa-angle-double-right"> <?php echo $row->title ?></font></a>
                  <p>Ngày:<?php echo mdate('%d-%m-%y',$row->created)?>|Lượt xem:<?php echo $row->count_view ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="col-sm-10 ">
      <div class="product-breadcroumb">
        <a href="<?php echo base_url() ?>"><font class="">Trang chủ </font></a>/
        <a href="<?php echo base_url('product/catalog/'.$catalog->id) ?>"><font class=""><?php echo $catalog->name ?> </font></a>/
        <a href=""><font class=""><?php echo $view_sp->name; ?></font></a>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="flexslider">

            <ul class="slides">
              <?php if(is_array($image_list)):?>
                <?php foreach( $image_list as $img):?>
                  <li data-thumb="<?php echo base_url('upload/product/'.$img) ?>"> 
                    <div class="thumb-image"> <img src="<?php echo base_url('upload/product/'.$img) ?>" data-imagezoom="true" class="img-responsive"> 
                    </div>     
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </div>
          <!-- AddThis Button LIKE AND SHARE -->
          <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          <!-- AddThis Button END LIKE AND SHARE -->
        </div>
        <div class="sale2">
              <?php if($view_sp->discount):?>
                <div class="sale1"><?php echo $view_sp->discount ?>%</div>
              <?php else: ?>
                <div style="display: none"></div>
              <?php endif; ?>
            </div>
        <div class="col-sm-8">
         <div class="product-inner">
          <h2 class="product-name"><?php echo $view_sp->name ?></h2>
          <?php if($view_sp->discount >0):?>
            <?php $price_new = $view_sp->price - $view_sp->price/100 * $view_sp->discount ?>
            <div class="product-inner-price">
              Giá: <ins><?php echo number_format($price_new) ?>đ</ins> <del><?php echo number_format($view_sp->price) ?>đ</del>
            </div>
          <?php else: ?>
            Giá:<ins><?php echo number_format($view_sp->price) ?> đ</ins>
          <?php endif; ?> 
          <form action="" class="cart">
            <div class="quantity">
              <input type="text" size="4" class="input-text qty text" title="Số lượng" value="1" name="quantity" min="1" step="1">
            </div>
            <div class="submit">
             <button type="submit" class="btn btn-primary">
               <a href="<?php echo base_url('cart/add/'.$view_sp->id) ?>" style="color: #fff;">Thêm Vào Giỏ Hàng</a>
             </button>
           </div>
         </form>   
         <div class="product-inner-category">
           <p>Xuất Xứ: <?php echo $view_sp->made_in ?></p>
           <p>Trọng Lượng: <?php echo $view_sp->weight ?></p>
           <font>Danh Mục: </font>
           <a href="<?php echo base_url('product/catalog/'.$catalog->id) ?>" title="<?php echo $catalog->name ?>"><?php echo $catalog->name ?></a>
         </div> 
         <!--tab-->
         <main> 
          <input id="tab3" type="radio" name="tabs" checked>
          <label for="tab3">Chi Tiết Sản Phẩm</label>

          <input id="tab4" type="radio" name="tabs">
          <label for="tab4">Video</label>

          <input id="tab5" type="radio" name="tabs">
          <label for="tab5">Bình Luận</label>
          <section id="content3">
            <p><?php echo $view_sp->content ?></p>
          </section>
          <section id="content4">
            <div class="video"> <div class="video"> <?php echo $view_sp->video ?></div></div>           
          </section>
          <section id="content5">
            <b>Nhận xét của khách hàng về sản phẩm: <?php echo $view_sp->name ?> </b>            
            <div class="fb-comments" href="http://anhtop1.com/" colorscheme="light" numposts="5"></div>              
          </section>
        </main>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="maincontent-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="latest-product">
          <h2 class="section-title">SẢN PHẨM CÙNG LOẠI </h2>       
          <div class="product-carousel">
           <?php foreach($list as $row):?>
            <div class="single-product">
              <div class="product-f-image">
                <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->image_link ?>">
                <div class="product-hover">
                  <a href="<?php echo base_url('cart/add/'.$row->id) ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Mua Hàng</a>
                  <a href="<?php echo site_url('product/chitietsp/'.$row->id) ?>" class="view-details-link" title="<?php echo $row->name ?>"><i class="fa fa-link"></i> Chi Tiết</a>
                </div>
              </div>  
              <div class="salel">
                <?php if($row->discount):?>
                  <div class="sale"><?php echo $row->discount ?>%</div>
                <?php else: ?>
                  <div style="display: none"></div>
                <?php endif; ?>
              </div>           
              <h2><a href="<?php echo site_url('product/chitietsp/'.$row->id) ?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
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
    
   


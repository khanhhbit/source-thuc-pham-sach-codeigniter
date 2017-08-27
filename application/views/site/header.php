<script type="text/javascript">
  $(document).ready(function()
  {  
    //sử dụng autocomplete với input có id = key
    $( "#text-search" ).autocomplete({
        source:'<?php echo site_url('product/search/1') ?>', //link xử lý dữ liệu tìm kiếm
      })
  });
</script>

<div class="head-arena">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="user-menu">
          <ul>
            <?php if(isset($user_info)):?>
              <li><a href="<?php echo site_url('thoat') ?>"><i class="fa fa-sign-out"></i> Thoát</a></li>
              <li><a href="<?php echo site_url('user') ?>">Xin chào: <?php echo $user_info->name ?></a></li>
            <?php else: ?>
              <li><a href="<?php echo site_url('dang-ky') ?>"><i class="fa fa-user"></i> Đăng Ký</a></li>
              <li><a href="<?php echo site_url('dang-nhap') ?>"><i class="fa fa-user"></i> Đăng Nhập</a></li>
            <?php endif; ?>     
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header">
  <div class="container">
    <div class="row">
     <div class="col-sm-2">
      <div class="logo">
        <a href="<?php echo base_url() ?>"><img src="<?php echo public_url() ?>site/images/logo2.png" alt="logo"></a>
      </div>
    </div>
    <div class="col-xs-6 col-md-6">
     <div class="search-box"> 
       <form class="search-form" action="<?php echo site_url('product/search') ?>" method="get"> 
         <input class="form-control" placeholder="Nhập từ khóa tìm kiếm" type="text" name="key-search" id="text-search" value="<?php echo isset($key)? $key:'' ?>"> 
         <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i> 
         </button> 
       </form> 
     </div> 
   </div>
   <div class="col-sm-2">


   </div>
   <div class="col-sm-2">
   <div class="cart_item">
     <a href="<?php echo site_url('gio-hang') ?>" class="btnn btn-lg green"><i class="fa fa-shopping-cart"></i> Mua hàng</a>
     <span class="product-count"><?php echo $total_items ?></span>
   </div>
   </div>
 </div>
</div>
</div>
<div class="menu-head">
 <div class="container">
   <nav id="menu-wrap">
    <ul id="menu">
      <li><a href="<?php echo base_url() ?>" title="">Trang Chủ</a></li>
      <?php foreach($catalog_list as $row):?>
        <li><a href="<?php echo base_url('product/catalog/'.$row->id )?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
          <?php if (!empty($row->subs)):?>   
            <ul>
              <?php foreach($row->subs as $sub):?>
                <li><a href="<?php echo base_url('product/catalog/'.$sub->id )?>" title="<?php echo $sub->name ?>"><?php echo $sub->name ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
        
      <?php endforeach;?>
      <li><a href="<?php echo site_url('tin-tuc') ?>" title="">Tin tức</a></li>
    </ul>
  </nav>
</div>
</div>
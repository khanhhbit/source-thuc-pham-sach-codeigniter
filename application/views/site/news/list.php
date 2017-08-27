<div class="container">
 <div class="product-breadcroumb" style="margin-bottom: 15px">
    <a href="<?php echo base_url() ?>"><font class="">Trang chủ </font></a>/
    <a href="<?php echo base_url('news') ?>"><font class="">Tin tức </font></a>
  </div>
  <div class="row">
    <div class="title-news">
     <h1>Danh sách Tin Tức</h1>
   </div>
   <?php foreach($news_list as $row): ?>
    <div class="col-sm-6">
      <div class="news-gate">  
        <div class="list-news-gate">

          <div class="item-news">
            <a class="img" href="<?php echo site_url('news/chitietnews/'.$row->id) ?>" title="<?php echo $row->title ?>"><img src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->image_link ?>"></a>
          </div>
          <div class="content-news">
            <a href="<?php echo site_url('news/chitietnews/'.$row->id) ?>" title="<?php echo $row->title ?>"><h4><?php echo $row->title ?></h4></a>
            <p> Ngày: <?php echo mdate('%d-%m-%y',$row->created) ?> | Lượt xem: <?php echo $row->count_view ?></p>
            <p><?php echo $row->intro ?></p>
            <a class="view-more" href="<?php echo site_url('news/chitietnews/'.$row->id) ?>" title="<?php echo $row->title ?>">
              <i class="fa fa-caret-right" aria-hidden="true" ></i> Xem Thêm
            </a>
          </div>
        </div>  
      </div>
    </div>
  <?php endforeach; ?>
</div>

 <div class="row">
      <div class="col-md-12">
        <div class="pagination">
              <?php echo $this->pagination->create_links() ?>               
        </div>
      </div>
    </div>
</div>
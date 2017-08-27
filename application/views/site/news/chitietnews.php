
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
							<?php foreach($list as $row): ?>
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
					<a href="<?php echo base_url('news') ?>"><font class="">Tin Tức </font></a>/
					<a href=""><font class="">Chi Tiết Tin Tức</font></a>
				</div>

				<div class="view">
				<div class="title-view">
					<h1><?php echo $info->title ?></h1>
				</div>
				<div class="content-view">
					<img src="<?php echo base_url('upload/news/'.$info->image_link) ?>" alt="<?php echo $info->image_link ?>">
					<?php echo $info->content ?>
				</div>
			</div>

			<div class="comment-fb">
					<div class="fb-comments" href="" colorscheme="light" numposts="5" width="950"></div>
				</div>
			</div>
		</div> <!-- #container -->
		<div class="row">
			<div class="sm-12">
				
			</div>
		</div>
	</div>
</div>


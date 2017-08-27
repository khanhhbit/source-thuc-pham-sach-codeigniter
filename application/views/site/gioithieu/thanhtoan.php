<style>
	.gt2 img{
		width: 300px;
		max-width: 100%;
	}
	#map_canvas {
           width: 99%;
           height: 200px;
           border:solid 1px #ccc;
       }
</style>
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
			<div class="col-sm-10">
				<p style="color: red; font-size: 30px"> => XIN MỜI BẠN MUA MUA HÀNG ĐỂ BIẾT THÊM CHI TIẾT </p>
			</div>
			<div class="gt2">
				<img src="<?php echo public_url('site/images/matcuoi.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
				<img src="<?php echo public_url('site/images/mat-cuoi-1.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
				<img src="<?php echo public_url('site/images/mat-cuoi-2.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
			</div>

			<div class="gt2">
				<img src="<?php echo public_url('site/images/mat-cuoi-3.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
				<img src="<?php echo public_url('site/images/mat-cuoi-4.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
				<img src="<?php echo public_url('site/images/mat-cuoi-5.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
			</div>
           
		</div> <!-- #container -->
	</div>
</div>


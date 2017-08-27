
<style>
	.clear_error{
		color: red;
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
				<div class="panel panel-default margin-b-30">
					<!-- Start .panel -->
					<div class="panel-heading">
						<h4 class="panel-title"> LIÊN HỆ VỚI CHÚNG TÔI</h4>
						<div class="panel-actions">
							<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
							<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
						</div>
					</div>
					<div class="panel-body" style="display: block;">
						<form role="form" class="form" id="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="formLeft" for="param_title">Tiêu đề: </label>
								<div class="form-group">
									<span class="oneTwo"><input name="title" placeholder="Tiêu đề" class="form-control" value="<?php echo set_value('title') ?>"  _autocheck="true" type="text"></span>     
									<span name="title_autocheck" class="autocheck"></span>
									<div name="title_error" class="clear_error"><?php echo form_error('title') ?></div>
								</div>
							</div>

							<div class="form-group">
								<label class="formLeft" for="param_name">Họ tên: </label>
								<div class="form-group">
									<span class="oneTwo"><input name="name" placeholder="Họ tên" class="form-control" value="<?php echo set_value('name') ?>"  _autocheck="true" type="text"></span>     
									<span name="name_autocheck" class="autocheck"></span>
									<div name="name_error" class="clear_error"><?php echo form_error('name') ?></div>
								</div>
							</div>

							<div class="form-group">
								<label class="formLeft" for="param_email">Email: </label>
								<div class="form-group">
									<span class="oneTwo"><input name="email" placeholder="Email" class="form-control" value="<?php echo set_value('email') ?>"  _autocheck="true" type="mail"></span>     
									<span name="email_autocheck" class="autocheck"></span>
									<div name="email_error" class="clear_error"><?php echo form_error('email') ?></div>
								</div>
							</div>

							<div class="form-group">
								<label class="formLeft" for="param_phone">Điện thoại: </label>
								<div class="form-group">
									<span class="oneTwo"><input name="phone" placeholder="Điện thoại" class="form-control" value="<?php echo set_value('phone') ?>"  _autocheck="true" type="text"></span>     
									<span name="phone_autocheck" class="autocheck"></span>
									<div name="phone_error" class="clear_error"><?php echo form_error('phone') ?></div>
								</div>
							</div>

							<div class="form-group">
								<label class="formLeft" for="param_address">Địa chỉ: </label>
								<div class="form-group">
									<span class="oneTwo"><input name="address" placeholder="Địa chỉ" class="form-control" value="<?php echo set_value('address') ?>"  _autocheck="true" type="text"></span>     
									<span name="address_autocheck" class="autocheck"></span>
									<div name="address_error" class="clear_error"><?php echo form_error('address') ?></div>
								</div>
							</div>
							<div class="form-group">
								<label class="formLeft" for="param_address">Nội dung: </label>
								<div class="form-group">
									<span class="oneTwo"> <textarea class="form-control" rows="5" id="content" name="content" placeholder="Nội dung"><?php echo set_value('content') ?></textarea></span>     
									<span name="content_autocheck" class="autocheck"></span>
									<div name="content_error" class="clear_error"><?php echo form_error('content') ?></div>
								</div>
							</div>
							<div>
								<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
									<strong>Gửi</strong>
								</button>
							</div>
						</form>
					</div> 
				</div>
			</div>

		</div> <!-- #container -->
	</div>
</div>


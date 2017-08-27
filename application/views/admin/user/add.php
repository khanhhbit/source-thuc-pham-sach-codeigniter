<?php $this->load->view('admin/admin/head',$this->data) ?>

<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default margin-b-30">
			<!-- Start .panel -->
			<div class="panel-heading">
				<h4 class="panel-title"> Thêm mới thành viên</h4>
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
			</div>
			<div class="panel-body" style="display: block;">
				<form role="form" class="form" id="form" method="post" enctype="multipart/form-data">
				<div class="form-group">
						<label class="formLeft" for="param_email">Email: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="email" placeholder="Email" class="form-control" value="<?php echo set_value('email') ?>"  _autocheck="true" type="email"></span>     
							<span name="email_autocheck" class="autocheck"></span>
							<div name="email_error" class="clear error"><?php echo form_error('email') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_name">Tên: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="name" placeholder="name" class="form-control" value="<?php echo set_value('name') ?>"  _autocheck="true" type="text"></span>     
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
						</div>
					</div>
					<div class="form-group">
						<label class="formLeft" for="param_images">Avatar: </label>
						<div class="form-group">
							<span class="oneTwo"><input type="file" id="image" name="image"></span>     
							<span name="images_autocheck" class="autocheck"></span>
							<div name="images_error" class="clear error"><?php echo form_error('images') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_name">Mật khẩu: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="password" placeholder="password" class="form-control" value=""  _autocheck="true" type="password"></span>     
							<span name="password_autocheck" class="autocheck"></span>
							<div name="password_error" class="clear error"><?php echo form_error('password') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_name">Nhập lại password: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="re_password" placeholder="Nhập lại password" class="form-control" value=""  _autocheck="true" type="password"></span>     
							<span name="re_password_autocheck" class="autocheck"></span>
							<div name="re_password_error" class="clear error"><?php echo form_error('re_password') ?></div>
						</div>
					</div>
					<div class="form-group">
						<label class="formLeft" for="param_phone">Điện thoại: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="phone" placeholder="phone" class="form-control" value="<?php echo set_value('phone') ?>"  _autocheck="true" type="text"></span>     
							<span name="phone_autocheck" class="autocheck"></span>
							<div name="phone_error" class="clear error"><?php echo form_error('phone') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_address">Địa chỉ: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="address" placeholder="address" class="form-control" value="<?php echo set_value('address') ?>"  _autocheck="true" type="text"></span>     
							<span name="address_autocheck" class="autocheck"></span>
							<div name="address_error" class="clear error"><?php echo form_error('address') ?></div>
						</div>
					</div>
					<div>
						<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
							<strong>Thêm Mới</strong>
						</button>
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>



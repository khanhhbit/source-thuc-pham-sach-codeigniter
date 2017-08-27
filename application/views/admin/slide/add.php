<?php $this->load->view('admin/slide/head',$this->data) ?>
<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default margin-b-30">
			<!-- Start .panel -->
			<div class="panel-heading">
				<h4 class="panel-title"> Thêm mới slider</h4>
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
			</div>
			<div class="panel-body" style="display: block;">
				<form role="form" class="form" id="form" action="<?php echo admin_url('slide/add') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="formLeft" for="param_name">Tên: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="name" placeholder="Tên" class="form-control" value="<?php echo set_value('name') ?>"  _autocheck="true" type="text"></span>     
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_image_link">Hình ảnh: </label>
						<div class="form-group">
							<span class="oneTwo"><input type="file" id="image" name="image"></span>     
							<span name="image_link_autocheck" class="autocheck"></span>
							<div name="image_link_error" class="clear error"><?php echo form_error('image_link') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_link">Link: </label>
						<div class="form-group">
							<input name="link" placeholder="Link" class="form-control" value="" onChange="format_curency(this);" type="text"> 
							<span name="link_autocheck" class="autocheck"></span>
							<div name="link_error" class="clear error"><?php echo form_error('link') ?></div>
						</div>
					</div>


					<div class="form-group">
						<label class="formLeft" for="param_sort_order">Thứ tự: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="sort_order" placeholder="Thứ Tự" class="form-control" value=""  _autocheck="true" type="text"></span>     
							<span name="sort_order_autocheck" class="autocheck"></span>
							<div name="sort_order_error" class="clear error"><?php echo form_error('sort_order') ?></div>
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


<?php $this->load->view('admin/catalog/head',$this->data) ?>

<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default margin-b-30">
			<!-- Start .panel -->
			<div class="panel-heading">
				<h4 class="panel-title"> Cập nhập danh mục</h4>
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
			</div>
			<div class="panel-body" style="display: block;">
				<form role="form" class="form" id="form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="formLeft" for="param_name">Tên: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="name" placeholder="name" class="form-control" value="<?php echo $info->name ?>"  _autocheck="true" type="text"></span>     
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
						</div>
					</div>
					<div class="form-group">
						<label class="formLeft" for="param_site_title">Tiêu đề: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="site_title" placeholder="Tiều đề" class="form-control" value="<?php echo $info->site_title ?>"  _autocheck="true" type="text"></span>     
							<span name="site_title_autocheck" class="autocheck"></span>
							
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_meta_des">Description: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="meta_desc" placeholder="Description" class="form-control" value="<?php echo $info->meta_desc?>"  _autocheck="true" type="text"></span>     
							<span name="meta_des_autocheck" class="autocheck"></span>
							
						</div>
					</div>

					<div class="form-group"><label>Thế loại</label></div>
					<select name="parent_id" _autocheck="true" id="param_parent_id" class="form-control-static">
						<option value="0">Lựa chọn danh mục</option>
						<!-- kiem tra danh muc co danh muc con hay khong -->
						<?php foreach($list as $row):?>
							<option value="<?php echo $row->id ?>"<?php echo $row->id == $info->parent_id ?'selected':''; ?>><?php echo $row->name ?></option>
						<?php endforeach ?>                      
					</select>

					<div class="form-group">
						<label class="formLeft" for="param_sort_order">Thứ tự hiển thị: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="sort_order" placeholder="Thứ tự hiển thị" class="form-control" value="<?php echo $info->sort_order ?>"  _autocheck="true" type="text"></span>     
							<span name="sort_order_autocheck" class="autocheck"></span>

						</div>
					</div>

					<div>
						<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
							<strong>Cập Nhập</strong>
						</button>
					</div>
				</form>
			</div>
		</div> 
	</div>
</div>
</div>


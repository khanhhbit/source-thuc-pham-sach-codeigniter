<?php $this->load->view('admin/product/head',$this->data) ?>
<script src="<?php echo public_url('ckfinder/ckfinder.js') ?>"></script>
<script src="<?php echo public_url('ckeditor/ckeditor.js') ?>"></script>
<script>
	var  ckeditor_config={
		base_url:'<?php echo base_url() ?>',
		connector_path :'ckfinder/user/connector',
		html_path  : 'ckfinder/user/html'
	};
</script>
<script>
function format_curency(a) {
  	a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
  	
}
</script>

<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default margin-b-30">
			<!-- Start .panel -->
			<div class="panel-heading">
				<h4 class="panel-title"> Thêm mới sản phẩm</h4>
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
			</div>
			<div class="panel-body" style="display: block;">
				<form role="form" class="form" id="form" action="<?php echo admin_url('product/add') ?>" method="post" enctype="multipart/form-data">
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
						<label class="formLeft" for="image_list_title">Ảnh kèm theo: </label>
						<div class="form-group">
							<span class="oneTwo"><input type="file" id="image_list" name="image_list[]" multiple=""></span>     
							<span name="image_list_autocheck" class="autocheck"></span>
							<div name="image_list_error" class="clear error"><?php echo form_error('image_list') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_price">Giá: <span class="req"> * </span></label>
						<div class="form-group">
							<input name="price" placeholder="Giá bán" class="form-control" value="" onChange="format_curency(this);" type="text"> 
							<span name="price_autocheck" class="autocheck"></span>
							<div name="price_error" class="clear error"><?php echo form_error('price') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_discount">Giảm giá(%): </label>
						<div class="form-group">
							<span class="oneTwo"><input name="discount" placeholder="Giảm giá" class="form-control" value=""  _autocheck="true" type="text"></span>     
							<span name="discount_autocheck" class="autocheck"></span>
							<div name="discount_error" class="clear error"><?php echo form_error('discount') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_weight">Trọng lượng: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="weight" placeholder="Trọng lượng" class="form-control" value=""  _autocheck="true" type="text"></span>     
							<span name="weight_autocheck" class="autocheck"></span>
							<div name="weight_error" class="clear error"><?php echo form_error('weight') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_made_in">Xuất sứ: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="made_in" placeholder="Xuất sứ" class="form-control" value=""  _autocheck="true" type="text"></span>     
							<span name="made_in_autocheck" class="autocheck"></span>
							<div name="made_in_error" class="clear error"><?php echo form_error('made_in') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_video">Video: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="video" placeholder="Video" class="form-control" value=""  _autocheck="true" type="text"></span>     
							<span name="video_autocheck" class="autocheck"></span>
							<div name="video_error" class="clear error"><?php echo form_error('video') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_site_title">Tiêu đề:</label>
						<div class="formRight">
							<textarea name="site_title" id="param_site_title" _autocheck="true" rows="4" cols="" class="form-control"></textarea>
							<span name="site_title_autocheck" class="autocheck"></span>
							<div name="site_title_error" class="clear error"></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_meta_desc">Meta description:</label>
						<div class="formRight">
							<textarea name="meta_desc" id="param_meta_desc" _autocheck="true" rows="4" cols="" class="form-control"></textarea>
							<span name="meta_desc_autocheck" class="autocheck"></span>
							<div name="meta_desc_error" class="clear error"></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-group"><label>Thế loại <span class="req"> * </span></label></div>
					<select name="catalog"  class = "form-control-static">
						<option value="">Danh Mục</option>
						<!-- kiem tra danh muc co danh muc con hay khong -->
						<?php foreach($catalogs as $row):?>
							<?php if(count($row->subs)>1):?>
								<optgroup label="<?php echo $row->name?>">
									<?php foreach($row->subs as $sub):?>		
										<option value="<?php echo $sub->id ?>"> <?php echo $sub->name?> </option>
									<?php endforeach; ?>										 
								</optgroup>
							<?php else:?>
								<option value="<?php echo $row->id ?>"> <?php echo $row->name?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>

					<div class="form-group">
						<label class="formLeft" for="param_content">Mô tả: </label>
						<div class="form-group">
							<div class="panel panel-default recent-activites">
								<div class="panel-body pad-0">
									<textarea name="content" id="param_content" class="form-control"></textarea>
									<script language="javascript">
										CKEDITOR.replace("param_content");
										</script>
								</div>
							</div><!-- End .panel --> 
							<span name="content_autocheck" class="autocheck"></span>
							<div name="content_error" class="clear error"><?php echo form_error('content') ?></div>
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


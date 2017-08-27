<?php $this->load->view('admin/news/head',$this->data) ?>
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
				<h4 class="panel-title"> Chỉnh sửa bài viết</h4>
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
			</div>
			<div class="panel-body" style="display: block;">
				<form role="form" class="form" id="form" action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="formLeft" for="param_title">Tiêu đề: <span class="req"> * </span></label>
						<div class="form-group">
							<span class="oneTwo"><input name="title" placeholder="Tiêu đề" class="form-control" value="<?php echo $news->title ?>"  _autocheck="true" type="text"></span>     
							<span name="title_autocheck" class="autocheck"></span>
							<div name="title_error" class="clear error"><?php echo form_error('title') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_image_link">Hình ảnh: </label>
						<div class="form-group">
							<span class="oneTwo"><input type="file" id="image" name="image"></span>  
							<img src="<?php echo base_url('/upload/news/'.$news->image_link) ?>" alt="<?php echo $news->image_link; ?>" style ="width: 67px;height: 70px">   
							<span name="image_link_autocheck" class="autocheck"></span>
							<div name="image_link_error" class="clear error"><?php echo form_error('image_link') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_intro">Giới thiệu:</label>
						<div class="formRight">
							<textarea name="intro" id="param_intro" _autocheck="true" rows="4" cols="" class="form-control"><?php echo $news->intro ?></textarea>
							<span name="intro_autocheck" class="autocheck"></span>
							<div name="intro_error" class="clear error"><?php echo form_error('intro') ?></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_site_title">Meta title:</label>
						<div class="formRight">
							<textarea name="site_title" id="param_site_title" _autocheck="true" rows="4" cols="" class="form-control"><?php echo $news->site_title ?></textarea>
							<span name="site_title_autocheck" class="autocheck"></span>
							<div name="site_title_error" class="clear error"><?php echo form_error('site_title') ?></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_meta_desc">Meta description:</label>
						<div class="formRight">
							<textarea name="meta_desc" id="param_meta_desc" _autocheck="true" rows="4" cols="" class="form-control"><?php echo $news->meta_desc ?></textarea>
							<span name="meta_desc_autocheck" class="autocheck"></span>
							<div name="meta_desc_error" class="clear error"><?php echo form_error('meta_desc') ?></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_content">Nội dung: </label>
						<div class="form-group">
							<div class="panel panel-default recent-activites">
								<div class="panel-body pad-0">
									<textarea name="content" id="param_content" class="form-control"><?php echo $news->content ?></textarea>
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
							<strong>Cập Nhập</strong>
						</button>
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>


<?php $this->load->view('admin/video/head',$this->data) ?>

<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default margin-b-30">
			<!-- Start .panel -->
			<div class="panel-heading">
				<h4 class="panel-title"> Chỉnh sửa video</h4>
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
						<label class="formLeft" for="param_intro">Giới thiệu: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="intro" placeholder="Giới thiệu" class="form-control" value="<?php echo $info->intro ?>"  _autocheck="true" type="text"></span>     
							<span name="intro_autocheck" class="autocheck"></span>
							<div name="intro_error" class="clear error"><?php echo form_error('intro') ?></div>
						</div>
					</div>

					<div class="form-group">
						<label class="formLeft" for="param_link">Link: </label>
						<div class="form-group">
							<span class="oneTwo"><input name="link" placeholder="Link" class="form-control" value="<?php echo $info->link ?>"  _autocheck="true" type="text"></span>     
							<span name="link_autocheck" class="autocheck"></span>
							<div name="link_error" class="clear error"><?php echo form_error('link') ?></div>
						</div>
					</div>

					<div>
						<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
							<strong>Chỉnh sửa</strong>
						</button>
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>



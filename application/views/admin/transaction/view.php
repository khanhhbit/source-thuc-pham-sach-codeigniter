
<?php $this->load->view('admin/message', $this->data) ?>
<!-- Start .panel -->
<div class="panel-heading">

  <div style="clear: "></div>
  <h4 class="panel-title">CHI TIẾT ĐƠN HÀNG</h4>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="order-view-box">
      <h3><?php echo lang('title_tran_info'); ?>:</h3>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('tran_id'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->id; ?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('created'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo mdate('%d-%m-%Y',$info->created)?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('tran_amount'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->_amount; ?> đ</strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('tran_payment'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->payment; ?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('status'); ?>:</div>
          <div class="col-sm-8">
            <div class="label label-purple"><?php echo lang('tran_status_'.$info->_status); ?></div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-6">
    <div class="order-view-box">
      <h3>Thông tin khách hàng:</h3>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('full_name'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->user_name; ?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('email'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->user_email; ?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4"><?php echo lang('phone'); ?>:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->user_phone; ?></strong>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">Lời nhắn:</div>
          <div class="col-sm-8">
            <strong><?php echo $info->message; ?></strong>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<div class="row">
  <?php foreach($orders as $row):?>
    <div class="col-sm-6">
      <div class="order-view-box">
        <h3><?php echo lang('title_order_info'); ?>:</h3>
        <form class="form-horizontal">

         <div class="form-group">
          <div class="col-sm-4"><?php echo lang('quantity'); ?>:</div>
          <div class="col-sm-8">
           <strong><?php echo $row->qty; ?></strong>
         </div>
       </div>
       <div class="form-group">
        <div class="col-sm-4"><?php echo lang('into_money'); ?>:</div>
        <div class="col-sm-8">
         <strong><?php echo $row->_amount; ?></strong>
       </div>
     </div>
     <div class="form-group">
      <div class="col-sm-4"><?php echo lang('status'); ?>:</div>
      <div class="col-sm-8">
        <div class="label label-purple"><?php echo lang('order_status_'.$row->_status); ?></div>
      </div>
    </div>
    <div class='action'>
     <?php if ($row->_can_active): ?>
      <a href="<?php echo $row->_url_active; ?>" class="button blueB mr5">
        <span><?php echo lang('active'); ?></span>
      </a>
    <?php endif; ?>|

    <?php if ($row->_can_cancel): ?>
      <a href="<?php echo $row->_url_cancel; ?>"  class="button redB mr5"><span>
        <?php echo lang('cancel'); ?></span></a>
      <?php endif;?>
    </div>
  </form>
</div>
</div>
<?php endforeach; ?>
</div> 


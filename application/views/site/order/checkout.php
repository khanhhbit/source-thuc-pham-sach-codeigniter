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
      <a href=""><font><font class="">Trang chủ </font></font></a>/
      <a href=""><font><font class="">order </font></font></a>/
      <a href=""><font><font class="">checkout</font></font></a>
    </div>
    <form enctype="multipart/form-data" action="<?php echo site_url('order/checkout') ?>" class="checkout" method="post" name="checkout">
    <?php $this->load->view('site/message', $this->data) ?>
     <div id="customer_details">
      <div class="woocommerce">
        <h3><font>Chi tiết thanh toán</font></h3>
        <div class="form-group col-md-12">
          <label>Tên  <abbr title="required" class="required">*</abbr></label>
          <input type="text" name="name" class="form-control" placeholder="Họ Tên" 
          value="<?php echo isset($user->name)? $user->name:'' ?>">
        </div>
        <div class="error" id="name_error"><?php echo form_error('name') ?></div>

        <div class="form-group col-md-12">
          <label>Địa Chỉ  <abbr title="required" class="required">*</abbr></label>
          <input type="text" name="address" class="form-control" placeholder="Địa Chỉ"
          value="<?php echo isset($user->address)? $user->address:'' ?>">
        </div>
        <div class="error" id="address_error"><?php echo form_error('address') ?></div>

        <div class="form-group col-md-12">
          <label>Email <abbr title="required" class="required">*</abbr></label>
          <input type="email" name="email" class="form-control" placeholder="Emai"
          value="<?php echo isset($user->email)? $user->email:'' ?>">
        </div>
        <div class="error" id="email_error"><?php echo form_error('email') ?></div>

        <div class="form-group col-md-12">
          <label>Điện Thoại  <abbr title="required" class="required">*</abbr></label>
          <input type="text" name="phone" class="form-control" placeholder="Điện Thoại"
          value="<?php echo isset($user->phone)? $user->phone:'' ?>">
        </div>
        <div class="error" id="phone_error"><?php echo form_error('phone') ?></div>
        <div class="form-group col-md-12">
         <label>Thanh toán qua  <abbr title="required" class="required">*</abbr></label>
         <div class="form-group">
          <select name="payment" class="form-control">
            <option value="">---- Chọn cổng thanh toán -----</option>
            <option value="thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
            <option value="chuyển khoản">chuyển khoản</option>
          </select>
          <div class="error" id="payment_error"><?php echo form_error('payment')?></div>
        </div>
        <p style="color: red">Lưu ý: khi chuyển khoản sang tài khoản ngân hàng khách hàng vui lòng chuyển tiền qua số tài khoản:</p>
        <p style="color: red">vietcombank: 168754445xx</p>
        <p style="color: red">Agribank: 168754445xx</p>
      </div>
      <div class="form-group col-md-12">
        <label>Ghi Chú  <abbr title="required" class="required">*</abbr></label>
        <textarea class="form-control" name="message" rows="5" id="comment"></textarea>
        <div class="error" id="message_error"><?php echo form_error('message') ?></div>
      </div>
      <div class="create-account">
        <p class="">Tạo một tài khoản bằng cách nhập các thông tin dưới đây.Nếu bạn là khách hàng cũ hãy <span>đăng nhập</span> ở đầu trang.</p>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <h3 id="order_review_heading"><font>Đơn đặt hàng của bạn</font></h3>
  <div id="order_review" style="position: relative;">
   <table class="table table-striped">
    <thead>
      <tr>
        <th>SẢN PHẨM</th>
        <th>TOÀN BỘ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SỐ LƯỢNG</td>
        <td><?php echo $total_items ?> </td>
      </tr>
      <tr>
        <td>TỔNG SỐ TIỀN</td>
        <td style="color: red"><?php echo number_format($total_amount); ?> đ</td>
      </tr>
    </tbody>
  </table>
  <div class="form-row place-order">
    <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
  </div>
  <div class="clear"></div>
</div>    
</form>
</div>
</div>
</div>
</div>
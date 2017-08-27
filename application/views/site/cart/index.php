<style>
  .cart_img img {
    width: 68px;
    height: 80px;
  }
  a.cart_name h4 {
    font-size: 18px;
    color: #8a6d3b;
    font-family: sans-serif;
  }
  a.cart_name h4:hover{
    color: #f59232;
  }
  .cart_price {
    color: red;
    font-weight: 700;
  }
  .subtotal {
    font-weight: 700;
    color: red;
    text-align: center;
  }
  .del {
    width: 16px;
    height: 13px;
    font-size: 10px;
  }
  .cart_empty h4 {
    margin: 0 0 5px;
    line-height: 1.8;
    font-size: 14px;
  }
</style>
<div class="ff">
  <div class="container">
    <div class="product-breadcroumb" style="margin-bottom: 15px">
      <a href="<?php echo base_url() ?>"><font class="">Trang chủ </font></a>/
      <a href="<?php echo base_url('cart/index') ?>"><font class="">Giỏ hàng </font></a>
    </div>

    <?php if($total_items >0): ?>
      <form action="<?php echo base_url('cart/update') ?>" method ="post">
       <table id="cart" class="table table-hover table-condensed"> 
        <thead> 
         <tr> 
          <th style="width:50%">Tên sản phẩm</th> 
          <th style="width:10%">Giá</th> 
          <th style="width:8%">Số lượng</th> 
          <th style="width:22%" class="text-center">Thành tiền</th> 
          <th style="width:10%"> </th> 
        </tr> 
      </thead> 
      <tbody>
        <?php $total_amount =0; ?>
        <?php foreach($carts as $row):?>
          <?php $total_amount = $total_amount + $row['subtotal']; ?>
          <tr> 
           <td data-th="Giỏ hàng"> 
            <div class="row"> 
             <div class="col-sm-2 hidden-xs">
               <div class="cart_img">
                 <a href="<?php echo base_url('product/chitietsp/'.$row['id']) ?>" title="<?php echo $row['name'] ?>">
                   <img src="<?php echo base_url('upload/product/'.$row['image_link']) ?>" alt="<?php echo $row['image_link'] ?>" class="img-responsive" width="100" height="100">
                 </a>
               </div>
             </div> 
             <div class="col-sm-10"> 
              <a href="<?php echo base_url('product/chitietsp/'.$row['id']) ?>" class="cart_name"><h4><?php echo $row['name']; ?></h4></a>
            </div> 
          </div> 
        </td> 
        <td data-th="Price">
          <div class="cart_price">
            <?php echo number_format($row['price']) ?> đ
          </div>
        </td> 
        <td data-th="Quantity"><input class="form-control text-center" value="<?php echo $row['qty'] ?>" type="number" name="qty_<?php echo $row['id'] ?>">
        </td> 
        <td data-th="Subtotal">
          <div class="subtotal">
            <?php echo number_format($row['subtotal']) ?> đ
          </div>
        </td> 
        <td class="actions" data-th="">
          <button class="btn btn-info btn-sm">
            <a href="" title="Cập Nhập" style="color: #fff"><i class="fa fa-edit"></i></a>
          </button> 
          <button class="btn btn-danger btn-sm">
            <div class="del">
              <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?');" href="<?php echo base_url('cart/delete/'.$row['id']) ?>" title="Xóa" style="color: #fff">Xóa</a>
            </div>
          </button>
        </td> 
      </tr>
    <?php endforeach; ?> 
  </tbody>

  <tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng: <span style="color: red"><?php echo number_format($total_amount) ?> đ</span></strong>
    </td> 
  </tr> 
  <tr> 
    <td><a href="<?php echo base_url()?>" title="tiếp tục mua hàng" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center">
      <strong>Tổng tiền: <span style="color: red"><?php echo number_format($total_amount) ?> đ</span></strong>
    </td> 
    <td><a onclick="return confirm('Bạn có muốn xóa toàn bộ sản phẩm trong giỏ hàng không');" href="<?php echo base_url('cart/delete') ?>" title="xóa toàn bộ" class="btn btn-success btn-block">Xóa toàn bộ </a>
    </td>
    <td><a href="<?php echo site_url('order/checkout') ?>" title="thanh toán" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
  </tr> 
</tfoot> 
</table>
</form>
<?php else:?>
  <div class="cart_empty">
    <h4>Chưa có sản phẩm trong giỏ hàng</h4>
  </div>
  <td><a href="<?php echo base_url('product/cataloglist')?>" title="quay lại cửa hàng" class="btn btn-warning"><i class="fa fa-angle-left"></i> Quay lại cửa hàng</a>
  </td> 
<?php endif; ?>
</div>
</div>
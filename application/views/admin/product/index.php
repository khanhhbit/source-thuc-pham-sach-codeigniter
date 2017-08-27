<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/product/head',$this->data) ?>
<style>
    .image_thumb img {
        width: 88;
        height: 50px;
    }

    .f10 a {
        font-size: 15px;
    }

    .f11 {
        font-size: 12px;
    }
</style>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách sản phẩm</h4>
        <h4 style="float: right;margin: -13px 90px;font-weight: 700">Tổng số : <?php echo $total_rows ?></h4>
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
        </div>
    </div>
    <div class="panel-body" style="display: block;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Trọng lượng</th>
                    <th>Chi tiết</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    <?php foreach($list as $row):?>
                        <tr>
                            <td><?php echo $row->id ?></td>
                            <td>
                                <div class="image_thumb">
                                    <img src="<?php echo base_url('upload/product/'.$row->image_link) ?>" alt="<?php echo $row->name ?>">
                                </div>
                                <div class="f10">
                                    <a href="#"><?php echo $row->name ?></a>
                                </div>
                                <div class="f11">Đã bán: <?php echo $row->buyed ?> | Lượt xem: <?php echo $row->view ?></div>
                            </td>
                            <td>
                                <div class="textb">
                                    <?php if($row->discount >0): ?>
                                        <?php $price_new = $row->price - $row->price /100 * $row->discount; ?>
                                        <b><?php echo number_format($price_new); ?> đ</b> 
                                        <p style="text-decoration: line-through;"><?php echo number_format($row->price) ?> đ</p>
                                    <?php else :?>
                                        <b><?php echo number_format($row->price) ?></b>
                                    <?php endif ?>  
                                </div>
                            </td>
                            <td><?php echo $row->weight ?></td>
                            <td><?php echo $row->content ?></td>
                            <td class="option">
                                <a href="<?php echo admin_url('product/edit/'.$row->id) ?>" title="Chỉnh Sửa" class="tipS">
                                    <img src="<?php echo public_url('admin')?>/images/icon/edit.png" alt="chỉnh sửa">
                                </a>
                                <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('product/delete/'.$row->id) ?>" title="Delete" class="tipS">
                                    <img src="<?php echo public_url('admin')?>/images/icon/delete.png" alt="delete">
                                </a>
                            </td>
                        </tr> 
                    <?php endforeach ?>   
                </tbody>
            </table>
        </div>
        <div style="float: right;">
           <?php echo $this->pagination->create_links() ?>
       </div>

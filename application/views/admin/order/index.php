<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/order/head',$this->data) ?>
<style>
    td span1 {
    background-color: #d9534f;
    display: inline;
    padding: 0.2em 0.6em 0.3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
td span2 {
    background-color: #5bc0de;
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
td span3 {
    background-color: #5cb85c;
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
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
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Giao dịch</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    <?php foreach($order_info as $row):?>
                        <tr>
                            <td><?php echo $row->id ?></td>

                            <td><?php echo $row->qty ?></td>
                            <td><?php echo number_format($row->amount) ?> đ</td>
                            <td>
                                <?php if ($row->status==0) 
                                {
                                    echo "<span2>Đang chờ xử lý</span2>";
                                }
                                elseif($row->status==1)
                                {
                                     echo "<span3>Đã gửi hàng</span3>";
                                }
                                else
                                {
                                    echo "<span1>Hủy bỏ</span1>";
                                }
                                ?>
                        </td>
                        <td class="option">
                            <a href="<?php echo admin_url('transaction/view/'.$row->id) ?>" title="Thông tin giao dịch" class="tipS">
                                <img src="<?php echo public_url('admin')?>/images/icon/view.png" alt="Thông tin giao dịch">
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

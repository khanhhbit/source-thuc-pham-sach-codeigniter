
<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/transaction/head',$this->data) ?>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách giao dịch</h4>
        <h4 style="float: right;margin: -13px 90px;font-weight: 700">Số lượng : <?php echo $total_rows ?></h4>
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
                    <th>Số tiền</th>
                    <th>Cổng thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Ngày</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    <?php foreach($list as $row):?>
                        <tr>
                            <td><?php echo $row->id ?></td>
                            <td>
                                <div class="f11"><?php echo number_format($row->amount) ?></div>
                            </td>
                            <td>
                                <div class="textb"><?php echo $row->payment ?></div>
                            </td>
                            <td>
                                <?php if ($row->status==0) 
                                {
                                    echo "Chưa thanh toán";
                                }
                                elseif($row->status==1)
                                {
                                  echo "Đã thanh toán";
                              }
                              else
                              {
                                echo "Thanh toán thất bại";
                            }
                            ?>

                        </td>
                        <td><?php echo mdate('%d-%m-%y',$row->created) ?></td>
                        <td class="option">
                              <a href="<?php echo admin_url('transaction/view/'.$row->id) ?>" title="Thông tin giao dịch" class="tipS">
                                <img src="<?php echo public_url('admin')?>/images/icon/view.png" alt="Thông tin giao dịch">
                            </a>
                              <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('transaction/delete/'.$row->id) ?>" title="Delete" class="tipS">
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

<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/contact/head',$this->data) ?>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách liên hệ</h4>
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
                    <th>Name</th>
                    <th>Tiêu đề</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Nội dung</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($list as $row):?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->phone ?></td>
                    <td><?php echo $row->address ?></td>               
                    <td><?php echo $row->content ?></td>               
                    <td class="option">
                        <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('contact/delete/'.$row->id) ?>" title="Delete" class="tipS">
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
 
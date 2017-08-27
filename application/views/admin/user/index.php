<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/user/head',$this->data) ?>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">
        
        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách thành viên </h4>
        <h4 style="float: right;margin: -13px 90px;font-weight: 700">Tổng số : <?php echo $total; ?></h4>
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
                    <th>Email</th>
                    <th>Name</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Image</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($list as $row):?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->phone ?></td>
                    <td><?php echo $row->address ?></td>
                    
                    <td><img src="<?php echo base_url('/upload/avatar/'.$row->images) ?>" alt="<?php echo $row->images ?>" height="30"></td>
                    <td class="option">
                        <a href="<?php echo admin_url('user/edit/'.$row->id) ?>" title="Chỉnh Sửa" class="tipS">
                            <img src="<?php echo public_url('admin')?>/images/icon/edit.png" alt="chỉnh sửa">
                        </a>
                        <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('user/delete/'.$row->id) ?>" title="Delete" class="tipS">
                            <img src="<?php echo public_url('admin')?>/images/icon/delete.png" alt="delete">
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>     
            </tbody>
        </table>
    </div>
</div>
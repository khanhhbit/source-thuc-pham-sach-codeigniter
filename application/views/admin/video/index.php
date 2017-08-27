<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/video/head',$this->data) ?>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách video</h4>
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
                    <th>Giới thiệu</th>
                    <th>Link</th>
                    <th>Ngày</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($video_list as $row):?>
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->intro?></td>
                    <td><?php echo $row->link?></td>
                    <td><?php echo get_date($row->created)?></td>             
                    <td class="option">
                        <a href="<?php echo admin_url('video/edit/'.$row->id) ?>" title="Chỉnh Sửa" class="tipS">
                            <img src="<?php echo public_url('admin')?>/images/icon/edit.png" alt="chỉnh sửa">
                        </a>
                        <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('video/delete/'.$row->id) ?>" title="Delete" class="tipS">
                            <img src="<?php echo public_url('admin')?>/images/icon/delete.png" alt="delete">
                        </a>
                    </td>
                </tr>  
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
 <div style="float: right;">
     <?php echo $this->pagination->create_links() ?>
 </div>
 
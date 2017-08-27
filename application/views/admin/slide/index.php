<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/slide/head',$this->data) ?>
<style>
    .image_thumb img {
        width: 88;
        height: 50px;
    }
</style>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách slider</h4>
        <h4 style="float: right;margin: -13px 90px;font-weight: 700">Tổng số : <?php echo $total_row ?></h4>
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
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Link</th>
                    <th>Thứ Tự</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                   <?php foreach($list as $row):?>
                        <tr>
                            <td><?php echo $row->id ?></td>
                            <td>
                                <div class="image_thumb">
                                    <img src="<?php echo base_url('upload/slide/'.$row->image_link) ?>" alt="<?php echo $row->name ?>">
                                </div>                              
                            </td>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->link ?></td>
                            <td><?php echo $row->sort_order ?></td>
                            <td class="option">
                                <a href="<?php echo admin_url('slide/edit/'.$row->id) ?>" title="Chỉnh Sửa" class="tipS">
                                    <img src="<?php echo public_url('admin')?>/images/icon/edit.png" alt="chỉnh sửa">
                                </a>
                                <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('slide/delete/'.$row->id) ?>" title="Delete" class="tipS">
                                    <img src="<?php echo public_url('admin')?>/images/icon/delete.png" alt="delete">
                                </a>
                            </td>
                        </tr> 
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>


<?php $this->load->view('admin/message', $this->data) ?>
<?php $this->load->view('admin/news/head',$this->data) ?>
<style>
    h3 img {
    width: 400px;
}
    p img {
    width: 400px;
}
</style>
<div class="panel panel-default margin-b-30">
    <!-- Start .panel -->
    <div class="panel-heading">

        <div style="clear: "></div>
        <h4 class="panel-title">Danh sách bài viết</h4>
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
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>                  
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($list as $row):?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->content ?></td>
                    <td>
                        <img src="<?php echo base_url('/upload/news/'.$row->image_link) ?>" alt="<?php echo $row->image_link ?>" style="width: 90px; height: 55px">
                    </td>              
                    <td class="option">
                        <a href="<?php echo admin_url('news/edit/'.$row->id) ?>" title="Chỉnh Sửa" class="tipS">
                            <img src="<?php echo public_url('admin')?>/images/icon/edit.png" alt="chỉnh sửa">
                        </a>
                        <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="<?php echo admin_url('news/delete/'.$row->id) ?>" title="Delete" class="tipS">
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
 
<div class="container">
  <div class="row profile">
    <div class="col-sm-3">
      <div class="profile-sidebar">

        <div class="profile-userpic">
          <img src="<?php if (!$user->images) 
          {
            echo base_url('upload/avatar/profile_user.jpg');

          }
          else
          {
           echo base_url('upload/avatar/'.$user->images);
           }?>" class="img-responsive" alt="<?php echo $user->images ?>">
        </div>        

        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            <?php echo $user->name ?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo $user->email ?>
          </div>
        </div>        
        
        <div class="profile-userbuttons">
         <a href="<?php echo site_url() ?>" title="Trang chủ"> <button type="button" class="btn btn-warning btn-sm">Trang chủ</button></a>
         <a href="<?php echo site_url('user/logout') ?>" title="Thoát ra"><button type="button" class="btn btn-danger btn-sm">Thoát ra</button></a>
       </div>        
       <div class="profile-usermenu">
        <ul class="nav">
          <li class="active">
            <a href="">
              <i class="glyphicon glyphicon-info-sign"></i>
              Cập nhật thông tin cá nhân </a>
            </li>
            <li>
              <a href="<?php echo site_url('cart') ?>" target="_blank">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                Quản lý đơn hàng </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <div class=" col-sm-9">
        <div class="profile-content">
          <div class="row">
            <div class="col-sm-12">
              <h2>THÔNG TIN CÁ NHÂN</h2>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Họ Tên</th>
                <th>Điện Thoại</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->phone ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->address ?></td>
              </tr> 
            </tbody>
          </table>
            </div>
          </div>
        </div>
        <div class="profile-edit">
         <a href="<?php echo site_url('user/edit') ?>" title="Sửa thông tin"> <button type="button" class="btn btn-warning btn-sm">Sửa thông tin</button></a>
         <a href="<?php echo site_url('user/logout') ?>" title="Thoát ra"><button type="button" class="btn btn-danger btn-sm">Thoát ra</button></a>
       </div>
     </div>

   </div>
 </div>                        

 <style>

  .profile {
    margin: 20px 0;
  }

  .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #4caf50;
  }

  .profile-userpic img {
    cursor: pointer;
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 25%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
  }

  .profile-usertitle {
    text-align: center;
    margin-top: 20px;
  }

  .profile-usertitle-name {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
  }

  .profile-usertitle-job {
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .profile-userbuttons {
    text-align: center;
    margin-top: 10px;
  }

  .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
  }

  .profile-userbuttons .btn:last-child {
    margin-right: 0px;
  }

  .profile-usermenu {
    margin-top: 30px;
  }

  .profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
  }

  .profile-usermenu ul li:last-child {
    border-bottom: none;
  }

  .profile-usermenu ul li a {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
  }

  .profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
  }

  .profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #3c763d;
  }

  .profile-usermenu ul li.active {
    border-bottom: none;
  }

  .profile-usermenu ul li.active a {
    color: #3c763d;
    background-color: #f6f9fb;
    border-left: 2px solid #f59232;
    margin-left: -2px;
  }

  .profile-content {
    padding: 20px;
    background: #4caf50;
    min-height: 250px;
    border: 1px solid #4caf50;
    color: #fff;
  } 
  .profile-edit {
    float: right;
    margin-top: 10px;
  }                       
</style>
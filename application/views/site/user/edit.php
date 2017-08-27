
<style type="text/css">
  .col-center-block { 
    float: none;    
    display: block; 
    margin-left: auto;  
    margin-right: auto;
  }
  
  .container {    
    display: table; 
    vertical-align: middle;
  }

  .vertical-center-row {  
    display: table-cell;    
    vertical-align: middle;
  }

  .login-screen-bg {  
    background-color: #EFEFEF;
  }

  .panel-git {    
    border: 1px solid #d8dee2;
  }

  .panel-git h3 { 
    color: #fff;
  }
  .panel-git .panel-heading { 
    background-color: #829AA8;
  }

  .login-widget { 
    padding: 50px;  
    border-radius: 10px;    
    padding: 30px;  
    box-shadow: 0px 0px 1px 1px rgba(161, 159, 159, 0.1);   
    background-color: #FFF;
  }
  .login-screen-bg {  
    background-color: #EFEFEF;
  }
  div.error {
    color: red;
  }
</style>
<div class="container"> 
 <div class="row vertical-center-row"> 
  <div class="col-md-4 col-center-block login-widget"> 
   <h1 class="text-center">SỬA THÔNG TIN</h1> 
   <div> 
     <form action="<?php echo site_url('user/edit') ?>" method="post">
       <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon"><i class="fa fa-envelope"></i>
          </div> <input class="form-control" name="email" type="email" value="<?php echo $user->email ?>" disabled> 
        </div>    
      </div>
      <div class="form-group"> 
       <div class="input-group"> 
        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
        </div> <input class="form-control" name="name" placeholder="Họ Tên" type="text" value="<?php echo $user->name ?>"> 
      </div>
      <div class="error" id="name_error"><?php echo form_error('name') ?></div>
    </div>
    <div class="form-group">
      <label class="formLeft" for="param_images">Avatar: </label>
      <div class="form-group">
        <span class="oneTwo"><input type="file" id="image" name="image"></span>  
        <img src="<?php if (!$user->images) 
        {
          echo base_url('upload/avatar/profile_user.jpg');
          
        }
        else
        {
         echo base_url('upload/avatar/'.$user->images);
       }?>" alt="<?php echo $user->images ?>" style="width: 67px;height: 70px">   
       <span name="images_autocheck" class="autocheck"></span>
       <div name="images_error" class="clear error"><?php echo form_error('images') ?></div>
     </div>
   </div>
   <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-phone"></i>
      </div> <input class="form-control" name="phone" placeholder="Điện Thoại" type="phone" value="<?php echo $user->phone ?>"> 
    </div>
    <div class="error" id="phone_error"><?php echo form_error('phone') ?></div>    
  </div>
  <div class="form-group"> 
   <div class="input-group"> 
    <div class="input-group-addon"><i class="fa fa-address-card-o"></i>
    </div> <textarea class="form-control" rows="3" name="address" placeholder="Địa Chỉ" value=""><?php echo $user->address ?></textarea> 
  </div>  
</div>
<div class="error" id="address_error"><?php echo form_error('address') ?></div>  
<p style="color: red">Nếu muốn đổi mât khẩu thì nhập vào ô mật khẩu không đổi thì bỏ qua</p>
<div class="form-group"> 
 <div class="input-group"> 
  <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
  </div> <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> 
</div>
<div class="error" id="password_error"><?php echo form_error('password') ?></div>   
</div>  
<div class="form-group"> 
 <div class="input-group"> 
   <div class="input-group-addon"><i class="fa fa-unlock-alt"></i>
   </div> <input class="form-control" name="re_password" placeholder="Nhập Lại Mật Khẩu" type="password"> 
 </div>
 <div class="error" id="re_password_error"><?php echo form_error('re_password') ?></div>   
</div> 

<div class="form-group"> 
 <button type="submit" class="btn btn-primary btn-block">Chỉnh Sửa</button> 
</div> 
</form>
</div> 
</div> 
</div>
</div>
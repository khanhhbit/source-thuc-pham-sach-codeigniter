
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
   <h1 class="text-center">ĐĂNG NHẬP</h1> 
   <div> 
     <form action="<?php echo site_url('user/login') ?>" method="post"> 
      <h2 style="color: red;text-align: center;font-size: 20px"><?php echo form_error('login') ?></h2>
      <div class="form-group"> 
       <div class="input-group"> 
        <div class="input-group-addon"><i class="fa fa-envelope"></i>
        </div> <input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo set_value('email') ?>"> 
      </div>
      <div class="error" id="email_error"><?php echo form_error('email') ?></div>    
    </div>

    <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
      </div> <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> 
    </div>
    <div class="error" id="password_error"><?php echo form_error('password') ?></div>   
  </div>  

  <div class="form-group"> 
   <div class="checkbox"> <label for="c1"><input id="c1" name="cc" type="checkbox">Nhớ thông tin</label> 
   </div> 
 </div> 
 <div class="form-group"> 
   <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button> 
   <hr> 
   <p class="text-center">Bạn chưa có tài khoản? <strong><a href="<?php echo site_url('user/register') ?>" class="blue-text">Đăng ký ngay!</a></strong>
   </p> 
 </div>  
</form>
</div> 
</div> 
</div>
</div>
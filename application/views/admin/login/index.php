<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/head') ?>
</head>
<body>
   <body class="account">
    <div class="container">
        <div class="row">
            <div class="account-col text-center">
                <h1>Thực phẩm sạch</h1>
                <h3>Đăng nhập vào tài khoản của bạn</h3>
                <form role="form" class="form" id="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-group">
                        <span class="oneTwo"><input name="username" placeholder="username" class="form-control" type="text"></span>  
                    </div>
                 </div>
                <div class="form-group">
                     <div class="form-group">
                       <span class="oneTwo"><input name="password" placeholder="password" class="form-control" type="password"></span>
                    </div>
                    <div><?php echo form_error('password')?></div>
                 </div>
                <div style="font-weight: 600"><?php echo form_error('login')?></div>
                <button type="submit" class="btn btn-primary btn-block ">Đăng nhập</button>
                <p>Thực phẩm sạch &copy; 2017</p>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/pace.min.js"></script>
</body>
</body>
</html>
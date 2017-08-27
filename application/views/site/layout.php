<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<html>
<head>
<script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyAgr0e7Lj73EwEf9D7BiKqSNFOVM5kbHAI"></script>
<script type="text/javascript">
google.load("maps", "2",{"other_params":"sensor=true"});
function initialize() {
var map = new google.maps.Map2(document.getElementById("map"));
map.setCenter(new google.maps.LatLng(21.0248689,105.7916298,17), 15);
map.openInfoWindow(map.getCenter(), document.createTextNode("41/184 Hoa Bằng, Cầu Giấy,Hà Nội"));
}
google.setOnLoadCallback(initialize);
</script>
	<?php $this->load->view('site/head')?>

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1376145579121753";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body id="home">
	<div class="wraper">

		<?php $this->load->view('site/header',$this->data) ?>
		<?php if(isset($message) && $message): ?>
			<div class="panel panel-info" style="text-align: center;">
				<div class="panel-heading">
					<i class="fa fa-info-circle"></i>Thông Báo : <?php echo $message ?>
				</div>
			</div>
		<?php endif ?>
		<?php $this->load->view($temp, $this->data) ?>
		
		<?php $this->load->view('site/footer',$this->data) ?>

		<a href="#0" class="cd-top">Top</a>

		<!-- chát trực tuyến -->
		<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=4e5a6df550bbea0cf4491005dbf65a8f&data=eyJzc29faWQiOjI0ODQ4MTIsImhhc2giOiJkZjI5ZDE0MDMxNWFiZTk1Y2IwNTdlNWJkMWRmMGRlZSJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
	</div>	
</body>
<!-- JavaScript -->
<script src="<?php echo public_url() ?>site/js/jssor.slider.min.js"></script>
<script src="<?php echo public_url() ?>site/js/owl.carousel.min.js"></script>
<script src="<?php echo public_url() ?>site/js/main.js"></script>
<script src="<?php echo public_url() ?>site/js/modernizr.js"></script> 
<script src="<?php echo public_url() ?>site/js/bootstrap.min.js"></script>
<script src="<?php echo public_url() ?>site/js/custom.js"></script> 
<script src="<?php echo public_url() ?>site/js/jquery.sticky.js"></script>
</html>
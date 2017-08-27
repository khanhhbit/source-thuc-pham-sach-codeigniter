<html>
<head>
    <?php $this->load->view('admin/head') ?>
</head>
<body>
	<nav class="navbar navbar-default yamm navbar-fixed-top">
		<?php $this->load->view('admin/header') ?>
	</nav>
	<section class="page">
		<nav class="navbar-aside navbar-static-side" role="navigation">
			<?php $this->load->view('admin/left') ?>
		</nav>
		<div id="wrapper">
			<div class="content-wrapper container">
				<?php $this->load->view($temp, $this->data) ?>
			</div>
		</div>
	</section>
 <script type="text/javascript" src="<?php echo public_url('admin') ?>/js/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo public_url('admin') ?>/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/metisMenu.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/jquery-jvectormap-1.2.2.min.js"></script>
 <!-- Flot -->
 <script src="<?php echo public_url('admin') ?>/js/flot/jquery.flot.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/flot/jquery.flot.tooltip.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/flot/jquery.flot.resize.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/flot/jquery.flot.pie.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/chartjs/Chart.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/pace.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/waves.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/morris_chart/raphael-2.1.0.min.js"></script>
 <script src="<?php echo public_url('admin') ?>/js/morris_chart/morris.js"></script>

 <script src="<?php echo public_url('admin') ?>/js/jquery-jvectormap-world-mill-en.js"></script>
 <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
 <script type="text/javascript" src="<?php echo public_url('admin') ?>/js/custom.js"></script>
 <script type="text/javascript" src="<?php echo public_url('admin') ?>/js/summernote/summernote.min.js"></script>
 <!-- ChartJS-->
 <script src="<?php echo public_url('admin') ?>/js/chartjs/Chart.min.js"></script>
</body>
</html>
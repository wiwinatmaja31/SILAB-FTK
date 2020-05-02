<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Silab Unduksha</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?=base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/pages/dashboard.js"></script>

	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="<?=base_url();?>media/images/undiksha.png" class="img-circle img-responsive" alt=""></a>
								<h6>Silab Undiksha</h6>
								<span class="text-size-small">FTK</span>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="<?=site_url('Login/Logout')?>"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="<?=site_url('Silab/Home')?>"><i class="icon-home4"></i> <span>Menu Utama</span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms Input Data</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="<?=site_url('Silab/daftar_user')?>"><i class="icon-stack2"></i> <span>Data User</span></a>
								</li>
								<li>
									<a href="<?=site_url('Silab/daftar_lokasi')?>"><i class="icon-stack2"></i> <span>Data Lokasi</span></a>
								</li>
								<li>
									<a href="<?=site_url('Silab/daftar_prodi')?>"><i class="icon-stack2"></i> <span>Data Prodi</span></a>
								</li>
								<li>
									<a href="<?=site_url('Silab/daftar_pelaporan')?>"><i class="icon-stack2"></i> <span>Data Pelaporan</span></a>
								</li>
								<li>
									<a href="<?=site_url('Silab/daftar_aset')?>"><i class="icon-stack2"></i> <span>Data Aset</span></a>
								</li>

								<!-- /forms -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
					

				</div>
			</div>
			<!-- /main sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">
				<?php $this->load->view($content);?>
				
				<!-- /content area -->
				<div calss="content">
</div>
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	

</body>
</html>

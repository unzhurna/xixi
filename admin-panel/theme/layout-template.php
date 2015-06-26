<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo config_item('asset'); ?>img/favicon.png">
		<title>Administrator</title>
		<link href="<?php echo config_item('asset'); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/jquery.gritter.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/redactor.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/DT_bootstrap.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/style.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/style-responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
            <script src="<?php echo config_item('asset'); ?>js/html5shiv.js"></script>
            <script src="<?php echo config_item('asset'); ?>js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="boxed-page">
		<div class="container">
            <section id="container">
				<!--header start-->
				<header class="header white-bg">
					<div class="container ">
						<div class="sidebar-toggle-box">
							<div title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
						</div>
						<!--logo start-->
						<a href="<?php echo site_url('/'); ?>" class="logo"><img src="<?php echo config_item('asset'); ?>img/logo.png" alt="Logo Title" /></a>
						<!--logo end-->						
						<div class="top-nav ">
							<ul class="nav pull-right top-menu">
                                <!-- user login dropdown start-->
								<li class="dropdown userdata">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="username">Jhon Doue</span> <b class="caret"></b> </a>
									<ul class="dropdown-menu">
                                        <li>
											<a href="#"><i class="icon-user"></i> Profile</a>
										</li>
										<li>
											<a href="<?php echo site_url('settings'); ?>"><i class="icon-cog"></i> Settings</a>
										</li>
                                        <li>
											<a href="<?php echo site_url('logout'); ?>"><i class="icon-signout"></i> Log Out</a>
										</li>
									</ul>
								</li>
								<!-- user login dropdown end -->
							</ul>
						</div>
					</div>
				</header>
				<!--header end-->
				<!--sidebar start-->
				<aside>
					<div id="sidebar"  class="nav-collapse ">
						<!-- sidebar menu start-->
						<ul class="sidebar-menu" id="nav-accordion">
							<li>
								<a class="<?php if($this->uri->segment(1) == 'dashboard') echo 'active' ?>" href="<?php echo site_url('/'); ?>"><i class="icon-dashboard"></i> <span>Dashboard</span></a>
							</li>
							<li>
                                <a class="<?php if($this->uri->segment(1) == 'categories') echo 'active' ?>" href="<?php echo site_url('categories'); ?>"><i class="icon-dashboard"></i> <span>Category</span></a>
                            </li>
							<li>
                                <a class="<?php if($this->uri->segment(1) == 'articles') echo 'active' ?>" href="<?php echo site_url('articles'); ?>"><i class="icon-dashboard"></i> <span>Article</span></a>
                            </li>                            
							<li class="sub-menu">
								<a href="javascript:;"> <i class="icon-laptop"></i><span>Tsst</span></a>
								<ul class="sub">
									<li>
										<a  href="boxed_page.html">Boxed Page</a>
									</li>
								</ul>
							</li>
                        </ul>
						<!-- sidebar menu end-->
					</div>
				</aside>
				<!--sidebar end-->
				<!--main content start-->
				<section id="main-content">
					<section class=" wrapper">
						<?php echo $content; ?>
					</section>
				</section>
				<!--main content end-->
				<!--footer start-->
				<footer class="site-footer">
					<div class="text-center">
						&copy; 2015 medialangit.com. All right reserved.
						<a href="#" class="go-top"> <i class="icon-angle-up"></i> </a>
					</div>
				</footer>
				<!--footer end-->
			</section>
		</div>
		
		<!--myModal start-->
        <div class="modal fade bs-example-modal-sm" id="myModal"></div>
        <!--myModal end-->

		<script src="<?php echo config_item('asset'); ?>js/jquery.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.gritter.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.scrollTo.min.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.nicescroll.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/respond.min.js" ></script>
		<?php if($script) echo $script; ?>
        <script src="<?php echo config_item('asset'); ?>js/common-scripts.js"></script>

	</body>
</html>
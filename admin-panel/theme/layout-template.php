<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo config_item('asset'); ?>img/favicon.png">
		<title>dsfdskjf</title>
		<link href="<?php echo config_item('asset'); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/font-awesome.css" rel="stylesheet">
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
							<div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
						</div>
						<!--logo start-->
						<a href="index.html" class="logo" >Flat<span>lab</span></a>
						<!--logo end-->						
						<div class="top-nav ">
							<ul class="nav pull-right top-menu">
								<li>
									<input type="text" class="form-control search" placeholder="Search">
								</li>
								<!-- user login dropdown start-->
								<li class="dropdown userdata">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <img alt="" src="img/avatar1_small.jpg"> <span class="username">Jhon Doue</span> <b class="caret"></b> </a>
									<ul class="dropdown-menu">
                                        <li>
											<a href="#"><i class=" icon-suitcase"></i>Profile</a>
										</li>
										<li>
											<a href="#"><i class="icon-cog"></i> Settings</a>
										</li>
										<li>
											<a href="#"><i class="icon-bell-alt"></i> Notification</a>
										</li>
										<li>
											<a href="login.html"><i class="icon-key"></i> Log Out</a>
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
								<a href="index.html"> <i class="icon-dashboard"></i> <span>Dashboard</span> </a>
							</li>

							<li class="sub-menu">
								<a href="javascript:;" class="active"> <i class="icon-laptop"></i> <span>Layouts</span> </a>
								<ul class="sub">
									<li class="active">
										<a  href="boxed_page.html">Boxed Page</a>
									</li>
									<li>
										<a  href="horizontal_menu.html">Horizontal Menu</a>
									</li>
									<li>
										<a  href="language_switch_bar.html">Language Switch Bar</a>
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
						2013 &copy; FlatLab by VectorLab.
						<a href="#" class="go-top"> <i class="icon-angle-up"></i> </a>
					</div>
				</footer>
				<!--footer end-->
			</section>

		</div>

		<script src="<?php echo config_item('asset'); ?>js/jquery.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.scrollTo.min.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/jquery.nicescroll.js"></script>
		<script src="<?php echo config_item('asset'); ?>js/respond.min.js" ></script>
        <script src="<?php echo config_item('asset'); ?>js/common-scripts.js"></script>

	</body>
</html>

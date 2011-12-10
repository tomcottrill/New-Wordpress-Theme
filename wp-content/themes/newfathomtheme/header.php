<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Fathom.com</title>
		<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/all.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.main.js"></script>
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen"/><![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<div class="w1">
				<!-- header -->
				<div id="header">
					<div class="block">
						<div class="container">
							<!-- options -->
							<ul class="options">
								<li class="contact">
									<a href="#">Contact Us</a>
								</li>
								<li class="log-in">
									<a href="#">Client Log In</a>
								</li>
							</ul>
							<!-- search-form -->
							<form action="#" class="search-form">
								<fieldset>
									<div class="row">
										<span class="text">
											<input type="text" value="Search" />
										</span>
										<input class="btn-search" type="submit" value="Search" />
									</div>
								</fieldset>
							</form>
						</div><!-- End .container -->
						<strong>1-866-726-5968</strong>
					</div><!-- End .block -->
					<div class="holder">
						<!-- logotype -->
						<a href="#" class="logo"><img src="images/logo.png" style="width: 277px; height: 61px; border: 0px;" alt="Fathom Online Marketing with Results that Matter" /></a>
						<!-- top-nav -->
						<ul class="top-nav">
							<li>
								<a href="#">News</a>
							</li>
							<li>
								<a href="#">Press</a>
							</li>
							<li>
								<a href="#">Library</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
						</ul>
						<!-- navigation -->
						<div class="nav-holder">
							<ul id="nav">
								<li>
									<a href="#"><span>Your Goals</span><strong class="mask">mask</strong></a>
									<!-- drop -->
									<div class="drop-holder">
										<div class="drop">
											<div class="t"></div>
											<div class="c">
												<div class="content">
													<div class="text-box">
														<?php dynamic_sidebar('yourgoals'); ?>
													</div>
													<ul>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
													</ul>
												</div>
											</div>
											<div class="b"></div>
										</div>
									</div>
								</li>
								<li>
									<a href="#"><span>Your Market</span><strong class="mask">mask</strong></a>
									<!-- drop -->
									<div class="drop-holder">
										<div class="drop">
											<div class="t"></div>
											<div class="c">
												<div class="content">
													<div class="text-box">
														<?php dynamic_sidebar('yourmarket'); ?>
													</div>
													<ul>
														<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
													</ul>
												</div>
											</div>
											<div class="b"></div>
										</div>
									</div>
								</li>
								<li>
									<a href="#"><span>Our Work </span><strong class="mask">mask</strong></a>
									<!-- drop -->
									<div class="drop-holder">
										<div class="drop">
											<div class="t"></div>
											<div class="c">
												<div class="content">
													<div class="text-box">
														<?php dynamic_sidebar('ourwork'); ?>
													</div>
													<ul>
<?php wp_nav_menu( array( 'theme_location' => 'ourworkmenu' ) ); ?>
													</ul>
												</div>
											</div>
											<div class="b"></div>
										</div>
									</div>
								</li>
								<li>
									<a href="#"><span>Our Services</span><strong class="mask">mask</strong></a>
									<!-- drop -->
									<div class="drop-holder">
										<div class="drop">
											<div class="t"></div>
											<div class="c">
												<div class="content">
													<div class="text-box">
														<?php dynamic_sidebar('ourservices'); ?>
													</div>
													<ul>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
													</ul>
												</div>
											</div>
											<div class="b"></div>
										</div>
									</div>
								</li>
								<li>
									<a href="#"><span>Our Company</span><strong class="mask">mask</strong></a>
									<!-- drop -->
									<div class="drop-holder">
										<div class="drop">
											<div class="t"></div>
											<div class="c">
												<div class="content">
													<div class="text-box">
												<?php dynamic_sidebar('ourcompany'); ?>	</div>
													<ul>
<?php wp_nav_menu( array( 'theme_location' => 'ourcompanymenu' ) ); ?>
													</ul>
												</div>
											</div>
											<div class="b"></div>
										</div>
									</div>
								</li>
							</ul>
						</div><!-- End .nav-holder -->
					</div><!-- End .holder -->
				</div><!-- End #header -->

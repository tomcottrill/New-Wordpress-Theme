<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Fathom.com</title>
		<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/all.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.main.js"></script>
		<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.5f52e8db-e958-4e5b-b4ec-1da09908195d'});var st_type='wordpress3.2.1';</script>
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen"/><![endif]-->
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
	</head>
	<body>
		<div id="wrapper">
			<div class="w1">
				<!-- header -->
				<div id="header">
					<div class="block">
						<div class="container">
							<!-- options -->
							
											<?php wp_nav_menu( array( 'theme_location' => 'topsearchmenu', 'container' =>false, 'menu_class'=>'options' ) ); ?>
							
							<!-- search-form -->
							<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" class="search-form">
								<fieldset>
									<div class="row">
										<span class="text">
											<input type="text" value="Search" name="s" id="s"/>
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
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" style="width: 277px; height: 61px; border: 0px;" alt="Fathom Online Marketing with Results that Matter" /></a>
						<!-- top-nav -->
							<?php wp_nav_menu( array( 'theme_location' => 'topsubmenu', 'container' => false, 'menu_class'=>'top-nav' ) ); ?>
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

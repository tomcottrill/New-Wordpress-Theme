<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<!-- main -->
			<div id="main">
            
				<!-- intro -->

				<div class="intro">
					<!-- breadcrumbs -->
					<ul class="breadcrumbs">
						<li><a href="#">Home</a></li>
						<li><a href="#">Our Service</a></li>
						<li><a href="#">Capabilities</a></li>
						<li><span>Email Marketing</span></li>

					</ul>
					<div class="share">
						<a href="#"><img src="images/ico-share.gif" width="217" height="20" alt="image description" /></a>
					</div>
				</div><!-- End .intro -->
                
                
				<!-- two-columns -->
				<div id="two-columns">
					<div id="content">
                    
						<div class="article-frame">

                        
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
                            
						</div><!-- End .article-frame -->
                        
                        
						<div class="box">
							<img src="images/img03.jpg" width="177" height="100" alt="image description" class="alignleft" />
							<div class="text-holder">
								<h2>Meet the Team</h2>
								<p>Over 25 years of email marketing experience collaborate with your team.</p>
								<p><a href="#">Email Marketing Team</a></p>

							</div>
							<div class="btn-wrapper">
								<strong class="title">Put us to Work</strong>
								<a href="#" class="btn">Get a Quote</a>
								<span class="corner">corner</span>
							</div>
						</div><!-- End .box -->

                        
						<div class="list-holder">
							<h2>Learn more about Email Marketing</h2>
							<ul class="theme-list">
								<li><a href="#"><strong>E-Commerce Email <br />Essentials </strong></a></li>
								<li><a href="#"><strong>The ROI of SEO </strong></a></li>
								<li><a href="#"><strong>E-Newsletters for a <br />Better Reputation</strong></a></li>

							</ul>
						</div><!-- End .list-holder -->
                        
					</div><!-- End #content -->
                    
					<div id="sidebar">
                    
						<div class="sub-nav">
							<ul>
								<li><a href="#">Your Top Sales Person</a></li>
								<li><a href="#">Sample Scenarios</a></li>

								<li><a href="#">Getting Started</a></li>
								<li class="active">
									<a href="#">Our Capabilities</a>
									<ul>
										<li class="active"><a href="#">Email Marketing</a></li>
										<li><a href="#">Conversion Analysis</a></li>
										<li><a href="#">User Experience</a></li>

										<li><a href="#">Content Development</a></li>
										<li><a href="#">Local Search</a></li>
										<li><a href="#">Full Capabilities...</a></li>
									</ul>
								</li>
							</ul>
							<span class="corner">corner</span>

						</div><!-- End .sub-nav -->
                        
						<a href="#" class="question">
							<strong>What does this <br />cost?</strong>
							<span>Get Pricing</span>
						</a>
                        
						<form action="#" class="subscribe-form">
							<fieldset>

								<label for="email">Insights in your Inbox</label>
								<div class="row">
									<span class="text">
										<input id="email" type="text" value="email address" />
									</span>
								</div>
								<div class="row">
									<input class="btn-submit" type="submit" value="Subscribe" />

								</div>
							</fieldset>
						</form>
                        
					</div><!-- End #sidebar -->
                    
				</div><!-- #two-columns -->
                
			</div><!-- End #main -->
            
		</div><!-- End .w1 -->
        

<?php get_footer(); ?>
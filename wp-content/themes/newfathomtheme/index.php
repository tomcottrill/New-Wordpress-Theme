<?php
/**
 * Template Name: Front Page Template
 * Description: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 
 */

get_header(); ?>

		<!-- main -->
			<div id="main">
            
				<!-- gallery -->

				<div class="gallery-wrapper">
					<div class="holder">
										<?php the_post(); ?>

				<?php echo the_content(); ?>
						
					</div><!-- End .holder -->
					<!-- switcher -->
					<ul class="switcher">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>

						<li><a href="#">5</a></li>
					</ul>
				</div><!-- End .gallery-wrapper -->
                
				<!-- block-wrapper -->
				<div class="block-wrapper">
					<!-- block -->
					<div class="block">
		<?php dynamic_sidebar('frontpageleft'); ?>
					</div><!-- End .block -->
                    
					<!-- block -->
					<div class="block">

						<div class="holder">
							<?php dynamic_sidebar('frontpageright'); ?>
													</div><!-- End .holder -->
					</div><!-- End .block -->
                    
				</div><!-- End .block-wrapper -->
                
				<!-- partners -->
				<div class="partners">
					
					<?php dynamic_sidebar('partnerawards'); ?>
				</div><!-- End .partners -->
                
				<!-- video-wrapper -->
				<div class="video-wrapper">

                
					<div class="video-holder">
						<?php dynamic_sidebar('front-video'); ?>
					</div>
                    
					<!-- article-wrapper -->
					<div class="article-wrapper">
                    
						<div class="heading">

							<!-- social-network -->
							<ul class="social-networks">
								<li class="rss"><a href="#">rss</a></li>
								<li class="facebook"><a href="#">facebook</a></li>
								<li class="twitter"><a href="#">twitter</a></li>
								<li class="linkedin"><a href="#">linkedin</a></li>
								<li class="youtube"><a href="#">youtube</a></li>

							</ul>
							<h2>Fathom Feed</h2>
						</div>
                        
						<!-- article -->
						<div class="article">
							<img src="images/img02.jpg" width="190" height="103" alt="image description" class="alignleft" />
							<div class="text-holder">
								<strong class="title">PREMIUM WHITE PAPER</strong>

								<h3><a href="#">Home Health Care Product Ecommerce Projections for 2012</a></h3>
								<div class="link-wrapper">
									<a href="#" class="more">read it</a>
								</div>
							</div>
						</div>
                        
						<ul class="theme-list">
							<li><a href="#">Healthcare <br />Data-Crunching: <br />Connecting IBM's <br />Watson to Email</a></li>

							<li><a href="#">Webinar: Social <br />Media Fails. Sign <br />up free.</a></li>
							<li><a href="#">Comparison <br />Shopping Engines - <br />just in time for the <br />holidays.</a></li>
						</ul>
                        
					</div><!-- End .article-wrapper -->
                    
				</div><!-- End .video-wrapper -->

                
			</div><!-- End #main -->
            
		</div><!-- End .w1 -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
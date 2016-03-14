<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Banner -->
			<section class="banner">
				<span class="banner-text">Baked to Perfection.</span>
			</section>
			<!-- Product Categories -->
			<section class="product-categories container">
				<?php
					$terms = get_terms( 'product-type' );
				 ?>
				 <!-- Loop for displaying product categories -->
				 <?php if ( !empty( $terms ) ) : ?>
					<div class="product-type-block">
					<?php foreach ( $terms as $term ) : ?>

						 <div class="product-type-box">
							 <img src=" <?php echo get_template_directory_uri() . '/images\/' . $term->slug ?>.png " alt="<?php echo $term-> name; ?>" />

							 <h3><?php echo $term-> name; ?></h3>

							 <p><?php echo $term->description ?> <a href=" <?php echo get_term_link( $term )?> ">See More...</a></p>
						 </div>

					<?php endforeach ?>
					</div>
				<?php endif ?>

			</section><!-- .product-categories -->
			<!-- User Action -->
			<section class="see-products">
				<p>
					<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
					<a class="see-products-button" href="/leredbread/products/">See Our Products</a>
				</p>
			</section> <!-- .see-products -->

			<!-- Latest News -->
			<section class="latest-news">

				<?php
					$args = array('post_type' => 'post', 'posts_per_page' => 4);
					$latest_posts = get_posts( $args );
				 ?>

				<div class="container">
					<h2>Our Latest News</h2>
					<hr class="decoration"></hr>

					<ul>
						<?php foreach($latest_posts as $post) : setup_postdata( $post ); ?>
							<li class="post-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="post-pic-wrapper"><?php the_post_thumbnail( 'large' ); ?></div>
								<?php endif; ?>
								<div class="post-meta">
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<span><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></span>
								</div>

							</li> <!-- .post-wrapper -->
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>

				</div> <!-- .latest-news-inner  -->

			</section><!-- .latest-news -->

			<section class="testimonials">
				<div class="container">
					<h2>What Others Say About Us</h2>
					<hr class="decoration"></hr>

					<ul>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/dr-dosist-headshot.png" alt="Dr. Dosist headshot"/>
							<div class="review-content">
								<p>Healthy food be damned! If you are a bakery and sweet addict like myself, this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
								<p class="reviewer-name">Dr. Dosist</p>
								<p class="reviewer-info">
									Nutritionist -
									<a href="http://www.redacademy.com">Health Time Clinic</a>
								</p>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/maxi-milli-headshot.png" alt="Maxi Milli headshot"/>
							<div class="review-content">
								<p>Do you like bread? Seriously, who doesn't? You have to check Le Red Bread's lovely loaves. Fresh flavours every day...need I say more?</p>
								<p class="reviewer-name">Maxi Milli</p>
								<p class="reviewer-info">
									Chef -
									<a href="http://www.redacademy.com">Sailor Spoon</a>
								</p>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/ana-vandana-headshot.png" alt="Ana Vandana headshot"/>
							<div class="review-content">
								<p>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep and eye out on holidays, the flavour combinations they up with are brilliant. Delicious!</p>
								<p class="reviewer-name">Ana Vandana</p>
								<p class="reviewer-info">
									Author -
									<a href="http://www.redacademy.com">Food is Great Magazine</a>
								</p>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/martha-m-masters-headshot.png" alt="Martha M. Masters headshot"/>
							<div class="review-content">
								<p>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
								<p class="reviewer-name">Martha M. Masters</p>
								<p class="reviewer-info">
									Food Critic -
									<a href="http://www.redacademy.com">WikiTravel</a>
								</p>
							</div>
						</li>
					</ul>

				</div><!-- .container -->

			</section><!-- .testimonials -->


    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

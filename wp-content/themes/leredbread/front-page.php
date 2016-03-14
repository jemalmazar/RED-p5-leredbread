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
					 <?php foreach ( $terms as $term ) : ?>

						 <div class="product-type-box">
							 <img src=" <?php echo get_template_directory_uri() . '/images\/' . $term->slug ?>.png " alt="<?php echo $term-> name; ?>" />

							 <h3><?php echo $term-> name; ?></h3>

							 <p><?php echo $term->description ?> <a href=" <?php echo get_term_link( $term )?> ">See More...</a></p>
						 </div>


					<?php endforeach ?>
				<?php endif ?>

			</section>
			<!-- User Action -->
			<section class="see-products">
				<p>
					<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
					<a class="see-products-button" href="/leredbread/products/">See Our Products</a>
				</p>
			</section>

			<!-- Latest News -->
			<section class="latest-news">

				<?php
					$args = array('post_type' => 'post', 'posts_per_page' => 4);
					$latest_posts = get_posts( $args );
				 ?>

				<div class="container">
					<h2>Our Latest News</h2>

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

			</section>


    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

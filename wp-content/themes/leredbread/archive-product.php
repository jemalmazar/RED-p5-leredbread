<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<?php if ( have_posts() ) : ?>
			<!-- Products Header -->
					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
						<p><?php echo CFS()->get('tagline'); ?></p>

						<?php
							$terms = get_terms( 'product-type' );
						 ?>
			<!-- Procuct Categories -->
						<!-- Loop for displaying product categories -->
						<?php if ( !empty( $terms ) ) : ?>
							<?php foreach ( $terms as $term ) : ?>

								<div class="product-type-box">
									<a href=" <?php echo get_term_link( $term )?> ">
										<img src=" <?php echo get_template_directory_uri() . '/images\/' . $term->slug ?>.png " alt="<?php echo $term-> name; ?>" />
										<h3><?php echo $term-> name; ?></h3>
									</a>
								</div>


							<?php endforeach ?>
						<?php endif ?>

					</header><!-- .page-header -->

				<!-- Products Grid -->
				<div class="products-list">
					<ul>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>

								<div class="product-info">
									<?php the_title( sprintf( '<span class="entry-title">', esc_url( get_permalink() ) ), '</span>' ); ?>
									<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
								</div>

							</li>
						<?php endwhile; ?>
					</ul>

				</div> <!-- .products-grid -->

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div> <!--.container end -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

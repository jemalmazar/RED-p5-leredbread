<?php
/**
 * The template for displaying single product taxonomies.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

      <div class="product-menu">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="product-menu-item">
            <?php the_post_thumbnail( 'medium' ); ?>

            <div class="product-info">
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              <?php the_content(); ?>
              <span class="price">Price: <?php echo CFS()->get( 'price' ); ?></span>
            </div><!-- product-info -->

          </div><!-- .product-menu-item -->

        <?php endwhile; ?>

      </div><!-- .product-menu -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

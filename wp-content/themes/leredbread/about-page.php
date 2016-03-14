<?php
/**
* Template Name: About Page
**/
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<!-- Page Header -->
				<div class="page-header">
					<h1>Learn About Our Team And Culture</h1>
					<p><?php echo CFS()->get('tagline'); ?></p>
				</div> <!-- .page-header -->
				<!-- About Boxes -->
				<div class="about-blocks">
					<div class="about-block-item">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/team.jpg" alt="The Le Red Bread team" />
						<h2>Le Red Bread Team</h2>
						<?php echo CFS()->get('team_copy'); ?>
					</div> <!-- .about-box-one -->

					<div class="about-block-item">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/bakery.jpg" alt="The Le Red Bread team" />
						<h2>Le Red Bread Bakery</h2>
						<?php echo CFS()->get('bakery_copy') ?>
					</div> <!-- .about-box-two -->

				</div> <!-- .about-boxes -->
				<!-- Our Story -->
				<div class="about-story">
					<h2>Our Story</h2>
					<?php echo CFS()->get('our_story_copy') ?>
				</div> <!-- .about-story -->
				<!-- User Action -->
				<section class="contact-us">
					<p>
						<span>Feel free to contact us with any questions, comments, or suggetstion. We even take custom orders!</span>
						<a class="contact-us-button" href="/contact/">Contact Us</a>
					</p>
				</section>
			</div> <!-- .container -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

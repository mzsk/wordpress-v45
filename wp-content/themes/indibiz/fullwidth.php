<?php
/*
  Template Name: Fullwidth Page
 */
?>
<?php get_header(); ?>
<div class="post-wrapper hero-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>

							<?php endwhile; // end of the loop. ?>
							
						<?php endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->

			</div><!-- col-md-8 -->

		</div><!-- row -->
	</div><!-- container -->
</div><!-- post-wrapper -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Kuorinka
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main" <?php hybrid_attr( 'content' ); ?>>

		<?php if ( have_posts() ) : ?>

			<?php locate_template( array( 'loop-meta.php' ), true ); // Loads the loop-meta.php template. ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php
				the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Previous page', 'kuorinka' ),
					'next_text'          => esc_html__( 'Next page', 'kuorinka' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'kuorinka' ) . ' </span>',
				) );
			?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>

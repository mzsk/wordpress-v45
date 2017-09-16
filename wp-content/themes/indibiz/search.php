<?php
/**
 * The template for displaying search results pages.
 *
 * @package indibiz
 */

get_header(); ?>

<div class="post-wrapper hero-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title search-title"><?php printf( __( 'Search Results for: %s', 'indibiz' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

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

			<?php //the_posts_navigation(); ?>
			<div class="clear"></div>

			<nav class="navigation posts-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'indibiz' ); ?></h2>
				<div class="nav-links">
					<span class="nav-previous">
                        <?php previous_post_link('%link'); ?>
                    </span> <span class="nav-next">
                        <?php next_post_link('%link'); ?>
                    </span>
				</div><!-- .nav-links -->
			</nav><!-- .navigation -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

				</main><!-- #main -->
				</div><!-- #primary -->

			</div><!-- col-md-8 -->

			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div><!-- col-md-4 -->

		</div><!-- row -->
	</div><!-- container -->
</div><!-- post-wrapper -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package indibiz
 */

get_header(); ?>

<div class="post-wrapper hero-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div id="primary" class="content-area">
					<?php indibiz_the_breadcrumb(); ?>
					<main id="main" class="site-main" role="main">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php if ( is_category() ) {
								$title = sprintf( __( 'Category: %s', 'indibiz' ), single_cat_title( '', false ) );
							} elseif ( is_tag() ) {
								$title = sprintf( __( 'Tag: %s', 'indibiz' ), single_tag_title( '', false ) );
							} elseif ( is_author() ) {
								$title = sprintf( __( 'Author: %s', 'indibiz' ), '<span class="vcard">' . get_the_author() . '</span>' );
							} elseif ( is_year() ) {
								$title = sprintf( __( 'Year: %s', 'indibiz' ), get_the_date( _x( 'Y', 'yearly archives date format', 'indibiz' ) ) );
							} elseif ( is_month() ) {
								$title = sprintf( __( 'Month: %s', 'indibiz' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'indibiz' ) ) );
							} elseif ( is_day() ) {
								$title = sprintf( __( 'Day: %s', 'indibiz' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'indibiz' ) ) );
							} elseif ( is_tax( 'post_format' ) ) {
								if ( is_tax( 'post_format', 'post-format-aside' ) ) {
									$title = _x( 'Asides', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
									$title = _x( 'Galleries', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
									$title = _x( 'Images', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
									$title = _x( 'Videos', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
									$title = _x( 'Quotes', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
									$title = _x( 'Links', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
									$title = _x( 'Statuses', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
									$title = _x( 'Audio', 'post format archive title', 'indibiz' );
								} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
									$title = _x( 'Chats', 'post format archive title', 'indibiz' );
								}
							} elseif ( is_post_type_archive() ) {
								$title = sprintf( __( 'Archives: %s', 'indibiz' ), post_type_archive_title( '', false ) );
							} elseif ( is_tax() ) {
								$tax = get_taxonomy( get_queried_object()->taxonomy );
								/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
								$title = sprintf( __( '%1$s: %2$s', 'indibiz' ), $tax->labels->singular_name, single_term_title( '', false ) );
							} else {
								$title = __( 'Archives', 'indibiz' );
							}
							echo '<h1 class="page-title">'.$title.'</h1>';
							?>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>

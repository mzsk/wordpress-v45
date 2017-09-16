<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Kuorinka
 */

if ( ! function_exists( 'kuorinka_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function kuorinka_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation" aria-labelledby="post-navigation-header">
		<h2 class="screen-reader-text" id="post-navigation-header"><?php _e( 'Post navigation', 'kuorinka' ); ?></h2>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '%title', 'Previous post link', 'kuorinka' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title', 'Next post link',     'kuorinka' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'kuorinka_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function kuorinka_posted_on() {

	/* Set up entry date. */
	printf( '<span class="entry-date"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s"' . hybrid_get_attr( 'entry-published' ) . '>%4$s</time></a></span>',
		_x( 'Posted on', 'Used before publish date.', 'kuorinka' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
	
	/* Set up byline. */
	printf( '<span class="byline"><span class="entry-author" ' . hybrid_get_attr( 'entry-author' ) . '><span class="screen-reader-text">%1$s </span><a class="entry-author-link" href="%2$s" rel="author" itemprop="url"><span itemprop="name">%3$s</span></a></span></span>',
		_x( 'Author', 'Used before post author name.', 'kuorinka' ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function kuorinka_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'kuorinka_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'kuorinka_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so kuorinka_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so kuorinka_categorized_blog should return false.
		return false;
	}
}

/**
 * This template tag is meant to replace template tags like `the_category()`, `the_terms()`, etc.  These core 
 * WordPress template tags don't offer proper translation and RTL support without having to write a lot of 
 * messy code within the theme's templates.  This is why theme developers often have to resort to custom 
 * functions to handle this (even the default WordPress themes do this).  Particularly, the core functions 
 * don't allow for theme developers to add the terms as placeholders in the accompanying text (ex: "Posted in %s"). 
 * This funcion is a wrapper for the WordPress `get_the_terms_list()` function.  It uses that to build a 
 * better post terms list.
 *
 * @author    Justin Tadlock
 * @link      https://github.com/justintadlock/hybrid-core/blob/2.0/functions/template-post.php
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @since  1.0.0
 * @param  array   $args
 * @return string
 */
function kuorinka_get_post_terms( $args = array() ) {

	$html = '';

	$defaults = array(
		'post_id'    => get_the_ID(),
		'taxonomy'   => 'category',
		'text'       => '%s',
		'before'     => '',
		'after'      => '',
		'items_wrap' => '<span %s>%s</span>',
		/* Translators: Separates tags, categories, etc. when displaying a post. */
		'sep'        => _x( ', ', 'taxonomy terms separator', 'kuorinka' )
	);

	$args = wp_parse_args( $args, $defaults );

	$terms = get_the_term_list( $args['post_id'], $args['taxonomy'], '', $args['sep'], '' );

	if ( !empty( $terms ) ) {
		$html .= $args['before'];
		$html .= sprintf( $args['items_wrap'], 'class="entry-terms ' . $args['taxonomy'] . '" ' . hybrid_get_attr( 'entry-terms', $args['taxonomy'] ) . '', sprintf( $args['text'], $terms ) );
		$html .= $args['after'];
	}

	return $html;
}

/**
 * Outputs a post's taxonomy terms.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $args
 * @return void
 */
function kuorinka_post_terms( $args = array() ) {
	echo kuorinka_get_post_terms( $args );
}

/**
 * Flush out the transients used in kuorinka_categorized_blog.
 */
function kuorinka_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'kuorinka_categories' );
}
add_action( 'edit_category', 'kuorinka_category_transient_flusher' );
add_action( 'save_post',     'kuorinka_category_transient_flusher' );

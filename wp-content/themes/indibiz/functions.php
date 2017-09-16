<?php
/**
 * indibiz functions and definitions
 *
 * @package indibiz
 */
 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'indibiz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function indibiz_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on indibiz, use a find and replace
	 * to change 'indibiz' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'indibiz', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('indibiz_post_thumbnail_loop', 700, 380, true);

	// Woocommerce Support
	add_theme_support( 'woocommerce' );

	// This theme uses in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'indibiz' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'indibiz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // indibiz_setup
add_action( 'after_setup_theme', 'indibiz_setup' );


/**
 * Nav indibiz_nav
 *
 */
function indibiz_nav() {
        wp_nav_menu(array(
        				  'theme_location'  => 'primary',
	                      'menu'            => '',
	                      'echo'            => true,
	                      'menu_class'      => 'sf-menu',
	                      'container'       => '',
	                      'menu_id'         => 'example',
	                      'depth'           => 4,
	                      'fallback_cb'     => 'indibiz_nav_fallback'
	        			)
    				);

}

/**
 * Nav Fallback.
 *
 */
function indibiz_nav_fallback() {
    ?>
    <ul class="sf-menu">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}

/**
 * Nav indibiz_nav
 *
 */
function indibiz_mobile_nav() {
        wp_nav_menu(array(
        				  'theme_location'  => 'primary',
	                      'menu'            => '',
	                      'echo'            => true,
	                      'menu_class'      => '',
	                      'container'       => '',
	                      'menu_id'         => 'menu',
	                      'depth'           => 4,
	                      'fallback_cb'     => 'indibiz_mobile_nav_fallback'
	        			)
    				);
}
function indibiz_mobile_nav_fallback() {
    ?>
    <ul id="menu">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function indibiz_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'indibiz' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="sidebar widget %2$s  wow fadeInUp" data-wow-duration="1s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'First footer widget', 'indibiz' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="footer widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Second footer widget', 'indibiz' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="footer widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Third footer widget', 'indibiz' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="footer widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Fourth footer widget', 'indibiz' ),
		'id'            => 'sidebar-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="footer widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'indibiz_widgets_init' );


/**
 * Enqueue IndiBiz styles.
 */
function indibiz_styles() {
	wp_enqueue_style( 'indibiz-font-droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic');
	wp_enqueue_style( 'indibiz-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,600,400');
	wp_enqueue_style( 'indibiz-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'indibiz-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'indibiz-superfish-style', get_template_directory_uri() . '/css/superfish.css' );
	wp_enqueue_style( 'indibiz-font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'indibiz-slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'indibiz-slicknav', get_template_directory_uri() . '/css/slicknav.css' );
	wp_enqueue_style( 'indibiz-animation', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'indibiz-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'indibiz_styles' );

/**
 * Enqueue scripts.
 */
function indibiz_scripts() {
	wp_enqueue_script( 'indibiz-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'indibiz-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20120230', true );
	wp_enqueue_script( 'indibiz-superfish-script', get_template_directory_uri() . '/js/superfish.js', array(), '20120231', true );
    wp_enqueue_script( 'indibiz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'indibiz-slick-script', get_template_directory_uri() . '/js/slick.js', array(), '20150519', true );
	wp_enqueue_script( 'indibiz-slicknav-script', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), '20150528', true );
	wp_enqueue_script( 'indibiz-wow-script', get_template_directory_uri() . '/js/wow.js', array('jquery'), '20130117' );

	wp_enqueue_script( 'indibiz-custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'indibiz_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-customizer.php';
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Breadcrumb
 */

function indibiz_the_breadcrumb() {
     
    // Settings
    $indibiz_separator  = '&gt;';
    $indibiz_id         = 'breadcrumbs';
    $indibiz_class      = 'breadcrumbs';
    $indibiz_home_title = __('Homepage', 'indibiz');
     
    // Get the query & post information
    global $post, $wp_query;
    $indibiz_category = get_the_category();
     
    // Build the breadcrums
    echo '<ul id="' . $indibiz_id . '" class="' . $indibiz_class . '">';
     
    // Do not display on the homepage
    if ( !is_front_page() ) {
         
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . esc_url( home_url() ) . '" title="' . $indibiz_home_title . '">' . $indibiz_home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $indibiz_separator . ' </li>';
         
        if ( is_single() ) {
             
            // Single post (Only display the first category)
            echo '<li class="item-cat item-cat-' . $indibiz_category[0]->term_id . ' item-cat-' . $indibiz_category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $indibiz_category[0]->term_id . ' bread-cat-' . $indibiz_category[0]->category_nicename . '" href="' . get_category_link($indibiz_category[0]->term_id ) . '" title="' . $indibiz_category[0]->cat_name . '">' . $indibiz_category[0]->cat_name . '</a></li>';
            echo '<li class="separator separator-' . $indibiz_category[0]->term_id . '"> ' . $indibiz_separator . ' </li>';
            echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
             
        } else if ( is_category() ) {
             
            // Category page
            echo '<li class="item-current item-cat-' . $indibiz_category[0]->term_id . ' item-cat-' . $indibiz_category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $indibiz_category[0]->term_id . ' bread-cat-' . $indibiz_category[0]->category_nicename . '">' . $indibiz_category[0]->cat_name . '</strong></li>';
             
        } else if ( is_page() ) {
             
            // Standard page
            if( $post->post_parent ){
                 
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                 
                // Get parents in the right order
                $anc = array_reverse($anc);
                
                $parents = '';
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $indibiz_separator . ' </li>';
                }
                 
                // Display parent pages
                echo $parents;
                 
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                 
            } else {
                 
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                 
            }
             
        } else if ( is_tag() ) {
             
            // Tag page
             
            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args ='include=' . $term_id;
            $terms = get_terms( $taxonomy, $args );
             
            // Display the tag name
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
         
        } elseif ( is_day() ) {
             
            // Day archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . __( 'Archives', 'indibiz') . '</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $indibiz_separator . ' </li>';
             
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . __( 'Archives', 'indibiz') . '</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $indibiz_separator . ' </li>';
             
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . __( 'Archives', 'indibiz') . '</strong></li>';
             
        } else if ( is_month() ) {
             
            // Month Archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . __( 'Archives', 'indibiz') . '</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $indibiz_separator . ' </li>';
             
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . __( 'Archives', 'indibiz') . '</strong></li>';
             
        } else if ( is_year() ) {
             
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . __( 'Archives', 'indibiz') . '</strong></li>';
             
        } else if ( is_author() ) {
             
            // Auhor archive
             
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
             
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . __('Author: ', 'indibiz') . ''  . $userdata->display_name . '</strong></li>';
         
        } else if ( get_query_var('paged') ) {
             
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page', 'indibiz') . ' ' . get_query_var('paged') . '</strong></li>';
             
        } else if ( is_search() ) {
         
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '"> ' . __('Search results for: ', 'indibiz'). ' ' . get_search_query() . '</strong></li>';
         
        } elseif ( is_404() ) {
             
            // 404 page
            echo '<li>' . __('Error 404', 'indibiz') . '</li>';
        }
         
    }
     
    echo '</ul>';
     
}

/**
 *
 * Share bar
 *
*/
function indibiz_share_bar () {
	?>
	<div class="bar">
        <div class="share">
          <!-- twitter -->
          <a class="share-twitter" onclick="window.open('http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>','twitter','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="<?php the_title(); ?>" target="blank"><i class="fa fa-twitter-square"></i></a>

          <!-- facebook -->
          <a class="share-facebook" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>','facebook','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="blank"><i class="fa fa-facebook-official"></i></a>

          <!-- google plus -->
          <a class="share-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus-square"></i></a>

          <!-- Linkedin -->
          <a onclick="MyWindow=window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php the_permalink(); ?>','MyWindow','width=600,height=400'); return false;" title="Share on LinkedIn" style="cursor:pointer;" target="_blank" id="linkedin-share"><i class="fa fa-linkedin-square"></i></a>

          <!-- Pinterest -->
          <a onclick="MyWindow=window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=&amp;description=<?php the_title(); ?>','MyWindow','width=600,height=400'); return false;" style="cursor:pointer;" target="_blank" id="pinterest-share"><i class="fa fa-pinterest-square"></i></a>
        </div><!-- share -->                
      </div><!-- bar -->
	<?php
}


function custom_theme_color(){
    $custom_theme_color = get_theme_mod( 'custom_theme_color' ); 
	
	if ( $custom_theme_color != '#40BC69' && $custom_theme_color != '' ) :
	?>
		<style type="text/css">
			a, .logo a:hover, .featured-text h2 a.f-title-anchor:hover, .trefoil-box a.f-icon, .trefoil-anchor, .sfooter-box a, p.form-submit input[type='submit'], .search-form .search-submit, .user_comment i.fa, .slick-prev, .slick-next, .entry-content .contactform input[type="submit"]  {
				color: <?php echo $custom_theme_color; ?>;
			}
			.sf-menu a:hover, .current-menu-item a, .current_page_item a, .ift-button, .nav-previous a, .nav-next a, .entry-content .contactform input[type="submit"]:hover {
				background: <?php echo $custom_theme_color; ?>;
			}
			.sfooter-box h4, p.form-submit input[type='submit'], .search-form .search-submit, .search-form .search-submit:hover, .user_detail, .entry-content .contactform input[type="submit"], .entry-content .contactform textarea:focus, .entry-content .contactform input[type="text"]:focus, .entry-content .contactform input[type="email"]:focus, .entry-content .thanks p {
			    border-color: <?php echo $custom_theme_color; ?>;
			}
			.footer-menu-social ul li div.circle{
				-webkit-text-shadow: 0 0 0 <?php echo $custom_theme_color; ?>, 0 35px 0 #fff;
				-moz-text-shadow: 0 0 0 <?php echo $custom_theme_color; ?>, 0 35px 0 #fff;
				-ms-text-shadow: 0 0 0 <?php echo $custom_theme_color; ?>, 0 35px 0 #fff;
				-o-text-shadow: 0 0 0 <?php echo $custom_theme_color; ?>, 0 35px 0 #fff;
				text-shadow: 0 0 0 <?php echo $custom_theme_color; ?>, 0 35px 0 #fff;
			}
		</style>
	<?php
	adjustBrightness($custom_theme_color, -50);
	endif;
}
add_action('wp_head', 'custom_theme_color');


function adjustBrightness($hex, $steps) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }
    ?>

    <style type="text/css">
		.ift-button{
			border-color: <?php echo $return; ?>;
		}
	</style>

	<?php 
}

/* Custom CSS Options */
function custom_css(){
    $custom_css = esc_attr( get_theme_mod('custom_css') );
    echo '<style type="text/css">'.$custom_css.'</style>';
}
add_action('wp_head', 'custom_css');

/* Meta Data Options */
function meta_data_option(){
    echo get_theme_mod('meta_data_option') ;
}
add_action('wp_head', 'meta_data_option');


function initilize_wow_js(){
	$animation_option = esc_attr( get_theme_mod('animation_option', 'on') );
	if($animation_option=='on'){ ?>
		<script type="text/javascript">
			new WOW().init(); // Initialization of wow effects (animation)
		</script>
<?php }
}

add_action('wp_footer', 'initilize_wow_js');


function footer_code_option(){
	echo get_theme_mod('footer_code_option');
}
add_action('wp_footer', 'footer_code_option');
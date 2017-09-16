
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package indibiz
 */
?>

<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
  <body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'indibiz' ); ?></a>
    <div class="slicknav_menu">

      <?php indibiz_mobile_nav() ?>

    </div>
    
    <div class="nav-wrapper hero-section sticky">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo">

              <?php if ( get_theme_mod('logo') != '' ): ?> 
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>"></a>
              <?php else: ?>
                <a href="<?php echo esc_url( home_url() ); ?>">
                <p class="site-title"><?php bloginfo( 'name' ); ?></p>
                <p class="site-desc"><?php bloginfo( 'description' ); ?></p>
                </a>
              <?php endif; ?>

            </div>
          </div>
          <div class="col-md-9">
            <div class="menu-wrapper">

              <?php indibiz_nav(); ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Header Ends -->

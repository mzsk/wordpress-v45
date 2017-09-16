<?php
/*
  Template Name: Front Page
 */
?>

<?php get_header(); ?>
<!-- Featured Section Starts -->

  <?php  
    $animation_option = esc_attr( get_theme_mod('animation_option', 'on') );
    $top_featured_image = esc_url( get_theme_mod('top_featured_image') );
    $top_featured_title = esc_attr( get_theme_mod('top_featured_title') ); 
    $top_featured_description = esc_attr( get_theme_mod('top_featured_description') );
    $top_featured_button_text = esc_attr( get_theme_mod('top_featured_button_text') );
    $top_featured_button_link = esc_url( get_theme_mod('top_featured_button_link') );
  ?>

<?php if ( isset($top_featured_image) && $top_featured_image != '' ): ?>
  <div class="top-featured-wrapper hero-section parallax-section-1" style="background-image:url(<?php echo $top_featured_image; ?>); ">
<?php else: ?>
  <div class="top-featured-wrapper hero-section parallax-section-1" style="  background-image: url(<?php echo get_template_directory_uri(); ?>/images/DSC_1152.jpg); ">
<?php endif; ?>  
    <div class="mask">
      <div class="container">
        <div class="row">
          <div class="featured-text">

            <?php if ( isset($top_featured_title) && $top_featured_title!='' ): ?>
            <h2 class="wow fadeInUp" data-wow-duration="1s"><a class="f-title-anchor" href="<?php echo $top_featured_button_link; ?>" target="_blank"><?php echo $top_featured_title; ?></a></h2>
            <?php else: ?>
              <h2 class="wow fadeInUp" data-wow-duration="1s"><a class="f-title-anchor" href="#"><?php _e('IndiBiz - Responsive WordPress theme.', 'indibiz'); ?></a></h2>
            <?php endif; ?>

            <?php if ( isset($top_featured_description) && $top_featured_description !='' ): ?>
            <p class="wow fadeInUp" data-wow-duration="1.5s"><?php echo $top_featured_description; ?></p>
            <?php else: ?>
              <p class="wow fadeInUp" data-wow-duration="1.5s"> <?php _e('Build beautiful and mobile ready WordPress sites with IndiBiz business WordPress theme.', 'indibiz'); ?></p>          
            <?php endif; ?>

            <?php if ( isset($top_featured_button_text) && $top_featured_button_text !='' ): ?>
              <a class="ift-button wow fadeInUp" data-wow-duration="1s" href="<?php echo $top_featured_button_link; ?>"><?php echo $top_featured_button_text; ?></a>
            <?php else: ?>
              <a class="ift-button wow fadeInUp" data-wow-duration="1s" href="#"><?php _e('Create Now', 'indibiz'); ?></a>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Featured Section Ends -->
<?php 
  $first_icon_threecolumn = esc_attr( get_theme_mod('first_icon_threecolumn') );
  $first_title_threecolumn = esc_attr( get_theme_mod('first_title_threecolumn') );
  $first_description_threecolumn = esc_attr( get_theme_mod('first_description_threecolumn') );
  $first_link_text_threecolumn = esc_attr( get_theme_mod('first_link_text_threecolumn') );
  $first_link_anchor_threecolumn = esc_url( get_theme_mod('first_link_anchor_threecolumn') );
?>
<!-- 3 Column Featured Section Starts -->
<div class="trefoil">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <!-- Trefoil First Box Starts -->
        <div class="trefoil-box first text-center wow fadeInUp" data-wow-duration="1s">

        <?php if ( isset($first_icon_threecolumn) && $first_icon_threecolumn !='' ): ?>
          <a class="f-icon" href="<?php echo $first_link_anchor_threecolumn; ?>"><i class="fa <?php echo $first_icon_threecolumn; ?> fa-5x"></i></i></a>
        <?php else: ?>
          <a class="f-icon" href="#"><i class="fa fa-mobile fa-5x"></i></i></a>
        <?php endif; ?>

          <?php if ( isset($first_title_threecolumn) && $first_title_threecolumn !='' ): ?>
          <h3><?php echo $first_title_threecolumn; ?></h3>
          <?php else: ?>
          <h3><?php _e('Responsive', 'indibiz'); ?></h3>
          <?php endif; ?>

          <?php if ( isset($first_description_threecolumn) && $first_description_threecolumn != '' ): ?>
          <p><?php echo $first_description_threecolumn; ?></p>
          <?php else: ?>
          <p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'indibiz'); ?></p>
          <?php endif; ?>

          <?php if ( isset($first_link_text_threecolumn) && $first_link_text_threecolumn!='' ): ?>  
            <a class="trefoil-anchor" href="<?php echo $first_link_anchor_threecolumn; ?>"><?php echo $first_link_text_threecolumn; ?></a>
          <?php else: ?>
            <a class="trefoil-anchor" href="#"><?php _e('Learn more about getting set up', 'indibiz'); ?></a>
          <?php endif; ?>

        </div>
        <!-- Trefoil First Box Ends -->
      </div>

      <?php 
        $second_icon_threecolumn = esc_attr( get_theme_mod('second_icon_threecolumn') );
        $second_title_threecolumn = esc_attr( get_theme_mod('second_title_threecolumn') );
        $second_description_threecolumn = esc_attr( get_theme_mod('second_description_threecolumn') );
        $second_link_text_threecolumn = esc_attr( get_theme_mod('second_link_text_threecolumn') );
        $second_link_anchor_threecolumn = esc_url( get_theme_mod('second_link_anchor_threecolumn') );
      ?>
      <div class="col-md-4">
        <!-- Trefoil Second Box Starts -->

        <div class="trefoil-box second text-center wow fadeInUp" data-wow-duration="1.5s">

        <?php if ( isset($second_icon_threecolumn) && $second_icon_threecolumn !='' ): ?>
          <a class="f-icon" href="<?php echo $second_link_anchor_threecolumn; ?>"><i class="fa <?php echo $second_icon_threecolumn; ?> fa-5x"></i></i></a>
        <?php else: ?>
          <a class="f-icon" href="#"><i class="fa fa-eye fa-5x"></i></i></a>
        <?php endif; ?>

          <?php if ( isset($second_icon_threecolumn) && $second_title_threecolumn!='' ): ?>
          <h3><?php echo $second_title_threecolumn; ?></h3>
          <?php else: ?>
          <h3><?php _e('Beautiful', 'indibiz'); ?></h3>
          <?php endif; ?>

          <?php if ( isset($second_icon_threecolumn) && $second_description_threecolumn!='' ): ?>
          <p><?php echo $second_description_threecolumn; ?></p>
          <?php else: ?>
          <p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'indibiz'); ?></p>
          <?php endif; ?>

          <?php if ( isset($second_icon_threecolumn) && $second_link_text_threecolumn!='' ): ?>  
            <a class="trefoil-anchor" href="<?php echo $second_link_anchor_threecolumn; ?>"><?php echo $second_link_text_threecolumn; ?></a>
          <?php else: ?>
            <a class="trefoil-anchor" href="#"><?php _e('Learn more about getting set up', 'indibiz'); ?></a>
          <?php endif; ?>

        </div>

        <!-- Trefoil Second Box Ends -->
      </div>


      <?php 
        $third_icon_threecolumn = esc_attr( get_theme_mod('third_icon_threecolumn') );
        $third_title_threecolumn = esc_attr( get_theme_mod('third_title_threecolumn') );
        $third_description_threecolumn = esc_attr( get_theme_mod('third_description_threecolumn') );
        $third_link_text_threecolumn = esc_attr( get_theme_mod('third_link_text_threecolumn') );
        $third_link_anchor_threecolumn = esc_url( get_theme_mod('third_link_anchor_threecolumn') );
      ?>
      <div class="col-md-4">
        <!-- Trefoil Third Box Starts -->
      <div class="trefoil-box third text-center wow fadeInUp" data-wow-duration="2s">

        <?php if ( isset($third_icon_threecolumn) && $third_icon_threecolumn!='' ): ?>
          <a class="f-icon" href="<?php echo $third_link_anchor_threecolumn; ?>"><i class="fa <?php echo $third_icon_threecolumn; ?> fa-5x"></i></i></a>
        <?php else: ?>
          <a class="f-icon" href="#"><i class="fa fa-magic fa-5x"></i></i></a>
        <?php endif; ?>

          <?php if ( isset($third_title_threecolumn) && $third_title_threecolumn!='' ): ?>
          <h3><?php echo $third_title_threecolumn; ?></h3>
          <?php else: ?>
          <h3><?php _e('Optimized', 'indibiz'); ?></h3>
          <?php endif; ?>

          <?php if ( isset($third_description_threecolumn) && $third_description_threecolumn!='' ): ?>
          <p><?php echo $third_description_threecolumn; ?></p>
          <?php else: ?>
          <p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'indibiz'); ?></p>
          <?php endif; ?>

          <?php if ( isset($third_link_text_threecolumn) && $third_link_text_threecolumn!='' ): ?>  
            <a class="trefoil-anchor" href="<?php echo $third_link_anchor_threecolumn; ?>"><?php echo $third_link_text_threecolumn; ?></a>
          <?php else: ?>
            <a class="trefoil-anchor" href="#"><?php _e('Learn more about getting set up', 'indibiz'); ?></a>
          <?php endif; ?>

        </div>
        <!-- Trefoil Third Box Ends -->
      </div>

    </div>
  </div>
</div>
<!-- 3 Column Featured Section Ends -->

<?php
  $no_of_blogs = esc_attr( get_theme_mod('no_of_blogs') );
	if( $no_of_blogs > 0){
?>
<!-- Blog Section Starts -->
<div class="bog-container hero-section">
  <div class="container">
    <div class="row">

<!-- ================ Blog Loop ================ -->
<?php
  $no_of_blogs = esc_attr( get_theme_mod('no_of_blogs') );
  $args = array('showposts' => $no_of_blogs);
  $the_query = new WP_Query( $args ); 
  if ( $the_query->have_posts() ) : 
  while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>
      <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
        <div class="post-thumbnail">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php echo get_the_post_thumbnail( $post->ID, array( 360, 250), array( 'class' => 'thumb-entry' ) ); ?>
          </a>
        </div>
        <div class="blogs-inner-wrapper">

          <div class="blog-meta">
            <?php 
              $archive_year  = get_the_time('Y'); 
              $archive_month = get_the_time('m'); 
              $archive_day   = get_the_time('d'); 
            ?>
            <ul>
              <li class="author"><i class="fa fa-user"></i><?php the_author_posts_link() ?></li>
              <li class="time"><i class="fa fa-clock-o"></i><a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_time('M d, Y') ?></a></li>
            </ul>
          </div><!-- blog-meta -->


          <div class="blog-title">
            <h3 class="front-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div><!-- blog-title -->
        </div><!-- blogs-inner-wrapper -->
      </div><!-- col-md-4 -->
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<?php endif; ?>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- bog-container -->
<?php } ?>


<?php
  $first_client_image = esc_url( get_theme_mod('first_client_image') );
  $first_client_url = esc_url( get_theme_mod('first_client_url') );
  $second_client_image = esc_url( get_theme_mod('second_client_image') );
  $second_client_url = esc_url( get_theme_mod('second_client_url') );
  $third_client_image = esc_url( get_theme_mod('third_client_image') );
  $third_client_url = esc_url( get_theme_mod('third_client_url') );
  $fourth_client_image = esc_url( get_theme_mod('fourth_client_image') );
  $fourth_client_url = esc_url( get_theme_mod('fourth_client_url') );
  $fifth_client_image = esc_url( get_theme_mod('fifth_client_image') );
  $fifth_client_url = esc_url( get_theme_mod('fifth_client_url') );
  $sixth_client_image = esc_url( get_theme_mod('sixth_client_image') );
  $sixth_client_url = esc_url( get_theme_mod('sixth_client_url') );
  $our_client_heading = esc_attr( get_theme_mod('our_client_heading',__('Our Client', 'indibiz')) );
?>
<div class="petron">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="petron-inner">
        <?php if ( isset($our_client_heading) && $our_client_heading!='' ): ?>
         <h3 class="wow fadeInUp" data-wow-duration="1s"><?php echo $our_client_heading; ?></h3> 
         <?php endif; ?>   
          <div class="publications wow fadeInUp" data-wow-duration="1.5s">
            <?php $default_img = get_template_directory_uri().'/images/DSC_1152.jpg'; ?>
            <?php if ( isset($first_client_image) && $first_client_image!='' ): ?>
              <div>
                <a href='<?php echo $first_client_url; ?>'><img src='<?php echo $first_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?> 

            <?php if ( isset($second_client_image) && $second_client_image!='' ): ?>
              <div>
                <a href='<?php echo $second_client_url; ?>'><img src='<?php echo $second_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?>

            <?php if ( isset($third_client_image) && $third_client_image!='' ): ?>
              <div>
                <a href='<?php echo $third_client_url; ?>'><img src='<?php echo $third_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?>

            <?php if ( isset($fourth_client_image) && $fourth_client_image!='' ): ?>
              <div>
                <a href='<?php echo $fourth_client_url; ?>'><img src='<?php echo $fourth_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?>

            <?php if ( isset($fifth_client_image) && $fifth_client_image!='' ): ?>
              <div>
                <a href='<?php echo $fifth_client_url; ?>'><img src='<?php echo $fifth_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?>

            <?php if ( isset($sixth_client_image) && $sixth_client_image!='' ): ?>
              <div>
                <a href='<?php echo $sixth_client_url; ?>'><img src='<?php echo $sixth_client_image; ?>'></a>
              </div>
              <?php else: ?>
              <div>
                <a href='#'><img src='<?php echo $default_img; ?>'></a>
              </div>
            <?php endif; ?>           

          </div><!-- publications -->
        </div><!-- petron-inner -->
      </div><!-- col-md-12 -->
    </div><!-- row -->
  </div><!-- container -->
</div><!-- Petron -->
<!-- Petron Section Ends -->



<?php get_footer(); ?>
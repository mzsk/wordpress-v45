

<?php $footer_widget_style = esc_attr( get_theme_mod('footer_widget_style', '4') ); ?>

<!-- Sidebar Footer Section Starts -->
<div class="s-footer">
  <div class="container">
    <div class="row">

  <!-- First Footer Widget-->
  <?php if($footer_widget_style=='4'){ ?>
      <div class="col-md-3 first">
  <?php }elseif($footer_widget_style=='3'){ ?>
      <div class="col-md-4 first">
  <?php }elseif($footer_widget_style=='2'){ ?>
      <div class="col-md-6 first">
  <?php }elseif($footer_widget_style=='1'){ ?>
      <div class="col-md-12 first">
  <?php } ?>
        <div class="sfooter-box wow fadeInUp" data-wow-duration="1s">
    			<?php if (is_active_sidebar('sidebar-2')) : ?>
    				<?php dynamic_sidebar('sidebar-2'); ?>
    			<?php else : ?>
    			<?php endif; ?>
        </div>
      </div>
  <!-- First Footer Widget Ends-->

  <!-- Second Footer Widget-->
  <?php if($footer_widget_style=='4'){ ?>
      <div class="col-md-3 second">
  <?php }elseif($footer_widget_style=='3'){ ?>
      <div class="col-md-4 second">
  <?php }elseif($footer_widget_style=='2'){ ?>
      <div class="col-md-6 second">
  <?php } ?>
  <?php if($footer_widget_style=='4' || $footer_widget_style=='3' || $footer_widget_style=='2' ){ ?>
        <div class="sfooter-box second wow fadeInUp" data-wow-duration="1.5s">
    			<?php if (is_active_sidebar('sidebar-3')) : ?>
    				<?php dynamic_sidebar('sidebar-3'); ?>
    			<?php else : ?>
    			<?php endif; ?>
        </div>
      </div>
  <?php } ?>
  <!-- Second Footer Widget Ends-->


  <!-- Third Footer Widget-->
  <?php if($footer_widget_style=='4'){ ?>
      <div class="col-md-3 third">
  <?php }elseif($footer_widget_style=='3'){ ?>
      <div class="col-md-4 third">
  <?php } ?>
  <?php if($footer_widget_style=='4' || $footer_widget_style=='3' ){ ?>
        <div class="sfooter-box third wow fadeInUp" data-wow-duration="2s">
          <?php if (is_active_sidebar('sidebar-4')) : ?>
              <?php dynamic_sidebar('sidebar-4'); ?>
          <?php else : ?> 
          <?php endif; ?>
        </div>
      </div>
  <?php } ?>
  <!-- Third Footer Widget Ends-->


  <!-- Fourth Footer Widget-->
  <?php if($footer_widget_style=='4'){ ?>
      <div class="col-md-3 fourth">
        <div class="sfooter-box fourth wow fadeInUp" data-wow-duration="2.5s">
    			<?php if (is_active_sidebar('sidebar-5')) : ?>
    				<?php dynamic_sidebar('sidebar-5'); ?>
    			<?php else : ?>
    			<?php endif; ?>
        </div>
      </div>
  <?php } ?>
  <!-- Fourth Footer Widget Ends-->


    </div><!-- row -->
  </div><!-- container -->
</div><!-- s-footer -->
<!-- Sidebar Footer Section Ends -->

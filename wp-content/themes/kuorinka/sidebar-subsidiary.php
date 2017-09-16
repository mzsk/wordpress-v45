<?php if ( is_active_sidebar( 'subsidiary' ) ) : ?>

	<aside id="sidebar-subsidiary" class="sidebar" role="complementary" aria-labelledby="sidebar-subsidiary-header" <?php hybrid_attr( 'sidebar', 'subsidiary' ); ?>>
		<h2 class="screen-reader-text" id="sidebar-subsidiary-header"><?php echo esc_attr_x( 'Subsidiary Sidebar', 'Sidebar aria label', 'kuorinka' ); ?></h2>
		
		<div class="wrap">
			<div class="wrap-inside">
			
				<?php dynamic_sidebar( 'subsidiary' ); ?>
		
			</div><!-- .wrap-inside -->	
		</div><!-- .div -->

	</aside><!-- #sidebar-subsidiary .sidebar -->

<?php endif; // End check for subsidiary sidebar. ?>
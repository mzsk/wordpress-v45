<div class="loop-meta" <?php hybrid_attr( 'loop-meta' ); ?>>

	<h1 class="loop-title" <?php hybrid_attr( 'loop-title' ); ?>><?php the_archive_title(); ?></h1>

	<?php if ( !is_paged() && $desc = get_the_archive_description() ) : // Check if we're on page/1. ?>

		<div class="loop-description" <?php hybrid_attr( 'loop-description' ); ?>>
			<?php echo $desc; ?>
		</div><!-- .loop-description -->
		
	<?php endif; // End paged check. ?>
	
	<?php if ( is_post_type_archive( 'portfolio_item' ) || is_tax( 'portfolio' ) ) :
		get_template_part( 'menu', 'portfolio' ); // Loads the menu-portfolio.php template. ?>
	<?php endif; // End portfolio check. ?>
	
	<?php if ( is_post_type_archive( 'team-member' ) || is_tax( 'team-member-category' ) ) :
		get_template_part( 'menu', 'team-member' ); // Loads the menu-team-member.php template. ?>
	<?php endif; // End team-member check. ?>

</div><!-- .loop-meta -->
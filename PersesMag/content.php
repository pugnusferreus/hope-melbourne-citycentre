<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

        <?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

	<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[entry-published format="M / d / Y"] [entry-comments-link] [entry-edit-link]', hybrid_get_parent_textdomain() ) . '</div>' ); ?>        
        
        <div class="entry-content">
                <?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Medium', 'size' => 'medium', 'image_class' => 'alignleft', 'width' => 150, 'height' => 150 ) ); ?>                        		
                <?php the_content('',FALSE,''); ?>
                <?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_parent_textdomain() ), 'after' => '</p>' ) ); ?>
        </div><!-- .entry-content -->
	
	<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[read_more text="Read More"]', hybrid_get_parent_textdomain() ) . '</div>' ); ?>	

</div><!-- .hentry -->
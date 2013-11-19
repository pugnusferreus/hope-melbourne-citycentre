<?php
/**
 * Page Template
 *
 * This is the default page template.  It is used when a more specific template can't be found to display 
 * singular views of pages.
 *
 * @package swt
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<div id="content">

		<div class="hfeed">
			<?php if($pagename == 'core-values' || $pagename == 'statement-of-faith' || $pagename == 'affiliations' || $pagename == 'pastoral-team'){ ?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/aboutus.jpg" alt="About Us" width="1000" class="aligncenter size-full wp-image-130" />
			<?php 
			}
			elseif ($pagename == 'testimonies') {
				$totalTestimonies = get_post_meta( $post->ID, 'totalrecords', true);
			?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/testimonies-banner.jpg" alt="Testimonies" width="1000" class="aligncenter size-full wp-image-130" />
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery(window).load(function() {
							jQuery('#testimony_paginator').smartpaginator({ totalrecords: <?php echo $totalTestimonies ?>,
                        	recordsperpage: 1,
                        	datacontainer: 'testimony_div', 
                        	dataelement: 'div',
                        	theme: 'black' });
						})
					});
				</script>
			<?php 
			}
			elseif ($pagename == 'get-connected') {
			?>	
				<img src="<?php echo get_bloginfo('template_directory');?>/images/getconnected-banner.jpg" alt="Get Connected" width="1000" class="aligncenter size-full wp-image-130" />
			<?php } 
			elseif($pagename == 'ministries') { ?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/ministry-banner.jpg" alt="Ministry" width="1000" class="aligncenter size-full wp-image-130" />
			<?php }
			elseif($pagename == 'past-events') { ?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/past-events-banner.jpg" alt="Past Events" width="1000" class="aligncenter size-full wp-image-130" />
			<?php } 
			elseif($pagename == 'contact-us') { ?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/contact-us-banner.jpg" alt="Contact Us" width="1000" class="aligncenter size-full wp-image-130" />
			<?php } elseif($pagename == 'videos') { ?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/resources-banner.jpg" alt="Resources" width="1000" class="aligncenter size-full wp-image-130" />
			<?php } elseif($pagename == 'sermons') { 
				$totalSermons = get_post_meta( $post->ID, 'totalrecords', true);
				?>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/resources-banner.jpg" alt="Resources" width="1000" class="aligncenter size-full wp-image-130" />
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery(window).load(function() {
							jQuery('#sermons_paginator').smartpaginator({ totalrecords: <?php echo $totalSermons ?>,
                        	recordsperpage: 10,
                        	datacontainer: 'sermons_div', 
                        	dataelement: 'div',
                        	theme: 'black' });
						})
					});
				</script>
			<?php } ?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
						
						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', hybrid_get_parent_textdomain() ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_parent_textdomain() ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

					</div><!-- .hentry -->

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>
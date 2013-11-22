<?php
/**
 * Template Name: Home Page
 *
 * This is the default page template.  It is used when a more specific template can't be found to display 
 * singular views of pages.
 *
 * @package swt
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(window).load(function() {
			jQuery('.flexslider').flexslider({
				slideshowSpeed: 		5000,
				animationDuration:		5,
				directionNav:			true,
				controlNav:				false,
 				keyboardNav:			true
			});

			jQuery(".flex-prev").html('<img src="<?php echo get_bloginfo('template_directory');?>/images/left-arrow.png" alt="O" />&nbsp;&nbsp;');
			jQuery(".flex-next").html('<img src="<?php echo get_bloginfo('template_directory');?>/images/right-arrow.png" alt="O" />&nbsp;&nbsp;');
		});	
	});
</script>
	<div id="slider-wrap">
		<div class="flexslider">
			<ul class="slides">
				<?php $my_query = new WP_Query('category_name=slider'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
					
					
						<img style="height: 300px;"  src="<?php echo $image[0]; ?>" >
					
					<div class="flex-caption">
						<h2 class="flex-title"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<?php $external_link = get_post_meta( $post->ID, 'external_link', true); ?> 
						<?php if($external_link != '') { ?>
							<a href="<?php echo $external_link; ?>" class="slider-more"></a>
						<?php } else { ?>
							<a href="<?php echo get_permalink($post->ID); ?>" class="slider-more"></a>
						<?php } ?>
					</div>
				</li>


				<?php endwhile; ?>
			</ul><!--.slides-->
		</div>

	</div>
	
	<div style="margin-top:10px; margin-bottom:10px; font-size: 14px">
		Come join us at:
		<div style="font-style:bold; font-size: 16px; margin-top:10px; color: #336699;">
			53-57 Munster Tce (2 mins walk from North Melbourne Station) <br/>
			North Melbourne<br/>
			VIC 3051<br/>
		</div>
	</div>

	<div id="featured">
		<ul class="featured-posts">
			<li class="item1">
				<a title="Sunday Service" href="http://citycentre.hopemelbourne.org/sunday-service/"><img width="70" height="50" class="thumbnail aligncenter" alt="Sapiente delectus ut aut" src="<?php echo get_bloginfo('template_directory');?>/images/sermon.jpg"></a>
				<h4 class="in-title">
					Sunday Service
				</h4>
				<p>Starts at 10:30am at the main hall</p>
			</li>
			<li class="item2">
				<a title="Get Connected" href="get-connected/"><img width="70" height="50" class="thumbnail aligncenter" alt="Get Connected" src="<?php echo get_bloginfo('template_directory');?>/images/connected.jpg"></a>
				<h4 class="in-title">
					<a href="get-connected/">Get Connected</a>
				</h4>
				<p>We warmly invite you to our Life Groups and get connected with our friendly communities!</p>
			</li>
			<li class="item3">
				<a title="Sermons" href="sermons/"><img width="70" height="50" class="thumbnail aligncenter" alt="Sermons" src="<?php echo get_bloginfo('template_directory');?>/images/resources.jpg"></a>
				<h4 class="in-title">
					<a href="sermons/">Sermons</a>
				</h4>
				<p>Come and listen to the good news!</p>
			</li>
			<li class="item4">
				<a title="Testimonies" href="testimonies/"><img width="40" height="40" class="thumbnail aligncenter" alt="Testimonies" src="<?php echo get_bloginfo('template_directory');?>/images/testimonies.jpg"></a>
				<h4 class="in-title">
					<a href="testimonies/">Testimonies</a>
				</h4>
				<p>How God touched our lives</p>
			</li>
		</ul>
	</div>

<?php get_footer(); // Loads the footer.php template. ?>
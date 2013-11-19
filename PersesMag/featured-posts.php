<?php

global $options;
$options = get_option('swt_theme_options');

if ( !is_singular() && $options['swt_fp']=='Display' ) {

	$fp_cat = $options['swt_fp_category'];
	$fp_cat_id = get_cat_ID($fp_cat);
	$fp_num = $options['swt_fp_count'];

?>
<div id="featured">
	<ul class="featured-posts">
		<?php $x = 0; $swt_query = new WP_Query( 'cat= '. $fp_cat_id . '&showposts='. $fp_num .'' ); while ( $swt_query->have_posts() ) : $swt_query->the_post(); $x++; ?>
			<li class="item<?php echo $x; ?>">
				<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'image_class' => 'aligncenter', 'width' => 40, 'height' => 40 ) ); ?>
				<h4 class="in-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<p><?php truncate_post(80, true); ?></p>				
			</li>
		<?php endwhile; ?>
	</ul><!-- .featured-posts -->
</div><!-- #featured -->
<?php } ?>
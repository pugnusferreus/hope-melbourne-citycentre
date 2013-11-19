<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package swt
 * @subpackage Template
 */
?>
				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

			</div><!-- .wrap -->

		</div><!-- #main -->

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

		<div id="footer">

			<div class="wrap">
				<a id="back-to-top" href="#container"></a>
			
					<p>Copyright &copy; <?php echo date('Y'); ?>. All Rights Reserved. Designed by <a href="http://www.simplewpthemes.com">WP Themes</a></p>
					
			</div><!-- .wrap -->

		</div><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // wp_footer ?>
	
	<script type="text/javascript">
		jQuery('document').ready(function(){
			jQuery('#back-to-top').click(function () {
				jQuery('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});	
		});
	</script>	

</body>
</html>
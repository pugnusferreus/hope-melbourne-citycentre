<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * @package swt
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); // wp_head ?>

<?php if ($pagename == 'testimonies' || $pagename == 'sermons') { ?>
<script type='text/javascript' src='<?php echo get_bloginfo('template_directory'); ?>/js/smartpaginator.js' ></script>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/js/smartpaginator.css" type="text/css" media="all" />
<?php } ?>
</head>

<body class="<?php hybrid_body_class(); ?>">

	<div id="container">

		<div id="header">

			<div class="wrap">

				<div id="branding">
					<span>
					<img src="<?php bloginfo('template_url')?>/images/logo.png" alt="Hope Logo" />
					</span>
				</div><!-- #branding -->

				<?php include( trailingslashit( get_template_directory() ) .'includes/social.php' ); ?>															
				
			</div><!-- .wrap -->

		</div><!-- #header -->

		<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

		<?php get_template_part( 'slider' ); // Loads slider.php template. ?>
		
		<?php get_template_part( 'featured', 'posts' ); // Loads featured-posts.php template. ?>						
		
		<div id="main">

			<div class="wrap">
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Number one
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="wp-content/themes/number-one/css/isotope.css" media="screen" />	
<link rel="stylesheet" href="wp-content/themes/number-one/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="wp-content/themes/number-one/css/bootstrap.css">
<link rel="stylesheet" href="wp-content/themes/number-one/css/bootstrap-theme.css">
<link rel="stylesheet" href="wp-content/themes/number-one/css/style.css">
<!-- skin -->
<link rel="stylesheet" href="wp-content/themes/number-one/skin/default.css">

		
<?php wp_head(); ?>
</head>

<body>
		<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-0="line-height:90px;" data-300="line-height:50px;">			<?php bloginfo( 'name' ); ?>
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
				
					<?php wp_nav_menu( 
									array( 'theme_location' => 'primary', 	
									'menu_class'      => 'nav navbar-nav',
									'items_wrap'      => '<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">%3$s</ul>'

							)); ?>
				</div><!--/.navbar-collapse -->
			</div>
		</div>


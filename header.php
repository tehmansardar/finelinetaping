<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FINELINE_TAPING
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Construction Company,Buliders,cheap rates construction,building contractors,construction companies,remodeling, home renovation,construction companies near me">
	<meta name="author" content="Inverstor home Construction">
	<meta name="description" content="Construction Companyin sahiwal,Construction Company,Buliders,cheap rates construction,building contractors,construction companies,remodeling, home renovation,construction companies near me">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Asset 3.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Asset 3.png">
	<?php if(!is_front_page()){ ?>
	<style>
		@media (max-width: 991px){
			.pb_navbar .navbar-nav { 
				background : none;	
			}
		}
	</style>
	<?php } ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#pb-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar" style="color: darkgray; <?php if(!is_front_page()){ echo 'background:#f4ce42'; } ?>">
		<div class="container" style="color: darkgray;">
			<a class="navbar-brand" style="color: darkgray;" href="<?php bloginfo('url'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Asset 1.png" alt="LOGO" style="width: 180px; height=90px"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span><i class="ion-navicon"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="probootstrap-navbar">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'container' 	 => false,
					'menu_id'        => 'primary-menu',
					'menu_class'			 =>	'navbar-nav ml-auto'
				));
				?>
				<!-- <ul class="navbar-nav ml-auto" >
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
			  <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-practicing-areas">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="gallary.html">Gallary</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-testimonials">Testimonials</a></li>
			   <li class="nav-item"><a class="nav-link" href="#section-career">Career</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
          </ul> -->
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
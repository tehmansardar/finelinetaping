<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FINELINE_TAPING
 */

get_header();
?>
<div id="slider">
		<div class="slider-inner">
			<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/invertor-home-fornt-bhariatown.png)" id="section-home">
				<div class="home-content-table">
					<div class="home-content-tablecell">
						<div class="row">
							<div class="col-twelve">

								<h3 class="animate-intro">Welcome to Inverstor Home Construction </h3>
								<h1 class="animate-intro">
									We Believe <br>
									Love Begins At Home
								</h1>

								<!-- <div class="more animate-intro">
							<a class="smoothscroll button stroke" href="#section-about" id="">Learn more</a>
						</div> -->


							</div> <!-- end col-twelve -->
						</div> <!-- end row -->
					</div>
				</div>
			</section>

			<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/invertor-home-fornt.png)" id="section-home">
				<div class="home-content-table">
					<div class="home-content-tablecell">
						<div class="row">
							<div class="col-twelve">

								<h3 class="animate-intro">Welcome to Inverstor Home Construction </h3>
								<h1 class="animate-intro">
									We Believe <br>
									Love Begins At Home
								</h1>

								<!-- <div class="more animate-intro">
							<a class="smoothscroll button stroke" href="#section-about" id="">Learn more</a>
						</div> -->


							</div> <!-- end col-twelve -->
						</div> <!-- end row -->
					</div>
				</div>
			</section>

			<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/invertor-home-fornt-dhalahore.png)" id="section-home">
				<div class="home-content-table">
					<div class="home-content-tablecell">
						<div class="row">
							<div class="col-twelve">

								<h3 class="animate-intro">Welcome to Inverstor Home Construction </h3>
								<h1 class="animate-intro">
									We Believe <br>
									Love Begins At Home
								</h1>

								<!-- <div class="more animate-intro">
							<a class="smoothscroll button stroke" href="#section-about" id="">Learn more</a>
						</div> -->


							</div> <!-- end col-twelve -->
						</div> <!-- end row -->
					</div>
				</div>
			</section>

			<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/invertor-home-fornt-dhalahore-1.png)" id="section-home">
				<div class="home-content-table">
					<div class="home-content-tablecell">
						<div class="row">
							<div class="col-twelve">

								<h3 class="animate-intro">Welcome to Inverstor Home Construction </h3>
								<h1 class="animate-intro">
									We Believe <br>
									Love Begins At Home
								</h1>

								<!-- <div class="more animate-intro">
							<a class="smoothscroll button stroke" href="#section-about" id="">Learn more</a>
						</div> -->


							</div> <!-- end col-twelve -->
						</div> <!-- end row -->
					</div>
				</div>
			</section>

			<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/invertor-home-fornt-dhalahore-2.png)" id="section-home">
				<div class="home-content-table">
					<div class="home-content-tablecell">
						<div class="row">
							<div class="col-twelve">

								<h3 class="animate-intro">Welcome to Inverstor Home Construction </h3>
								<h1 class="animate-intro">
									We Believe <br>
									Love Begins At Home
								</h1>

								<!-- <div class="more animate-intro">
							<a class="smoothscroll button stroke" href="#section-about" id="">Learn more</a>
						</div> -->


							</div> <!-- end col-twelve -->
						</div> <!-- end row -->
					</div>
				</div>
			</section>

		</div>
	</div>

<?php get_template_part('template-parts/home', 'about'); ?>

<?php /* get_template_part('template-parts/home', 'getContact'); */ ?>

<?php get_template_part('template-parts/home', 'services'); ?>

<?php get_template_part('template-parts/home', 'gallary'); ?>

<?php get_template_part('template-parts/home', 'testimonials'); ?>

<?php /* get_template_part('template-parts/home', 'career'); */ ?>

<?php get_template_part('template-parts/home', 'contact'); ?>

<?php
get_sidebar();
get_footer();

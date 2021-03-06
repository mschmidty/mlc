<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mlc_v1
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php 
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header page-banner-detail page-banner-container pattern-section">
						<?php the_title( '<h1 class="entry-title page-banner-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<?php  get_template_part( 'template-parts/content', 'page' ); ?>
				</article><!-- #post-<?php the_ID(); ?> -->
				<?php

				


			endwhile; // End of the loop.
			
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

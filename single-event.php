<?php
/**
 * The template for displaying all single events
 *
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
							<h1 class="page-banner-title">Events</h1>
						</header><!-- .entry-header -->
	          <div class="event-single-wrapper">
	            <div class="column1">
	              <div class="card-date">
									<?php
	                  $date = get_field('event_date', false, false);
	                  $date = new DateTime($date);
	                ?>
	                    <span class="card-date-day"> <?php echo $date->format('j'); ?></span>
	                    <span class="card-date-month"> <?php echo $date->format('F'); ?></span>
	              </div>
								<h1 class="title"><?php the_title(); ?></h1>
	              <?php the_content(); ?>
	            </div>
	            <div class="column2">
	            <?php

	            $image = get_field('page_feature_image');
	            $size = 'full'; // (thumbnail, medium, large, full or custom size)

	            if( $image ) {

	            ?>
	                <img src=" <?php echo $image['url']; ?> " alt="<?php echo $image['alt']; ?> ">
	              <?php

	            }

	            ?>

	            </div>

	          </div>

					</article><!-- #post-<?php the_ID(); ?> -->
					<?php
				endwhile; // End of the loop.

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
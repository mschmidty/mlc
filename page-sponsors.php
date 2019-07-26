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
      <header class="entry-header page-banner-detail page-banner-container pattern-section">
        <?php the_title( '<h1 class="entry-title page-banner-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->
      <div class="sponsor-wrap">

        <?php
        $args = array(
          'post_type' => 'sponsors',
          'order' => 'ASC'
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
          echo '<ul class="sponsor-level-list">';
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <li class="sponsor-level">
              <div class="sponsor-level-wrap">

                <div class="sponsor-column1">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="sponsor-column2">
                  <ul class="sponsor-image-list">
                  <?php
                  // check if the repeater field has rows of data
                  if( have_rows('sponsor_repeater') ):

                    // loop through the rows of data
                      while ( have_rows('sponsor_repeater') ) : the_row();
                          $sponsor_image = get_sub_field('sponsor_image');
                          $sponsor_image_size = 'full';
                          $sponsor_url = get_sub_field('sponsor_url');
                          ?>

                              <li>
                                <a href="<?php
                                  if($sponsor_url){
                                    echo $sponsor_url;
                                  }else{
                                    echo "#";
                                  }
                                ?>" target="_blank">
                                  <?php echo wp_get_attachment_image($sponsor_image, $sponsor_image_size); ?>
                                </a>
                              </li>

                          <?php

                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                  </ul>
                </div>
              </div>
            </li>

            <?php
          }
          echo '</ul>';
          /* Restore original Post Data */
          wp_reset_postdata();
        } else {
          // no posts found
        }
        ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
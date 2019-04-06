<?php
  /* Template Name: Page-Index */
  get_header();
?>
<div class="page-banner-index page-banner-container">
  <img class="page-banner-image" src="https://images.unsplash.com/photo-1504868158256-5d4f69c8d3fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3067&q=80" alt="">
  <h1 class="page-banner-title"><?php the_title(); ?></h1>
</div>

<div class="home-page-programs container flex-cards-container">

<?php 
$args = array('post_type'=> 'programs_detail');
$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();
 
  get_template_part('template-parts/content', 'index-cards');

endwhile;
?>
</div>

<?php
get_footer();
?>


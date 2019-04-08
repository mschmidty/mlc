<?php
  /* Template Name: Page-Index */
  get_header();
?>
<?php
  $image_url = "/images/CowsAndTree.jpg";
  include(locate_template('template-parts/content-image-header.php'));
?>

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

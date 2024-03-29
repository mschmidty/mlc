<?php
  /* Template Name: Layout 2 */
  get_header();
?>
<?php
  $image_name = get_field('post_associated_image_name');
  $image_url = "/images/" . $image_name  ;
  include(locate_template('template-parts/content-image-header.php'));
?>

<div class="half-section pattern-section">
<?php

// check if the repeater field has rows of data
if( have_rows('repeatable_pair') ):

 	// loop through the rows of data
    while ( have_rows('repeatable_pair') ) : the_row();
    $image = get_sub_field('image_text_pair_image');


?>

  <section class=" half-section-single">
    <div  class="half-section-single-text">
      <div>
        <h2><?php the_sub_field('image_text_pair_title'); ?></h2>
        <?php the_sub_field('image_text_pair_text'); ?>
      </div>
    </div>
    <div class="half-section-single-image">
      <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
    </div>
  </section>

<?php
    endwhile;

else :

    // no rows found

endif;

?>

</div>
<div class="home-page-programs container flex-cards-container">

<?php
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
 );
$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();

  get_template_part('template-parts/content', 'index-cards');

endwhile;
?>
</div>
<!-- /* <?php 
  if(is_page('montezuma-inspire-coalition')){
    ?>
<div class="flex-cards-container">
  <h1 class="center-title">Check out our Guiding Documents</h1> 
  <a href="<?php echo get_template_directory_uri() . '/pdfs/MIC_Strategic_Plan_2020-2024.pdf'; ?>" class="card">
    <div class="background-image" style="background: url('<?php echo get_template_directory_uri() . '/images/strategic_plan_image.jpg'; ?>') no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Montezuma Inspire Coalition Strategic Plan</h2>
      <p>Our guiding document. </p>
      <p class="link">Learn More </p>
    </div>
  </a>
  <a href="<?php echo get_template_directory_uri() . '/pdfs/MIC_Community_Data_Snapshot_April 2020_FINAL-2.pdf'; ?>" class="card">
    <div class="background-image" style="background: url('<?php echo get_template_directory_uri() . '/images/community_data.jpg'; ?>') no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Montezuma Inspire Coalition Montezuma Community Data Snapshot</h2>
      <p>Some information about our community. </p>
      <p class="link">Learn More </p>
    </div>
  </a>
</div>
      

    <?php
  }
?> -->
<div class="about-newsletter-section newsletter-section">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</div>
<?php
get_footer();
?>

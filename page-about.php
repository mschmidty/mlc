<?php
  get_header();
?>
<?php
  $image_url = "/images/screen_grab.png";
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
<div class="about-newsletter-section newsletter-section">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</div>
<?php
get_footer();
?>

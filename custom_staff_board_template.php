<?php
  /* Template Name: Staff-Board */
  get_header();
?>

<div class="page-banner-detail page-banner-container pattern-section">
  <h1 class="page-banner-title"> <?php the_title(); ?> </h1>
</div>
<div class="container entry-content">
<?php echo get_post_field('post_content', $post->ID); ?>
  
</div>

<div class="container staff-board">

<?php
global $post;
if( is_page(69) ){
  $args = array('post_type'=> 'staff', 'order' => 'ASC');
} else {
  $args = array('post_type'=> 'board', 'order' => 'ASC');
}

$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();

  ?>
  <a href=" <?php the_permalink(); ?>" class="staff-board-card">
    <?php 

    $image = get_field('staff_board_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if( $image ) {

      echo wp_get_attachment_image( $image, $size );

    }

    ?>

    <h2><?php the_title(); ?></h2>
    <p><?php the_field('staff_board_title'); ?></p>

  </a>

  <?php

endwhile;
?>
</div>

<?php get_footer(); ?>

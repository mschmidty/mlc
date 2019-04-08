<?php
  /* Template Name: Staff-Board */
  get_header();
?>

<div class="page-banner-detail page-banner-container pattern-section">
  <h1 class="page-banner-title"> <?php the_title(); ?> </h1>
</div>

<div class="container staff-board">

<?php
$args = array('post_type'=> 'staff');
$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();

  ?>
  <a href=" <?php the_permalink(); ?>" class="staff-board-card">
    <?php

    $image = get_field('staff_board_image');
    $size = 'large'; // (thumbnail, medium, large, full or custom size)
    $medium_image = $image['sizes'][ $size ];

    if( $image ) {

    	?>
      <img src="<?php echo $medium_image; ?>" alt="<?php echo $image['alt']; ?>">
      <?php

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

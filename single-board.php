<?php
  get_header();
?>
<div class="page-banner-detail page-banner-container pattern-section">
  <h1 class="page-banner-title"> Meet Our Staff </h1>
</div>
<div class="staff-detail-container">
  <div class="staff-detail-image">
    <?php

    $image = get_field('staff_board_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if( $image ) {

      echo wp_get_attachment_image( $image, $size );

    }

    ?>
    <h2><?php the_title(); ?></h2>
    <p class="staff-board-title"><?php the_field('staff_board_title'); ?></p>
    <p class="staff-board-quote">

    <?php
      $quote = get_field('staff_board_quote');
      if($quote){
        echo $quote;
      }
    ?>

    </p>

  </div>
  <div class="staff-detail-bio">
    <?php the_field('staff_board_text'); ?>
  </div>
</div>
<?php get_footer(); ?>
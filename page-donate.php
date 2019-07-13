<?php
  get_header();
?>
<?php
  $image_url = "/images/CowsAndTree.jpg";
  include(locate_template('template-parts/content-image-header.php'));
?>
<div class="donate-page-content">
  <div class="donate-box">
  <?php 
    while ( have_posts() ) :
      the_post();
      
      
      the_content();
        
    endwhile; // End of the loop.
    
  ?>
  </div>
  <div class="donate-images">
    <img src="<?php echo get_template_directory_uri() . '/images/donate_image1.jpg'; ?>" alt="">
    <img src="<?php echo get_template_directory_uri() . '/images/donate_image2.jpg'; ?>" alt="">
  </div>
</div>



		

<div class="about-newsletter-section newsletter-section">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</div>

<?php
get_footer();
?>

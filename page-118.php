<?php

get_header();
?>
<div class="page-banner-detail page-banner-container pattern-section">
  <h1 class="page-banner-title"> A Film About Who We Are </h1>
</div>
<?php 
			while ( have_posts() ) :
				the_post();
				?>
      <div class="video-display">
        <?php the_content(); ?>
      </div>
      <?php

			endwhile; // End of the loop.
			
		?>
<?php get_footer(); ?>
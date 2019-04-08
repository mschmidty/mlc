<?php

$image = get_field('page_feature_image');

if( !empty($image) ):

	// vars
  $url = $image['url'];
?>

<div class="card">
  <div class="background-image" style="background: url(' <?php echo $url; ?>') no-repeat center center; background-size:cover;">
  </div>
  <div class="card-text-box">
    <h2><?php the_title() ?></h2>
    <?php  if(page_teaser){ ?>
      <p><?php the_field('page_teaser');?></p>
    <?php } ?>
    <a href="<?php the_permalink(); ?>" class="link">Learn More </a>
  </div>
</div>
<?php endif; ?>

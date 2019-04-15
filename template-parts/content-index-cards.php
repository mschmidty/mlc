<?php

$image = get_field('page_feature_image');

if( !empty($image) ):

	// vars
  $url = $image['url'];
?>

<a href="<?php the_permalink(); ?>" class="card">
  <div class="background-image" style="background: url(' <?php echo $url; ?>') no-repeat center center; background-size:cover;">
  </div>
  <div class="card-text-box">
    
    <?php 
      $date_raw = get_field('event_date', false, false);
      $date = new DateTime($date_raw);
      if($date_raw){
        ?> 
        <div class="card-date">
          <span class="card-date-day"> <?php echo $date->format('j'); ?></span>
          <span class="card-date-month"> <?php echo $date->format('F'); ?></span>
        </div>
        <?php
      }
    ?>
    
    
    <h2><?php the_title() ?></h2>
    <?php  
    $teaser = get_field('page_teaser');
    if($teaser){ ?>
      <p><?php echo $teaser; ?></p>
    <?php } ?>
    <p href="<?php the_permalink(); ?>" class="link">Learn More </p>
  </div>
</a>
<?php endif; ?>

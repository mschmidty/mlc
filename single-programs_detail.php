<?php
  get_header();
?>
<div class="page-banner-detail page-banner-container pattern-section">
  <h1 class="page-banner-title"> <?php the_title(); ?> </h1>
</div>

<div class="half-section">
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


<div class="half-section-small">

<?php

// check if the repeater field has rows of data
$repeater_slug = 'repeatebable_pair_with_links';

if( have_rows($repeater_slug) ):

 	// loop through the rows of data
    while ( have_rows($repeater_slug) ) : the_row();
    $image = get_sub_field('repeat_w_links_image');
    $size = 'large';
    $image_medium = $image['sizes'][$size];

    $link = get_sub_field('repeat_w_links_link');

?>

  <section class=" half-section-single">
    <div  class="half-section-single-text">
      <div>
        <h2><?php the_sub_field('repeat_w_links_title'); ?></h2>
        <?php the_sub_field('repeat_w_links_text'); ?>
        <a href="<?php echo $link['url']; ?>" class="link"><?php echo $link['title']; ?></a>
       </div>
    </div>
    <div class="half-section-single-image">
      <img src="<?php echo $image_medium;?>" alt="<?php echo $image['alt'];?>">
    </div>
  </section>



<?php
    endwhile;

else :

    // no rows found

endif;

?>
</div>

<?php
get_footer();
?>

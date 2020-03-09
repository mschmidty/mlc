<?php
  /* Template Name: Page-Index */
  get_header();
?>
<?php
  $image_name = get_field('post_associated_image_name');
  $image_url = "/images/" . $image_name . ".jpg";
  include(locate_template('template-parts/content-image-header.php'));
?>

<div class="home-page-programs container flex-cards-container">
<?php
$post_type_slug = get_field('post_type_slug');
if($post_type_slug == "event"){
  $args = array(
    'post_type' => $post_type_slug,
    'posts_per_page' => -1,
    'meta_key' => 'event_date',
    'orderby' => 'meta_value',
    'order' => 'ASC'
  );
}else{
  $args = array('post_type'=> $post_type_slug);
}
$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();

  get_template_part('template-parts/content', 'index-cards');

endwhile;
?>
</div>

<?php
get_footer();
?>

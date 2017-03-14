<?php
/*
Template Name: Home-Latest
*/
?>

<?php get_header(); ?>

<?php
$args = array( 'numberposts' => 1 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>

<section id="content" role="main" class="post">
<div class="overlay">Latest Werk | <?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory;?></div>
    
<section class="splash" style="background:url(<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
echo $thumb_url[0];
?>) center center; background-size:cover;"></section>

<?php endforeach; ?>
</section>
<?php get_footer(); ?>


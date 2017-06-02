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

    
<section class="splash" style="background:url(<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
echo $thumb_url[0];
                               ?>) center center; background-size:cover;"><a href="<?php the_permalink(); ?>"><span><h2><?php the_title(); ?></h2></p></span></a></section>
<a href="<?php the_permalink(); ?>"><div class="overlay">Latest Strip</div></a>
<?php endforeach; ?>
</section>
<?php get_footer(); ?>


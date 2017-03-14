<?php
/*
WP Post Template: Single Gallery
*/
?>
<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-gallery' ); ?>

<footer class="twelve columns" id="footer" role="contentinfo">

</footer>
<?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>
</div>
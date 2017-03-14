
<?php get_header(); ?>
<section id="content" role="main">
<!--<h4><?php single_cat_title(); ?></h4>-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>

<?php endwhile; endif; ?>
    <footer class="twelve columns" id="footer" role="contentinfo">
    <?php get_template_part( 'nav', 'below' ); ?>
</footer>
    

</section>
<?php get_footer(); ?>
</div>
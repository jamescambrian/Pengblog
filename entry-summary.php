<section class="entry-summary one-third column">
    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( '', array( 'class' => 'u-full-width b-lazy' ) ); } ?></a>
    

<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>
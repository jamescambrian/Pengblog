<figure class="entry-summary box one-third column">
    <div class="overlay"> <?php the_date('d M'); ?></div>
    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( '', array( 'class' => 'u-full-width b-lazy' ) ); } ?>
<figcaption><span class="title"><?php the_title(); ?></span></figcaption></a>
</figure>
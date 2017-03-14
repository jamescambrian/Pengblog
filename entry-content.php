<section class="entry-content">
    
    <article>
        <div class="twelve columns">
            <?php the_title('<h2 class="no-feat">', '</h2>'); ?>
            <?php the_content(); ?>
            <?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
        </div>
    </article>    
</section> 
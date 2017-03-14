<section class="entry-content">

<article>
    <div class="six columns"><p>    <?php $galleryArray = get_post_gallery_ids($post->ID);  ?>
        <?php foreach ($galleryArray as $id) { ?>
        <img class="u-full-width b-lazy" src="<?php echo wp_get_attachment_url( $id ); ?>">
        <?php } ?></p>
    </div>
    

  
<div class="six columns post__text">
<?php the_title('<h2>', '</h2>'); ?> 
     
<?php the_content(); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

   
</div>


</article>    
</section> 
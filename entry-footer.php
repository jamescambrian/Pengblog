<footer class="entry-footer">
  <div class="twelve columns">
    <div class="six columns">
        <p class="post__tags">
            <span class="tag-links"><?php the_tags( 'Tags: ' , ' / ' , '' ); ?> </span
                </p>
                </div>
        <div class="six columns">
            <p class="post__tags">Category:
                <span class="cat-links"><?php _e( '', 'agcj' ); ?><?php the_category( ' / ' ); ?></span>
            </p>
            </div>
<div class="twelve columns">
    <?php include("post-shares.php"); ?>
        </div>
</footer> 
<div class="clear"></div>
</div>
<footer class="twelve columns" id="footer" role="contentinfo">

</footer>
</div>
<?php wp_footer(); ?>
<!-- POPUP -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'popup', opts);
 
    return false;
  });
</script>
</body>
</html>
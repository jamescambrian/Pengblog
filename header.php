<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_uri(); ?>/favicon.png">
</head>
<body <?php body_class(); ?>>
<!--SDK Facebook-->
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '247066229067460',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <!-- Begin Wrapper -->
<div id="wrapper">
    

<aside class="enter1">
   


        

        <a class="no_colour" href="<?php echo site_url(); ?>"><img style="" class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/images/penghead.png"/></a><br>
    <p><?php echo get_bloginfo( 'description' ); ?></p>
    <div class="menu--space"><h2>Browse the Archives</h2><ul class="menu"><?php wp_get_archives('type=yearly'); ?></ul>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?></div>
    </aside>
    <!-- Begin Content -->
	<div class="content enter2">
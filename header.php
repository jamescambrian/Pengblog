<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
    <link rel="icon" type="image/png" href="favicon.png">
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
   

    <div class="">
        <a class="no_colour" href="<?php echo site_url(); ?>"><h3>A GUY CALLED JAMES</h3></a>
         <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
    </aside>
    <!-- Begin Content -->
	<div class="content enter2">
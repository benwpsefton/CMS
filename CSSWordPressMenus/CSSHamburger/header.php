<!DOCTYPE html>
<html lang="en">
<head>

<title>MyStyle</title>

<?php wp_head(); ?>
<!-- <link rel="stylesheet" href="/wordpress/wp-content/themes/06-theme-dev/css/mystyle.css"> -->


</head>

<body>
<header class="menu-wrap">
<input type="checkbox" id="checkbox"> <!-- Checkbox allows for opening and closing of the hamburger menu -->
<label for="checkbox" class="menu-icon">☰</label>
<div class="custom-menu-class">
<?php 
     wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</header>
</div>

<p>
<div class="top">
<h1>Test - header.php</h1>
<p>This is where the menu should be Above this line</p>

<h2> Add widget here </h2>
<?php
 
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
     
<?php endif; ?>
<p>End of widget</p>


</div>

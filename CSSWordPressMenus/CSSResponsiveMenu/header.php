<!DOCTYPE html>
<html lang="en">
<head>

<title>MyStyle</title>

<?php wp_head(); ?>

</head>

<body>

<div class="top">
<h1>Test - header.php</h1>
<nav >
	<ul id="skipTo">
		<li>
			<a href="#main" title="Skip to Main Content">Skip to Main Content</a>
		</li>
	</ul>
<?php 
     wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</nav>


<p>Above this line</p>
<h2> Add widget here </h2>
<?php
 
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
     
<?php endif; ?>
<p>End of widget</p>

<hr id="main" />
</div>

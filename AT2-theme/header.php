<!DOCTYPE html>
<html lang="en">
<head>

<title>Sefton AT2</title>

<?php wp_head(); ?>
<link rel="stylesheet" href="/css/style2.css">

</head>

<body>

<div class="top">
    <div class="custom-menu-class">
        <?php
             wp_nav_menu( array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class'));
        ?>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Theme</title>
    <?php wp_head() ?>
</head>

<?php 
    if( is_front_page() ):
        $awesome_classes = array('awesome-class', 'my-class');
    else:
        $awesome_classes = null;
    endif
?> 
<body <?php body_class($awesome_classes) ?>>
    <?php wp_nav_menu(array('theme_location'=>'primary')) ?>
    

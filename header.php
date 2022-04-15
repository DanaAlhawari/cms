<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  <?php wp_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class (); ?>>

<header id="header">

    <div id="logo">
         <a class="logo" href="<?php echo home_url(); ?>">Restauranger</a>
         <?php //get_search_form( ); ?>
    </div>
    <?php   
		$args=array(
		'theme_location' => 'header-resturang-menu',
		'menu' => 'header-resturang-menu',
		'container' => 'nav',
		'container_id' => 'nav',
		'menu_class' => 'menu' // class på <ul>
		);
	?>
	<?php wp_nav_menu($args);?>
</header>



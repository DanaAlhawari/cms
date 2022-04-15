<?php
/* Template Name: Undersida1*/
?>
<?php
get_header();?>
<h1><?php  the_title(); ?></h1>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
    <div class="about-content">
        <?php the_content();?>
    </div>
    <div>
        <?php dynamic_sidebar( 'about');?>
    </div>
         <?php
    endwhile;
endif;

get_footer();
?>



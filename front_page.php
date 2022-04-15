<?php
/* Template Name: Front Page*/
?>
<?php get_header();?>
<h1>Restauranger i Sverige</h1>
<div class="flex-gallery-container ">
    <?php
    // the loop
if(have_posts() ) :
    while (have_posts() ) : the_post();?>
    
      <?php dynamic_sidebar( 'gallery');?> 
    
<?php
endwhile;

endif;?>
</div>
<?php
wp_reset_postdata();



get_footer();

?>
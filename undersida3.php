<?php
/* Template Name: Undersida3*/
?>
<?php
get_header();?>
<h1>Restauranger i Sverige</h1>
<div class="flex-gallery-container ">
  <?php dynamic_sidebar( 'gallery');?> 
</div>
<?php
    
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
      <div id="kontakta">
          <h2><?php the_title();?></h2>
          <?php the_content(); ?>
      </div>
        <?php
    endwhile;
endif;?>

<?php
get_footer();
?>
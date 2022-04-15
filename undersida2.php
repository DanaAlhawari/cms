<?php
/* Template Name: Undersida2*/
?>
<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
      <div id="kontakta">
          <h2><?php the_title();?></h2>
          <?php the_content(); ?>
      </div>
        <?php
    endwhile;
endif;
get_footer();
?>



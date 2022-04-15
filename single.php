<?php get_header();?>         
<main class="flex-main-container ">
    <h1><?php the_field('title');?></h1>
    <img class="single-img" src="<?php echo get_the_post_thumbnail_url();?>" <?php  //the_field('image');?>  alt="bild">    
    <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    echo '<div>';?>
      <div class="aside-single">
            <div class="aside_info">           
                <b>Kategory: </b><br>
                <?php the_category();?>               
                <b>Prisnivå: </b><br>
                <?php  the_field('prisniva');?><br>
                <b>Mat: </b><br>
                <?php  the_field('mat');?><br>
                <b>Webbplats:</b><br>
                <?php the_field('webbplats');?><br>
                <b>Telefon:</b><br>
                <?php the_field('nummer');?><br>
                <b>Meny:</b><br>
                <?php the_field('meny');?><br>
                <b>Adress:</b><br>
                <?php the_field('adress');?><br>
                <?php $the_mapID=get_field('map_nr');
                    $the_map="[mappress mapid='".$the_mapID."']";
                    echo do_shortcode($the_map);
                ?>                
            </div>        
        </div>

        <div class="flex-article-container-single">           
            <div class="article_info-single">
                    <h2><?php the_title();?></h2><br>
                    <?php the_content();?><br>
            </div>
        </div>
    <?php
    echo '</div>';
    endwhile;
endif;
?></main>    
<?php
wp_reset_postdata();
get_footer();

?>

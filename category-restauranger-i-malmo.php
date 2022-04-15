
<?php
get_header();

         
// wp-query
$args= array(
             'category_name'=>'restauranger-i-malmo'
                        );
$query = new WP_Query($args);?>
<main class="flex-main-container ">
    <?php
if($query->have_posts()):
    while ($query->have_posts()): $query->the_post();
    echo '<div>';?>
   
      <div class="aside">
            <div class="aside_info">
                <b>Kategory: </b><br>
                <?php the_category();?><br>          
                <b>Prisnivå: </b><br>
                <?php  the_field('prisniva');?><br>
                <b>Mat: </b><br>
                <?php  the_field('mat');?><br>           
            </div>
        </div>

        <div class="flex-article-container">           
            <img src="<?php echo get_the_post_thumbnail_url();?>" <?php  //the_field('image');?>  alt="bild">    
            <div class="article_info">
                <h2><a class="title" href="<?php the_permalink(); ?>"><?php the_field('title');?></a></h2><hr>                            
                    <b>Mat:</b>
                    <?php the_field('mat');?><br>
                    <b>Webbplats:</b>
                    <?php the_field('webbplats');?><br>
                    <b>Adress:</b>
                    <?php the_field('adress');?><br>
                    <b>Telefon:</b>
                    <?php the_field('nummer');?><br>        
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


          


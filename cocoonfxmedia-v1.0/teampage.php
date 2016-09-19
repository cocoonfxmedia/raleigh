<?php
/*
Template Name: Teampage
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>



		
                    <div class="standardImage"><?php the_post_thumbnail('Full'); ?>
                      <h1 class="standardH1"><?php the_title(); ?></h1></div>
                 
 
            
		




<div class="row">
<div class="small-12 medium-8 medium-push-2 large-push-2 large-8 columns">
                 <?php the_content(); ?>   
	<div class="small-12 medium-4 large-4 columnsb team">
                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/peter.jpg"/>
                <h2>Pete Turton</h2>
                      <h3>Managing Director</h3>
                      <h4>pete@RaleighCoatings.com</h4>
                        
        </div>
   
	<div class="small-12 medium-4 large-4 columnsb team">
             <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/julian.jpg"/>
                      <h2>Julian Watkins</h2>
                      <h3>Business Development Manager</h3>
                      <h4>julian@RaleighCoatings.com</h4>
                     
		</div>
    	<div class="small-12 medium-4 large-4 columnsb team">
                     <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/kevin.jpg"/>
                           <h2>Kevin Marshall</h2>
                      <h3>Technical Manager</h3>
                      <h4>kevin@RaleighCoatings.com</h4>
                          
		</div>
    	<div class="small-12 medium-push-2 medium-4 large-4 Large-push-2 columnsb team">
                
                     <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/nigel.jpg"/>
                           <h2>Nigel Pritchard </h2>
                      <h3>Supply Chain Manager</h3>
                      <h4>nigel@RaleighCoatings.com</h4>
                         
		</div>
	<div class="small-12 medium-pull-2 medium-4 large-4 Large-pull-2 columnsb team">
             <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/martin.jpg"/>
                     <h2>Martin Wood</h2>
                      <h3>Operations Manager</h3>
                      <h4>martin@RaleighCoatings.com</h4>
                          </div>
                    
	
   </div>
</div><!--CLOSEROW-->

<div class="row">
    
   
		
    
    
</div>


<?php endwhile; ?>
<?php get_footer();?>
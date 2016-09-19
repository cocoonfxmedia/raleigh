<?php
/*
Template Name: Standard
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>




		
                    <div class="standardImage ir"><?php the_post_thumbnail('Full'); ?>                       <h1 class="standardH1"><?php the_title(); ?></h1></div>
                    

                 
                  
        




<div class="row">
		<div class="small-12 medium-8 medium-push-2 large-8 large-push-2 columns standard">
		<?php the_content(); ?>
                <?php if(is_page('custom-design')){;?>
                    <div id="CTAction">          	
                        <h2>Custom Constructions</h2>
                    </div>
                    <div id="CTABody">
                       
                         <ul class="bulletsCTA">
                        
                        <li class="orangeText CTA"><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/Raleigh-handout-web-construction.pdf">Download Here</a>
                   <p>Please download our latest leaflet on Custom Constructions</p>
                        </li>
                         </ul>
                        </div>
                   
                    
                <?php } ?>
                    
                <?php if(is_page('product-development')){;?>
                    <div id="CTAction">  
                        <h2>Technical Briefing</h2>
                    </div>
                <div id="CTABody">
               
                  
                    <ul class="bulletsCTA">
                        
                        <li class="orangeText CTA"><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/Raleigh-handout-web-technical.pdf">Download Here</a>
                   <p>Please download our latest leaflet on Technical Briefing</p>
                        </li>
                    </ul>
                </div>
                <?php } ?>
                <?php if(is_page('Perforation')){;?>             
                    <div id="CTAction">  
                        <h2>Perforation</h2>
                    </div>
                    <div id="CTABody">
                       
                      
                        <ul class="bulletsCTA">
                        
                        <li class="orangeText CTA"> <a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/Raleigh-handout-web-perforation.pdf">Download Here</a>
                    <p>Please download our latest leaflet on Perforation</p>
                        </li>
                        </ul>
                    </div>
                <?php } ?>    
		</div>
 
     
</div><!--CLOSEROW-->

</div>
<?php endwhile; ?>
<?php get_footer(); ?>
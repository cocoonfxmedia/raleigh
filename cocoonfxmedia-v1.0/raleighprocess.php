<?php
/*
Template Name: Process
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>




		
                    <div class="standardImage ir"><?php the_post_thumbnail('Full'); ?>                       <h1 class="standardH1"><?php the_title(); ?></h1></div>
                    

                 
                  
        




<div class="row">
		<div class="small-12 medium-10 medium-push-1 large-10 large-push-1 columns standard">
		<?php the_content(); ?>
		</div>

</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>
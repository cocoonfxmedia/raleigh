<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */
?>
 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<div class="wrapperB">
<div class="small-12 medium-6 large-6 columns blog">
    <div class="titleBox">
        <h2><?php the_title(); ?></h2>
</div>
    <div class="textBox">
        <p>  <?php the_date(); ?></p>
<?php the_excerpt(); ?>
</div>
<div class="imageBox">
    
      <a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail(); ?></a>
</div>



</div>

</div>	
</article>


	
    
		
    
    
    
    
    
	

	
</article><!-- #post-## -->
</div>
  </div>

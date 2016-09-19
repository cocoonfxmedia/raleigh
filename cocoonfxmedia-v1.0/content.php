<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */
?>



                    

                 
                  
              
	

  <div class="row">
<div class="small-12 medium-8 large-8 medium-push-2 large-push-2 columns posts">



<h1 class="blogTitle"><?php the_title(); ?></h1>

<div class="standardImage"><?php the_post_thumbnail('Full'); ?></div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
		<?php /* translators: %s: Name of current post */ the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) ); wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	


     <a class="goBack" href="<?php echo esc_url( home_url( '/' ) );?>/blog">Go Back</a>

	
   
</article><!-- #post-## -->
</div>
      
  </div>

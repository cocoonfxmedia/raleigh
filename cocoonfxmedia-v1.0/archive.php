<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>



		<?php if ( have_posts() ) : ?>
 <div class="row">
<div class="small-12 medium-12 large-12 columns cats">
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_archive_title();the_archive_description( '<div class="taxonomy-description">', '</div>' );?></a>
    </h3>


</div>	
                </div>         

			<?php while ( have_posts() ) : the_post(); get_template_part( 'content-cats', get_post_format() );

			
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>




<?php get_footer(); ?>

<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="megaContainer">

<div class="banner gradient standard">
<div class="row">
<div class="small-12 medium-12 large-12 columns">
<h3>LATEST NEWS FROM RALEIGH</h3>

<div class="small-12 medium-6 large-6 columns">
<?php get_search_form(); ?>
</div>
    <div class="small-12 medium-6 large-6 columns">
          
 <?php wp_dropdown_categories(); ?> 
        
      
	<script type="text/javascript">
		<!--
		var dropdown = document.getElementById("cat");
		function onCatChange() {
			if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
			}
		}
		dropdown.onchange = onCatChange;
		-->
	</script>

        
    </div>

</div>
</div>
</div>


<div class="wrapperB">
 
	
            <?php
//for each category, show all posts
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
      if ($posts) {
       
        foreach($posts as $post) {
          setup_postdata($post); ?>
<div class="small-12 medium-12 large-6 columns blog">
 	<a href="<?php the_permalink() ?>"> 
    		<div class="titleBox">
		<h2><?php the_title(); ?></h2>
		</div></a>
    	<a href="<?php the_permalink() ?>"> 
		<div class="textBox">
		<?php the_excerpt(); ?>
		</div></a>
 	<a href="<?php the_permalink() ?>"> 
		<div class="imageBox">  
     		<?php the_post_thumbnail('full'); ?>
		</div></a>
	
</div>
          <?php
        } // foreach($posts
      } // if ($posts
    } // foreach($categories
?>	

</div>	


</div>     
<?php endwhile; ?>
<?php get_footer();?>
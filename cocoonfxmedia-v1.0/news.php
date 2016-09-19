<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="megaContainer">

<div class="banner gradient standard">
<div class="row">
<div class="small-12 medium-12 large-12 columns">
<h1><?php the_title(); ?></h1>
</div>
</div>
</div>


<div class="row">
<div class="small-12 medium-8 large-8 columns">
<?php $my_query = new WP_Query('category_name=news');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>

<div class="blogContainer">
<div class="homeThumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail();?></a></div>
<div class="homeTitle"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>
<div class="homeDate"><?php the_time('d.m.y') ?></div>
<div class="homeExcerpt"><?php the_excerpt(); ?></div>
</div>

<?php endwhile;?>
    

</div>
       <div class="call-to-action-inner small-12 medium-4 large-4 columns"> 
		<div class="boxed1">
           	<?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div></div>
 </div>
</div>  
<?php endwhile; ?>
<?php get_footer();?>

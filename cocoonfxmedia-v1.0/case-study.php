<?php
/*
Template Name: Case Study
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php $my_query = new WP_Query('category_name=case-study');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<h4><?php the_title(); ?></h4>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_time('F jS, Y') ?> - <?php the_title_attribute(); ?></a></li>
<?php the_excerpt(); ?>
<?php endwhile;?>
    
</main><!-- .site-main -->
</div><!-- .content-area -->

<?php endwhile; ?>
<?php get_footer();?>

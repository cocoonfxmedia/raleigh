<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="megaContainer">

<div class="banner gradient standard contban">

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
		<h1><?php the_title(); ?></h1>
		</div>
	</div><!--CLOSEROW-->

</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d77080.65726955306!2d-2.2566077559208257!3d52.86253566781821!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x817e5f6bc9fd0ed4!2sRaleigh+Adhesive+Coatings!5e0!3m2!1sen!2suk!4v1430908464268" width="100%" height="300" frameborder="0" style="pointer-events:none; border:0;"></iframe>
<div class="contentWrapper">

	<div class="row">

		<div class="small-12 medium-6 large-6 large-push-3 medium-push-3 columns">
		<?php the_content(); ?>
		</div>

		<div class="small-12 medium-6 large-6 columns">





		</div>

	</div><!--CLOSEROW-->

</div>


</div>
<?php endwhile; ?>
<?php get_footer(); ?>
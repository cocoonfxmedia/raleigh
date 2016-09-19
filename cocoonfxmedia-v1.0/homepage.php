<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

		
<!--<div class="homeImage"><?php //the_post_thumbnail('Full'); ?>
                    

<h1 class="homepageH1"><span class="redText">Healthcare contract coaters;</span> taking your concept or design from lab bench to full production.</h1>
<p class="homepageL"> </p>
<p class="homepageP">Innovative support where you need it, with the expertise and experience to deliver.</p>

</div>-->

            <div class="headImage ir"><?php the_post_thumbnail('Full'); ?>                       
              
           <h1 class="headH1"><span class="redText">Healthcare contract coaters;</span></br> taking your concept or design from lab bench to full production.</h1>
  
           <p class="headP">Innovative support where you need it, <br/>with the expertise and experience to deliver.</p>
            
            
            </div>
                    


	<div class="row">
		<div class="small-12 medium-8 medium-push-2 large-8 large-push-2 columns">
			<div class="introduction">
				<h2>What we offer</h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div><!--CLOSEROW-->

<div class="wrapperA">
	<div class="row">
	<div class="small-12 medium-4 large-4 columns blackBox">
                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/woundIcon.png"/>
                <div class="boxed">
		<h2 class="orangeText">Wound dressings</h2>
		<p>Providing the wound care market with a coating and conversion service that meets the exacting standards of the industry.</p>
                <a href="<?php echo esc_url( home_url( '/' ) );?>wound-care/"><button class="orange">Read more</button></a>
		</div>
	</div>

	<div class="small-12 medium-4 large-4 columns blackBox">
                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/medicalIcon.png"/>
                <div class="boxed">
		<h2 class="greenText">Medical</h2>
		<p>Over 15 years of experience in coating for the bio diagnostic and medical marketplace; turning concepts into products fit for purpose.</p>
                <a href="<?php echo esc_url( home_url( '/' ) );?>bio-diagnostic/"> <button class="green">Read more</button></a>
		</div>
	</div>

	<div class="small-12 medium-4 large-4 columns blackBox">
                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/coatingIcon.png"/>
                <div class="boxed">
		<h2 class="blueText">Specialist contract coatings</h2>
		<p>A specialist, custom-design contract coating service, providing solutions for the medical and non-medical marketplaces.</p>
                <a href="<?php echo esc_url( home_url( '/' ) );?>specialist-coatings/"> <button class="blue">Read more</button></a>
                </div>
	</div>

	</div><!--CLOSEROW-->
</div>


<div class="row homeTest">
	<div class="small-12 medium-12 large-12 columns quoteland">
		<h2>Our customers trust us to provide an excellent service</h2>
		<h3>But don’t just take our word for it</h3>
        </div>
            
	<div class="small-12 medium-4 large-4 columns">
                <p class="quote">"We have worked with Raleigh over the last 18 years. They have supported our customer and volume growth over this period due to their excellent adhesive knowledge and focus on development and quality."</p>
                <p class="bname">Medical Device Specialist</p>
	</div>

	<div class="small-12 medium-4 large-4 columns">
                <p class="quote">"Raleigh’s knowledge and expertise in silicone gel coating, their partnership approach and ability to carry out development trials and full scale manufacturing, ensures delivery of the product within the required timeframe and to a quality standard compliant with medical device markets for wound management devices."</p>
                <p class="bname">Wound Care Products Manufacturer</p>
	</div>

	<div class="small-12 medium-4 large-4 columns">
                <p class="quote">"Raleigh played an extremely supportive role in our design process; their flexible nature meant that they were able to adapt their coating procedures to meet our end requirements."</p>
                <p class="bname">Printing Industry Supply Specialists</p>

	</div>

</div><!--CLOSEROW-->









<div class="wrapperB">
 
		
<?php $my_query = new WP_Query('category_name=blog&posts_per_page=4');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>


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


<?php endwhile; wp_reset_postdata(); ?>
</div>		

</div>



<?php endwhile; ?>
<?php get_footer(); ?> 
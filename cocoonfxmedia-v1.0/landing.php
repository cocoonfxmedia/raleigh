<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>




		
                    <div class="standardImage ir"><?php the_post_thumbnail('Full'); ?>
            <h1 class="landingH1">Solve your Coating Challenge</h1>
            <p class="landingP">Providing an innovative, concept-led coating service to meet all your woundcare and bio diagnostic needs</p>
                    </div>

<div class="row">

		<div class="small-12 medium-6 large-6 columns standard" id="landingBullets">                  
			<ul class="bullets">
				<li class="orangeText">Ears to hear<p>You’ve got an idea, we want to listen. Let us help you design a bespoke construction and tailor a plan of action to your needs.</p></li>
				<li class="orangeText">It’s in your hands<p>You want full control of the manufacture of your product, right? We agree! That’s why you get to make all the decisions at each stage; from raw materials, to manufacturing specifications.</p></li>
				<li class="orangeText">Help along the way<p>You want a speedy response? Innovation? Customer support that cares? We’re on it.</p></li>
				<li class="orangeText">Let’s get the job done<p>Why use us? With over 15yrs of medical coating experience, we know a thing or two. Our company is made up of an energetic team of experimenters, perfectionists and time keepers, dedicated to giving you the product that answers your coating challenge.</p>
</li>
			</ul>
		</div>


		<div class="small-12 medium-6 large-6 columns">
		<div id="fillAction">  
                 <H3>FILL OUT THE FORM AND WE'LL BE IN TOUCH</H3>
                </div></div>

		<div class="small-12 medium-6 large-6 columns">
		<div id="landingorm">                 
		<?php the_content(); ?>
		</div></div>

</div><!--CLOSEROW-->                    


		<div class="small-12 medium-12 large-12 columns standard" id="altAction">  
                 <H3>Or give us a call right now on: +44(0) 1785 850 357</H3>
                </div>





<div class="row">
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





<div class="wrapperLand">
	<div class="row">
	<div class="small-12 medium-12 large-12 columns">
            <div class="wrapperLead">It all starts with your idea</div>
	</div>
	<div class="small-12 medium-4 large-4 columns blackLand">
                <!-- <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/woundIcon.png"/> -->
                <div class="boxedLand">
		<?php the_field('concept'); ?>
		</div>
	</div>

	<div class="small-12 medium-4 large-4 columns blackLand">
                <!-- <<img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/medicalIcon.png"/> -->
                <div class="boxedLand">
		<?php the_field('lab_bench'); ?>
		</div>
	</div>

	<div class="small-12 medium-4 large-4 columns blackLand">
                <!-- <<img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/coatingIcon.png"/> -->
                <div class="boxedLand">
		<?php the_field('full_protection'); ?>
                </div>
	</div>

	</div><!--CLOSEROW-->
</div>
<div class="closingCopy">
	<div class="row">
		<h2>So you have an idea, but you don’t know where to start? <a href="<?php echo esc_url( home_url( '/' ) );?>/contact-us/">Let’s talk!</a></h2>
	</div>
</div>





</div>
<?php endwhile; ?>
<?php get_footer(); ?>
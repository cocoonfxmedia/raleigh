<?php?>
    <?php if (!is_page('contact-us')) { ?>
<footer id="footer" class="footer" role="contentinfo">

	<div class="wrapperC">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
                            

    <h1>Want to find out more?</h1><a href="<?php echo esc_url( home_url( '/' ) );?>/contact-us/"><button class="white">Talk to us today</button></a> <a href="http://www.raleighcoatings.com/wp-content/uploads/Raleigh_Catalogue_updated.pdf" target="_blank"><button class="white">View our catalogue</button></a>
                        
			</div>
		</div>
	</div>

</footer>
<?php } ?>



	<div class="row">
		<div class="small-12 medium-6 large-3 columns footDetails">
				<h4>OUR CONTACTS</h4>
		</div>
		<div class="small-12 medium-6 large-3 columns footDetails">
				<p><span>Julian Watkins</span> | Business Development Manager<br/>
				<p>Raleigh Hall Industrial Estate, Eccleshall, <br/>
				Staffordshire, ST21 6JL, England</p>
		</div>
		<div class="small-12 medium-6 large-3 columns footDetails">
				<p><span>+44 (0) 1785 850 357<br/>
				+44 (0) 7738 217984<br/><a href="mailto:sales@raleighcoatings.com">sales@raleighcoatings.com</span></p></a>
		</div>
		<div class="small-12 medium-6 large-3 columns footDetails">
<a class="socialFoot" href="https://plus.google.com/109729241815828276166/posts"/><img src="/wp-content/uploads/gplus.png"/></a>
<a class="socialFoot" href="https://www.linkedin.com/company/raleigh-coatings-limited"/><img src="/wp-content/uploads/linkedin.png"/></a>		 		<?php get_search_form(); ?>
		</div>
	</div>




<footer id="colophon" class="colophon-footer" role="contentinfo">
	<div class="row">
	<div class="small-12 medium-12 large-12 columns">
         	<p><a href="https://www.cocoonfxmedia.co.uk/web-design/lichfield">Web Development by Cocoonfxmedia ltd</a></p>
	</div>
	</div>

</footer>

<!-- menu script -->
<script>
$(document).ready(function(){
$( 'a.menuBtn').on( 'click' , function(){
$( 'nav.mainnav ul' ).toggle( 'slow' );
return false;
});
});
</script>

<?php wp_footer(); ?>



</body>
</html>
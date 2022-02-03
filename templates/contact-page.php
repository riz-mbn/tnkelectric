<?php 
/**
 * Template Name: Contact Us Page template
 */
get_header() ?>
<div class="page-content">
	<?php
		while ( have_posts() ) : the_post();
			the_content();

		endwhile; // End of the loop.
	?>	
</div>
<footer id="footer" class="footer footer_contact">
    <div class="grid-container">
        <div class="copyright">&copy; T&KElectric. 2021.</div>
        <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</div>
    </div>
</footer>

</div> 
<?php wp_footer() ?>

</body>
</html>
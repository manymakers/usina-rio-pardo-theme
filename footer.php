<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>
<script> 
	jQuery('.elementor-pagination').find('a').each(function() { 
		var url=jQuery(this).attr('href'); 
		var pieces = url.split("/"); 
		if(pieces[4]) {
			var newhrf = window.location.origin+'/blog/page/'+pieces[4];
		} else {
			var newhrf = window.location.origin+'/blog';
		}
		jQuery(this).attr('href',newhrf); 
	});
</script>

</body>
</html>

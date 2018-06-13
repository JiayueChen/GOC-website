<?php 
/*

Template Name: Test Page

*/

get_header();
?>

<h2 class="text-primary">General Info</h2>


<?php 
if (have_posts()) :
	while (have_posts()) :
		the_post();
		the_content();
	endwhile;
endif;
get_footer();
?>
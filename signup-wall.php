<?php
/**
 * Template Name: Sign Up Wall
 */
?>


<?php while (have_posts()) : the_post(); ?>

<style>
	.bigimage{
		background-image: url('<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	echo $thumb_url[0];
?>');
	}
</style>

<div class="bigimage large-5 columns">&nbsp;</div>
<div class="introduction large-5 large-pull-2 columns">

	<div class="introtext">
	<div class="logo"><a href="/category/blog/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M73.4,28.4c-0.7,0-1.5,0-2.3,0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.3,0-0.4,0.1c-9.5,1.4-16.9,9.1-24.1,16.5  c-6,6.2-12.2,12.6-18.2,13.6c-0.6,0.1-1.1,0.1-1.5,0.1c-5,0-9-4-9-9s4-9,9-9c0.3,0,0.6,0,0.9,0.1c2.3,0.3,4.9,1.6,7.9,4  c0.7,0.6,1.9,1,2.8,1c3.2,0,6.1-3.5,6.7-5.3c0.7-1.9,0.1-4-1.4-5.2c-4.6-3.7-9-5.9-13.3-6.7c-0.2,0-0.4-0.1-0.7-0.1  c-1-0.1-2-0.2-2.9-0.2C14.7,28.4,5,38.1,5,50s9.7,21.6,21.6,21.6c0.6,0,1.2,0,1.7-0.1c11-0.8,19.6-9.7,27.1-17.5  c5.9-6.2,11.6-12,16.8-12.8C72.6,41,73,41,73.4,41c5,0,9,4,9,9s-4,9-9,9c-0.4,0-0.8,0-1.4-0.1c-0.3-0.1-0.6-0.1-1-0.2  c-2-0.5-4-1.5-6.3-3.2c-0.8-0.6-1.7-0.9-2.7-0.9c-3.3,0-6.1,3.5-6.7,5.5c-0.7,2-0.1,4,1.5,5.2c5.6,4.2,11.1,6.3,16.6,6.3  C85.3,71.5,95,61.8,95,50S85.3,28.4,73.4,28.4z"/></a></div>
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; ?>

<?php
/**
 * This page is the 404 page.
 *
 * @package healthlinx
 * @subpackage healthlinx
 * @since healthlinx 0.1
 */
 ?>
<?php ini_get("head"); ?>
<?php get_header(); ?>
<section class="allContent">
	<h1>
		<?php echo get_the_title( $ID ); ?>
	</h1>
	<?php 
		$my_id = 110;
		$post_id = get_post($my_id);
		$content = $post_id -> post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		include ("/includes/toCategory.php");
	?>
</section>
<?php include("footer.php"); ?>
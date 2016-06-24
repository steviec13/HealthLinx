<?php
/**
 * This page is the BLOG page. The index page is broken down into header, content, and footer. This is the BLOG PAGE CONTENT.
 *
 * @package healthlinx
 * @subpackage healthlinx
 * @since healthlinx 0.1
 */
 ?>
 <div class="blogContent">
 	<!-- Pulls content from WP -->
    <?php
		//if(is_page(227)) {
			//$my_id = 227;
			//$post_id = get_post($my_id);
			///$content = $post_id -> post_content;
			//$content = apply_filters('the_content', $content);
			//$content = str_replace(']]>', ']]>', $content);
			//echo $content;
		//}
	?>
    <!-- Loop for posts -->
 		<?php query_posts(); ?>
		<?php while (have_posts()) : the_post(); ?>
            <div class="thirdWidth resourcesPost">
                <div class="resourcesImgWrapper">
                <img src="https://www.healthlinx.com/wp-content/themes/healthlinx/images/briefCase.png" />
                </div><div class="resourcesTextWrapper">
                    <div class="resourcesTitle">
                        <a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', FALSE), 0, 20) . '...'; ?></a>
                    </div>
                    <div class="resourcesAuthor resourcesPost">
                        <?php the_author(); ?>
                    </div>
                    <div class="resourcesDate resourcesPost">
                        <?php the_time("m/d/Y"); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
 </div>
 <div class="sidebar">
 	<?php //include "/includes/sidebar.php"; ?>
 </div>
		
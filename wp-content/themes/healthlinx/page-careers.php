<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<section class="widthRestriction">
    <div class="blogContent careers">
        <?php if(is_page(220)) {
			$my_id = 220;
			$post_id = get_post($my_id);
			$content = $post_id -> post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
		}
		?>
        <?php
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			
			// the query
			$the_query = new WP_Query( 'cat=38&paged=' . $paged ); 
		?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?><div class="halfWidthBlogPost halfWidth jobPost">
                    <div class="blogPostStyle">
                        <div class="blogPageIndividualText">
                            <h3 class="midGray">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <h6 class="postDate">
                                <?php the_time("m/d/Y"); 
                                ?>
                            </h6>
                            <h6 class="excerpt">
                                <?php echo get_excerpt(125);?>
                            </h6>
                        </div>
                    </div>
            </div><?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div><?php include "includes/sidebarCareers.php"; ?>
</section>
<?php get_footer() ; ?>
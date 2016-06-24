<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<section class="widthRestriction">
    <div class="blogContent">
    	<h3><button class="sidebarMobileTab">Newsletter Signup</button></h3>
        <img src="https://www.healthlinx.com/wp-content/themes/healthlinx/images/glassesPenPaperBG.jpg" />
        <h1 class="whiteTextOrangeBG">Our Blog</h1>
        <?php
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			
			// the query; ignores items from Leadership team, LE team, NE team, Client Solutions team, and Support team
			$the_query = new WP_Query( array( 'category__in' => array(1), 'category__not_in' => array(9,38,48,49,50,51,52), 'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC' , 'paged' => $paged ));
			//'cat=1&paged=' . $paged 
		?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?><div class="halfWidthBlogPost halfWidth">
                <a href="<?php the_permalink(); ?>">
                    <div class="blogPostStyle">
                        <div class="postThumbnailWrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="blogPageIndividualText">
                            <h3 class="">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <h5 class="postAuthor">
                                <?php the_author();
                                ?>
                            </h5>
                            <h6 class="postDate">
                                <?php the_time("m/d/Y"); 
                                ?>
                            </h6>
                            <h6 class="excerpt">
                                <?php echo get_excerpt(125);
                                ?>
                            </h6>
                        </div>
                    </div>
                </a>
            </div><?php endwhile; ?>
        <div class="blogPageButton">
            <?php echo get_previous_posts_link('Last page', 6); ?>
        </div><div class="blogPageButton">
            <?php echo get_next_posts_link('Next page', 6); ?>
        </div> 
        <?php wp_reset_query(); ?>
    </div><?php include "includes/sidebar.php"; ?>
</section>
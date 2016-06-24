<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<section class="widthRestriction">
    <div class="blogContent">
        <img src="https://www.healthlinx.com/wp-content/themes/healthlinx/images/glassesPenPaperBG.jpg" />
        <h1 class="whiteTextOrangeBG"><?php single_cat_title(); ?></h1>
        <?php 
			$category_ID = get_cat_id( single_cat_title("",false) );
			query_posts( 
				array( 'category__and' => array($category_ID), 'posts_per_page' => 1000, 'orderby' => 'date', 'order' => 'DESC' ) 
			); 
		?>
        <?php while (have_posts()) : the_post(); ?><div class="halfWidthBlogPost halfWidth">
            <div class="blogPostStyle">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
                <div class="blogPageIndividualText">
                    <h3 class="">
						<a href="<?php the_permalink(); ?>"> 
                            <?php the_title(); ?>
						</a>
                    </h3>
                    <h5 class="postAuthor">
						<?php the_author();  ?>
                    </h5>
                    <h6 class="postDate">
                        <?php the_time("m/d/Y"); ?>
                    </h6>
					<h6 class="excerpt">
						<?php echo get_excerpt(125);
						?>
					</h6>
                </div>
            </div>
        </div><?php endwhile; ?>
        </div> 
    </div><?php include "includes/sidebar.php"; ?>
</section>
<?php get_footer() ; ?>
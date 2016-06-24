<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<section class="widthRestriction">
    <div class="blogContent">
        <?php the_post_thumbnail(); ?>
        <h1 class="whiteTextOrangeBG whiteTextGrayBG"><?php the_title(); ?></h1>
        <div class="quarterWidth quarterWidthSinglePost">
            <?php if ( !in_category('38') ): ?>
                <div class="singlePostInfo">
                    <span class="singlePostAuthorTime">
                        <span class="singlePostAuthor">
                            <?php 
                                if (have_posts()) : while (have_posts()) : the_post();
                                    the_author();
                                endwhile; endif;
                            ?>
                        </span>
                        <span class="singlePostTime">
                            <?php the_time("m/d/Y"); ?>
                        </span>
                    </span>
                    <h5>Post Categories:</h5>
                    <?php exclude_post_categories('1') ?>
                </div>
                <div class="socialIconDiv">
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
                        <img class="socialMediaIcon" src="https:////www.healthlinx.com/wp-content/themes/healthlinx/images/linkedin-icon.png" />
                    </a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                        <img class="socialMediaIcon" src="http://www.healthlinx.com/wp-content/themes/healthlinx/images/facebook-icon.png" />
                    </a>
                    <a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">
                        <img class="socialMediaIcon" src="https:////www.healthlinx.com/wp-content/themes/healthlinx/images/twitter-icon.png" />
                    </a>
                </div>
			<?php elseif ( in_category('38') ): ?>
                <div class="singlePostInfo jobPostInfo">
                    <?php echo do_shortcode('[contentblock id=3]') ; ?>
                </div>
            <?php endif; ?>
            </div><div class="threeQuartersWidth threeQuartersWidthSinglePost">
                <div class="">
                    <div class="blogPageIndividualText">
                        <h3 class="">
                            <a href="<?php the_permalink(); ?>">
                            </a>
                        </h3>
                        <?php 
                            if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                            endwhile; endif;
                        ?>
                    </div>
                </div>
        </div>
        <!-- Any page besides: 38 - JOB POSTINGS, 48-52 - HLX Teams  -->
        <?php 
            // Post ID
                $postID = get_the_ID();
            
            // If Statements for injecting category ID into query
                // Case Studies
                    if ( in_category('11')) {$catID = 11;}
                // Leadership Excellence
                    if ( in_category('13')) {$catID = 13;}
                // Magnet
                    if ( in_category('14')) {$catID = 14;}
                // Nursing Excellence
                    if ( in_category('6')) {$catID = 6;}
                // Pathway to Excellence
                    if ( in_category('15')) {$catID = 15;}
                // Webinars
                    if ( in_category('12')) {$catID = 12;}
                // Whitepapers
                    if ( in_category('10')) {$catID = 10;}
                
                // the query
                $the_query = new WP_Query( array( 'category__in' => array($catID), 'post__not_in' => array($postID), 'category__not_in' => array(9,38,48,49,50,51,52,63), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC'));
				
			?>
            <!-- Hide 'Related Posts' if displaying a HealthLinx employee -->
            <?php if (!in_category(array(48,49,50,51,52))) : ?>
           		<h2 class="midGray centerText" style="margin: 25px 0 0 0;">Related Posts</h2>
            <?php endif; ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?><div class="halfWidthBlogPost halfWidth">
                <a href="<?php the_permalink(); ?>">
                    <div class="blogPostStyle">
                        <?php the_post_thumbnail(); ?>
                        <div class="blogPageIndividualText">
                            <h3 class="">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <h5 class="postAuthor">
                                <?php the_author(); ?>
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
                </a>
            </div><?php endwhile; //endforeach; ?>
    </div><?php include "includes/sidebar.php"; ?>
</section>
<?php get_footer() ; ?>
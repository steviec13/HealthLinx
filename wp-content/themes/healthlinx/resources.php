<?php if(is_page(25)) {
	
	// Unused post content; designs 
	
	//$my_id = 25;
	//$post_id = get_post($my_id);
	//$content = $post_id -> post_content;
	//$content = apply_filters('the_content', $content);
	//$content = str_replace(']]>', ']]>', $content);
	//echo $content;
	}
?>
<div class="outerContent">
	<div class="widthRestriction">
        <div class="quarterWidth resourcesQuarterWidth">
            <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01da/1/-/-/-/-/Briefcase%20Icon.png" /><h4 class="midGray">Case Studies</h4>
        </div><div class="threeQuartersWidth">
        	<!-- Loop: Case Studies -->
         		<?php query_posts( array( 'category__and' => array(11), 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<?php while (have_posts()) : the_post(); ?>
                    <div class="thirdWidth resourcesPost">
                    	<div class="resourcesImgWrapper">
                		<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01da/1/-/-/-/-/Briefcase%20Icon.png" />
                        </div><div class="resourcesTextWrapper">
                            <div class="resourcesTitle">
                                <a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', FALSE), 0, 52) . '...'; ?></a>
                            </div>
                            <div class="resourcesAuthor">
                                <?php the_author(); ?>
                            </div>
                            <div class="resourcesDate">
                                <?php the_time("m/d/Y"); ?>
                            </div>
                            <div class="excerpt">
                                <?php echo get_excerpt(75);
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <div class="thirdWidth">
                    <a href="/category/case-studies/" class="viewMoreButton viewMoreButtonOrange">View More</a>
                </div>
        </div>
    </div>
</div>
<div class="outerContent orangeBG">
	<div class="widthRestriction">
        <div class="quarterWidth resourcesQuarterWidth">
            <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01dc/1/-/-/-/-/White%20Papers%20Icon.png" /><h4 class="white">White Papers</h4>
        </div><div class="threeQuartersWidth">
        	<!-- Loop: White Papers -->
         		<?php query_posts( array( 'category__and' => array(10), 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<?php while (have_posts()) : the_post(); ?>
                    <div class="thirdWidth resourcesPost">
                    	<div class="resourcesImgWrapper">
                		<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01dc/1/-/-/-/-/White%20Papers%20Icon.png" />
                        </div><div class="resourcesTextWrapper">
                            <div class="resourcesTitle">
                                <a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', FALSE), 0, 52) . '...'; ?></a>
                            </div>
                            <div class="resourcesAuthor">
                                <?php the_author(); ?>
                            </div>
                            <div class="resourcesDate">
                                <?php the_time("m/d/Y"); ?>
                            </div>
                            <div class="excerpt">
                                <?php echo get_excerpt(75);
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <div class="thirdWidth">
                    <a href="/category/whitepapers/" class="viewMoreButton viewMoreButtonWhite">View More</a>
                </div>
          </div>
    </div>
</div>
<div class="outerContent">
	<div class="widthRestriction">
        <div class="quarterWidth resourcesQuarterWidth">
            <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01db/1/-/-/-/-/Camera%20Icon.png" /><h4 class="midGray">Webinars</h4>
        </div><div class="threeQuartersWidth">
        	<!-- Loop: Webinars -->
         		<?php query_posts( array( 'category__and' => array(12), 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<?php while (have_posts()) : the_post(); ?>
                    <div class="thirdWidth resourcesPost">
                    	<div class="resourcesImgWrapper">
                		<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01db/1/-/-/-/-/Camera%20Icon.png" />
                        </div><div class="resourcesTextWrapper">
                            <div class="resourcesTitle">
                                <a href="<?php the_permalink(); ?>"><?php echo substr(the_title('', '', FALSE), 0, 52) . '...'; ?></a>
                            </div>
                            <div class="resourcesAuthor">
                                <?php the_author(); ?>
                            </div>
                            <div class="resourcesDate">
                                <?php the_time("m/d/Y"); ?>
                            </div>
                            <div class="excerpt">
                                <?php echo get_excerpt(75);
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <div class="thirdWidth">
                    <a href="/category/webinars/" class="viewMoreButton viewMoreButtonOrange">View More</a>
                </div>
          </div>
    </div>
</div>
<div class="resourcesContactWrapper">
	<div class="widthRestriction">
        <div class="halfWidth">
            <h3 class="darkGray">More to Read</h3>
            <p>Be sure to check-out our Blog for regular updates and new content as well</p>
            <a href="/healthlinx-blog/" class="viewMoreButtonOrange viewMoreButton">View Blog</a>
        </div><div class="halfWidth">
            <h3 class="darkGray">Contact Us</h3>
            <div class="contactForm">
                <?php echo do_shortcode('[contentblock id=1]') ; ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
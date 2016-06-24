<?php
/**
 * This page is the MAIN CONTENT section of the index page. The index page is broken down into header, content, and footer. This is the HOMEPAGE CONTENT.
 *
 * @package healthlinx
 * @subpackage healthlinx
 * @since healthlinx 0.1
 */
 ?>
		<section id="mainContent">
			<!-- Our Services -->
			<div class="outerServices">
				<h1 class="orange">Our Services</h1>
                <div class="arrow-down"></div>
                <div class="innerServices">
                    <div class="LEservices">
                    	<div class="LEhomeContent">
                            <?php $the_query = new WP_Query( 'page_id=964' ); while ( $the_query->have_posts() ) :
									$the_query->the_post();
									the_content();
								endwhile;
								wp_reset_postdata();
							?>
                        </div>
                        <div class="clear"></div>
                    </div><div class="NEservices">
                    	<!-- Divs are intentionally touching to avoid display: inline-block line break for the second div -->
                    	<div class="NEhomeContent">
                            <?php $the_query = new WP_Query( 'page_id=967' ); while ( $the_query->have_posts() ) :
									$the_query->the_post();
									the_content();
								endwhile;
								wp_reset_postdata();
							?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="buttons LEbutton">
                    <div class="LEhomeContent">
                        <a href="/leadership-excellence/">Let Us Prove It</a>
                    </div>
                </div><div class="buttons NEbutton">
                    <div class="NEhomeContent">
                        <a href="/nursing-excellence">Let Us Prove It</a>
                    </div>
                </div>
			</div>
			<!-- Our Services -->
            
			<!-- Testimonials -->
			<div class="outerTestimonials widthRestriction">
				<h1 class="orange">Testimonials</h1>
				<div class="outerThirdWidth">
                    <?php query_posts( array( 'category__and' => array(9), 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
					<?php while (have_posts()) : the_post(); ?>
                        <div class="thirdWidth testimonial">
                            <?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>
                        </div>
					<?php endwhile; ?>
                    <?php wp_reset_query(); ?>
				</div>
			</div>
			<!-- Testimonials -->
            
			<!-- Our Blog -->
			<div class="outerBlog widthRestriction">
				<div class="outerThirdWidth">
                    <h1 class="">Our Blog</h1>
                	<!-- Loop for posting the three newest posts from the 'Blog' category -->
                    <?php query_posts( array( 'category__and' => array(1), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
					<?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="thirdWidth blogPost">
                                <?php the_post_thumbnail(); ?>
                                <div class="blogText">
                                    <h3 class="blogTitle">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                            <!-- Limit title length -->
											<?php //echo substr(the_title('', '', FALSE), 0, 50).'...'; ?>
                                        </a>
                                    </h3>
                                    <h5 class="postAuthor">
                                        <?php the_author(); ?>
                                    </h5>
                                    <h6 class="postDate">
                                        <?php the_time("m/d/Y"); ?>
                                    </h6>
                                    <h6 class="excerpt">
                            			<?php echo get_excerpt(125);?>
                                    </h6>
                                </div>
                            </div>
                        </a>
					<?php endwhile; ?>
                    <?php wp_reset_query(); ?>
					<a class="readMore" href="/healthlinx-blog">Read More</a>
                    <div class="clear"></div>
                </div>
			</div>
			<!-- Our Blog -->
            
			<!-- Logos -->
			<div class="outerLogos widthRestriction">
				<h1 class="orange">Featured Clients</h1>
                <div id="clients">
                    <div class="clients-wrap">
                          <ul id="clients-list" class="clearfix">
                                <!-- Baylor Scott & White Health, North Texas -->
                                <li>
                                	<a href="http://www.baylorscottandwhite.com/Pages/default.aspx" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01ca/1/-/-/-/-/Image%201_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- MultiCare: Better Connected -->
                                <li>
                                	<a href="https://www.multicare.org/" target="_blank">
                                   		<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01cb/1/-/-/-/-/Image%202_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Phoebe Putney -->
                                <li>
                                	<a href="https://www.phoebehealth.com/default.aspx" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01cc/1/-/-/-/-/Image%203_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Mary Rutan Hospital -->
                                <li>
                                	<a href="http://www.maryrutan.org/" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01cd/1/-/-/-/-/Image%204_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Bon Secours Charity Health System -->
                                <li>
                                	<a href="http://charity.bonsecours.com/" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01ce/1/-/-/-/-/Image%205_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Christus St. Frances Cabrini Hospital -->
                                <li>
                                	<a href="http://christusstfrancescabrini.org/" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01cf/1/-/-/-/-/Image%206_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Community Medical Centers -->
                                <li>
                                	<a href="https://www.communitymedical.org/" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01d0/1/-/-/-/-/Image%207_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                                <!-- Sweedish -->
                                <li>
                                	<a href="http://www.swedish.org/" target="_blank">
                                    	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01d1/1/-/-/-/-/Image%208_%20Logo%20Slider.jpg" alt="HealthLinx Logo Slider" />
                                    </a>
                                </li>
                          </ul>
                    </div>
                </div>
			</div>
		</section>
<div class="lePageServices">
    <h2 class="orange">Interested in learning more about <?php the_title(); ?> services?</h2>
    <h4 class="midGray">Check out the following resources:</h4>
    <div class="quarterWidth">
        <h3 class="midGray">Blog</h3>
        <?php query_posts( array( 'category__and' => array(1,13), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>		
        <div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="individualPost">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01dd/1/-/-/-/-/Blog%20Icon.png" />
                    <div class="lePageBlogPostText">
                        <h3>
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
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a class="readMore" href="/healthlinx-blog">View More</a>
    </div><div class="quarterWidth">
        <h3 class="midGray">Case Studies</h3>
        <?php query_posts( array( 'category__and' => array(11,13), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>		
        <div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="individualPost">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01da/1/-/-/-/-/Briefcase%20Icon.png" />
                    <div class="lePageBlogPostText">
                        <h3>
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
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a class="readMore" href="/category/case-studies">View More</a>
    </div><div class="quarterWidth">
        <h3 class="midGray">Webinars</h3>
        <?php query_posts( array( 'category__and' => array(12,13), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>		
        <div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="individualPost">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01da/1/-/-/-/-/Briefcase%20Icon.png" />
                    <div class="lePageBlogPostText">
                        <h3>
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
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a class="readMore" href="/category/webinars">View More</a>
    </div><div class="quarterWidth">
        <h3 class="midGray">White Papers</h3>
        <?php query_posts( array( 'category__and' => array(10,13), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>		
        <div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="individualPost">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01da/1/-/-/-/-/Briefcase%20Icon.png" />
                    <div class="lePageBlogPostText">
                        <h3>
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
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a class="readMore" href="/category/whitepapers">View More</a>
</div>
</div>
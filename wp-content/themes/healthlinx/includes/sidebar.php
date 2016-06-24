<div class="sidebarWrapper">
	<!-- Search bar/form -->
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Enter search', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"  />
        </label>
        <input type="image" class="search-submit" src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-022c/1/-/-/-/-/Search%20Icon.png" />
    </form>
	<?php $the_query = new WP_Query( 'page_id=1003' ); while ( $the_query->have_posts() ) : $the_query->the_post();
            the_content();
        endwhile;
        wp_reset_postdata();
    ?>
    <?php echo do_shortcode('[contentblock id=2]') ; ?>
    <div class="sidebarDivider"></div>
    <!-- RSS Feed -->
        <h3>RSS Feed</h3>
        <ul class="feeds">
        	<li>
            	<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-023f/1/-/-/-/-/HealthLinx%20RSS%20Feed%20Icon.png" />
            </li><li>
                <a href="<?php bloginfo('rss_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>" target="_blank">
                    <?php _e('<abbr title="HealthLinx RSS">Click to subscribe</abbr>'); ?>
                </a>
            </li>
        </ul>
    <!-- RSS Feed -->
    <div class="sidebarDivider"></div>
    <h3>Categories</h3>
    <!-- Hides title 'Categories' outside of li -->
    <!-- 9: Testimonial, 38: Jobs, 48-52: team categories, 63: LE Leader-Facing -->
    <?php wp_list_categories( array( 'exclude' => array(9,38,48,49,50,51,52,63), 'title_li' => '' ) ); ?>
    <div class="sidebarDivider"></div>
    <a class="twitter-timeline" data-height="600" href="https://twitter.com/HealthLinx_Inc">Tweets by HealthLinx</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <button class="hideSidebar">Hide Sidebar</button>
</div>
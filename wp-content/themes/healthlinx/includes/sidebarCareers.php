<div class="sidebarWrapper sidebarContactWrapper">
	<?php $the_query = new WP_Query( 'page_id=992' ); while ( $the_query->have_posts() ) : $the_query->the_post();
            the_content();
        endwhile;
        wp_reset_postdata();
    ?>
    <?php echo do_shortcode('[contentblock id=3]') ; ?>
    <button class="hideSidebar">Hide Sidebar</button>
</div>
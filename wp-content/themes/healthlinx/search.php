<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<section class="widthRestriction">
	<div class="searchResultsWrapper">
		<?php if ( have_posts() ) : ?>
        	<h1 class="page-title"><?php printf( __( 'Search results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
        	<!-- HTML content appropriate for results found goes here -->
        	<?php while ( have_posts() ) : the_post();
				get_template_part( 'content', 'search' ); ?><a href="<?php the_permalink(); ?>" class="quarterWidth quarterWidthSearch">
					<?php the_title();  ?>
                </a><?php endwhile; ?>
        	<?php else : ?>
        	<!-- HTML content appropriate for results not found goes here -->
            	<?php get_template_part( 'no-results', 'search' ); ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
	</div><?php include "includes/sidebar.php"; ?>
</section>
<?php get_footer() ; ?>
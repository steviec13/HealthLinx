<?php
/**
* Custom theme for HealthLinx 
* Created by Steven Castillo
**/
?>
<?php ini_get("head"); ?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php if ( !is_page(25) ) : ?>
    <section class="allContent">
        <?php	
            $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $url = $_SERVER["REQUEST_URI"];
            $registrationConfirmation = strpos($url, "registrationConfirmation"); ?>
        <?php
            // About
                if(is_page(21)) {
                    $my_id = 21;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                }
            // Blog
                if(is_page(996)) {
                    $my_id = 996;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    include "page-blog.php";
                }
            // Category
                else if(is_page(700)) {
                    $my_id = 700;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    include "/includes/toCategory.php";
                }
            // Careers
                else if(is_page(220)) {
                    $my_id = 220;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                }
            // Client facing
                else if(is_page(77)) {
                    $my_id = 77;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                }
            // Job seekers
                else if(is_page(1850)) {
                    $my_id = 1850;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
					include $_SERVER['DOCUMENT_ROOT']."/includes/login-form.php";
					echo '<div class="lePageServices widthRestriction">'."\n";
						include "/includes/LEservicesOffered.php";
					echo '</div>'."\n";
                }
            // Leader facing
                else if(is_page(75)) {
                    $my_id = 75;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                }
            // Leadership excellence
                else if(is_page(17)) {
                    $my_id = 17;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
					echo $content;
					echo '<div class="widthRestriction">'."\n";
                    	include "/includes/LEservicesOffered.php";
					echo '</div>'."\n";
                }
            // Magnet
                else if(is_page(67)) {
                    $my_id = 67;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
					echo '<div class="lePageServices widthRestriction">'."\n";
                    	include "/includes/NEservicesOffered.php";
					echo '</div>'."\n";
                }
            // Nursing excellence
                else if(is_page(19)) {
                    $my_id = 19;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
					echo '<div class="lePageServices widthRestriction">'."\n";
                    	include "/includes/NEservicesOffered.php";
					echo '</div>'."\n";
                }
            // Open Positions
                else if(is_page(192)) {
                    $my_id = 192;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    //include "includes/jobPostings.php" ;
                }
            // Our Team
                else if(is_page(1041)) {
                    $my_id = 1041;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    include "includes/ourTeam.php" ;
                }
            // Pathway to Excellence
                else if(is_page(69)) {
                    $my_id = 69;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
					echo '<div class="lePageServices widthRestriction">'."\n";
                    	include "/includes/P2EservicesOffered.php";
					echo '</div>'."\n";
                }
            // Register
                else if(is_page(202)) {
                    $my_id = 202;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    include("register.php");
                }
            // Registration confirmation
                else if($registrationConfirmation == true) {
                    $my_id = 204;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                }
			// 404 within WordPress
                else if (is_page(110)) {
                    $my_id = 110;
                    $post_id = get_post($my_id);
                    $content = $post_id -> post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
					echo '<div class="widthRestriction">' ;
                   		wp_list_pages('exclude=8,75,77,110,192,198,202,204,647,700&title_li=');
					echo '</div>' ;
                }
        ?>
    </section>
    
<?php elseif ( is_page(25) ) : ?>
    <section>
        <?php
            // Resources
            include("resources.php");
        ?>
    </section>
<?php endif; ?>
<?php include("footer.php"); ?>
<?php
/**
 * This page is the FOOTER section of the index page. The index page is broken down into header, content, and footer.
 *
 * @package healthlinx
 * @subpackage healthlinx
 * @since healthlinx 0.1
 */
?>
		<footer>
			<div class="outerThirdWidth">
                    <span class="mobileFooterLinks">
                        <?php wp_list_pages('title_li=0&exclude=110,700,980,971,973,977,975,987,989,964,967,1003,992'); ?>
                    </span>
					<div class="thirdWidth footerFirstColumn">
						<?php wp_nav_menu(array("menu" => "second-column-footer" , "healthlinx" => "second-column-footer")); ?>
					</div>
					<div class="thirdWidth footerSecondColumn">
						<?php wp_nav_menu(array("menu" => "footer" , "healthlinx" => "footer")); ?>
					</div>
					<div class="thirdWidth footerThirdColumn">
                    	<p class="boldFont">Connect with us</p>
                        <div class="socialIconDiv">
                        	<a href="https://www.linkedin.com/company/healthlinx" target="_blank">
                           		<img class="socialMediaIcon" src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f8/1/-/-/-/-/LinkedIn%20Icon.pngg" />
                            </a>
                        	<a href="https://www.facebook.com/HealthLinx-97118660812/timeline" target="_blank">
                            	<img class="socialMediaIcon" src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f7/1/-/-/-/-/Facebook%20Icon.png" />
                            </a>
                        	<a href="https://twitter.com/HealthLinx_Inc" target="_blank">
                            	<img class="socialMediaIcon" src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f9/1/-/-/-/-/Twitter%20Icon.png" />
                            </a>
                        </div>
                    	<p class="boldFont">Keep Up-to-Date</p>
                        <p>Email Newsletter Sign Up:</p>
                        <?php echo do_shortcode('[contentblock id=2]') ; ?>
						<p class="copyright">
							&copy; HealthLinx 2016
						</p>
					</div>
                    <div class="fullWidth">
                        <p>
                        	MAGNET<sup>&reg;</sup>, Magnet Recognition Program<sup>&reg;</sup>, ANCC<sup>&reg;</sup>, Magnet<sup>&reg;</sup>, and the Magnet Journey<sup>&reg;</sup> are registered trademarks of the American Nurses Credentialing Center. The products and services of HealthLinx are neither sponsored nor endorsed by ANCC. All Rights Reserved.
                        </p>
                    </div>
                    <button name="footerToTop" id="footerToTop" value="">
                        <img src="https://www.healthlinx.com/wp-content/themes/healthlinx/images/toTop.jpg" />
                    </button>
				</div>
		</footer>
	</body>
</html>
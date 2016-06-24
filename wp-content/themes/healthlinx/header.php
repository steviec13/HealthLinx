<?php
	/**
	 * This page is the HEADER of the index page. The index page is broken down into header, content, and footer.
	 *
	 * @package healthlinx
	 * @subpackage healthlinx
	 * @since healthlinx 0.1
	 */
?>
<html class="html">
	<head>
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/allStyles.min.css" media="screen" />
		<!-- This hook is important for wordpress plugins and other many things -->
		<?php
		wp_head();
		?>
		<!-- Header images per page -->
		<style id="my-internal-css" type="text/css">
				/* About */
				<?php if( is_page(21) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01ea/1/-/-/-/-/About%3A%20Story%20Background.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
						margin-top: 76px;	
					}
				/* Home */
				<?php elseif( is_home() || is_front_page() ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f6/1/-/-/-/-/Home%3A%20Background.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
					}
				/* Job Seekers */
				<?php elseif( is_page(1850) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-024d/1/-/-/-/-/Job%20Seeker%3A%20Header%20Background.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
						margin-top: 76px;	
					}
				/* Leadership Excellence */
				<?php elseif( is_page(17) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01ee/1/-/-/-/-/LE%3A%20Background.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
					}
				/* Nursing Excellence */
				<?php elseif( is_page(19) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f0/1/-/-/-/-/NE%3A%20Background.jpg") no-repeat;
						background-position: top center;
						background-max-width: 100%;
						width: 100%;
						height: auto;
					}
					/* Magnet */
					<?php elseif( is_page(67) ) : ?>
						header {
							background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01ef/1/-/-/-/-/NE%3A%20Magnet%20Background.jpg") no-repeat;
							background-position: top center;
							background-max-width: 100%;
							width: 100%;
							height: auto;
						}
					/* Pathway to Excellence */
					<?php elseif( is_page(69) ) : ?>
						header {
							background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f1/1/-/-/-/-/NE%3A%20Pathway%20Background.jpg") no-repeat;
							background-position: top center;
							background-max-width: 100%;
							width: 100%;
							height: auto;
						}
				/* Our Team */
				<?php elseif( is_page(1041) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-021a/1/-/-/-/-/Our%20Team%3A%20Header%20Img.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
					}
				/* Resources */
				<?php elseif( is_page(25) ) : ?>
					header {
						background: url("http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f2/1/-/-/-/-/Resources%3A%20Background.jpg") no-repeat;
						background-position: center center;
						background-min-width: 100%;
						width: 100%;
						height: auto;
					}
				/* Careers - 220, Blog - 996, Job Posts - 38,  Category - 700, any category, any post page, search results page */
				<?php elseif( is_page(220) | is_page(996) | in_category(38) | is_category() | is_single() | is_search() ) : ?>
					header {
						margin-top: 0 !important;	
					}
				<?php endif; ?>
		</style>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- If you are on the About(21), Blog(996), or Careers(220) page -->
		<?php if (is_page(21) || is_page(220) || is_page(996)) : ?>
			<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous" async></script>
		<?php endif; ?>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.min.js" async></script>
        
        <!-- Act-On Form Submission -->
        <script type="text/javascript" src="//solutions.healthlinx.com/acton/form/4436/01af/form.js" async>
        </script>
        <script type="text/javascript">
			function formElementSerializers(){function e(e){switch(e.type.toLowerCase()){case"checkbox":case"radio":return r(e);default:return t(e)}}function r(e){return e.checked?e.value:null}function t(e){return e.value}function i(e){return("select-one"===e.type?l:n)(e)}function l(e){var r=e.selectedIndex;return 0>r?null:o(e.options[r])}function n(e){var r=e.length;if(!r)return null;for(var t=[],i=0;r>i;i++){var l=e.options[i];l.selected&&t.push(o(l))}return t}function o(e){if(document.documentElement.hasAttribute)return e.hasAttribute("value")?e.value:e.text;var r=document.getElementById(e);return r&&r.getAttributeNode("value")?e.value:e.text}return{input:e,inputSelector:r,textarea:t,select:i,selectOne:l,selectMany:n,optionValue:o,button:t}}var requiredFields=new Array,requiredFieldGroups=new Array;addRequiredField=function(e){requiredFields.push(e)},addRequiredFieldGroup=function(e,r){requiredFieldGroups.push([e,r])},missing=function(e){var r=document.getElementById(e),t=formElementSerializers()[r.tagName.toLowerCase()](r);return t&&(t=t.replace(/^\s*(.*)/,"$1"),t=t.replace(/(.*?)\s*$/,"$1")),t?(r.style.backgroundColor="",0):(r.style.backgroundColor="#FFFFCC",1)},missingGroup=function(e,r){for(var t=1,i="#FFFFCC",l=0;r>l;l++)if(document.getElementById(e+"-"+l).checked){i="",t=0;break}for(var l=0;r>l;l++)document.getElementById(e+"-"+l).parentNode.style.backgroundColor=i;return t};var validatedFields=new Array;addFieldToValidate=function(e,r,t,i){validatedFields.push([e,r,t,i])},validateField=function(e,r,t,i){for(var l=document.getElementById(e),n=(l.name,formElementSerializers()[l.tagName.toLowerCase()](l)),o=0;o<validators.length;o++){var a=validators[o][3],d=validators[o][1],u=validators[o][2];if(d===r){if(!u(n,t,i,e))return l.style.backgroundColor="#FFFFCC",alert(a),!1;l.style.backgroundColor="";break}}for(var o=0;o<implicitValidators.length;o++){var a=implicitValidators[o][0],d=implicitValidators[o][1],u=implicitValidators[o][2];if(d===r){if(!u(n,t,i,e))return l.style.backgroundColor="#FFFFCC",alert(a),!1;l.style.backgroundColor="";break}}return!0};var r="";formElementById=function(e,r){for(var t=0;t<e.length;++t)if(e[t].id===r)return e[t];return null},doSubmit=function(e){try{"function"==typeof customSubmitProcessing&&customSubmitProcessing()}catch(r){}var t=formElementById(e,"ao_jstzo");t&&(t.value=(new Date).getTimezoneOffset());var i=document.getElementById(e.id+"_ao_submit_button");i.style.visibility="hidden";for(var l=0,n=0;n<requiredFields.length;n++)0===requiredFields[n].indexOf(e.id+"_")&&(l+=missing(requiredFields[n]));for(var n=0;n<requiredFieldGroups.length;n++)0===requiredFieldGroups[n][0].indexOf(e.id+"_")&&(l+=missingGroup(requiredFieldGroups[n][0],requiredFieldGroups[n][1]));if(l>0)return alert("Please fill all required fields. "),void(i.style.visibility="visible");for(var n=0;n<validatedFields.length;n++){var o=validatedFields[n];if(0===o[0].indexOf(e.id+"_")&&!validateField(o[0],o[1],o[2],o[3]))return document.getElementById(o[0]).focus(),void(i.style.visibility="visible")}return"1"===formElementById(e,"ao_p").value?void(i.style.visibility="visible"):(formElementById(e,"ao_bot").value="nope",void e.submit())};
        </script>
		<!-- Act-On Form Submission -->
        
        <!-- Logo Slider Script -->
        <script type="text/javascript">
  		$(function(){
			// vars for clients list carousel
			// http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
			function rotateClients(){if(0!=rotating){var t=$("#clients-list li:first");t.animate({"margin-left":"-220px"},3e3,function(){t.remove().css({"margin-left":"0px"}),$("#clients-list li:last").after(t)})}}var $clientcarousel=$("#clients-list"),clients=$clientcarousel.children().length,clientwidth=220*clients;$clientcarousel.css("width",clientwidth);var rotating=!0,clientspeed=0,seeclients=setInterval(rotateClients,clientspeed);$(document).on({mouseenter:function(){rotating=!1},mouseleave:function(){rotating=!0}},"#clients");
			});
		</script>
        <!-- Logo Slider Script -->
        
        <!-- Google Analytics -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-69361218-1', 'auto');
		  ga('send', 'pageview');
		</script>
        <!-- Google Analytics -->
		
        <!-- Beacon Analytics -->
        <script>
		/*<![CDATA[*/(function(w,a,b,d,s){w[a]=w[a]||{};w[a][b]=w[a][b]||{q:[],track:function(r,e,t){this.q.push({r:r,e:e,t:t||+new Date});}};var e=d.createElement(s);var f=d.getElementsByTagName(s)[0];e.async=1;e.src='//solutions.healthlinx.com/cdnr/34/acton/bn/tracker/4436';f.parentNode.insertBefore(e,f);})(window,'ActOn','Beacon',document,'script');ActOn.Beacon.track();/*]]>*/
        </script>
        <!-- Beacon Analytics -->
        
	</head>
	<body>
   		<div class="colorOverlay"></div>
		<nav>
            <div class="innerNav">
                <div class="jobSeekersLogin">
                    <p>
                    	<a href="http://healthlinx.com/critical_care/opportunities.php" target="_blank">Job Seekers Login</a>
                    </p>
                </div>
                <div class="jobSeekersLogin jobSeekersLoginHidden">
                    <p>Job Seekers Login</p>
                </div>
                <img class="navImage"src="https://www.healthlinx.com/images/healthlinx-logo.gif" />
                <?php wp_nav_menu(array("menu" => "menu-navigation" , "theme_location" => "primary")); ?>
                <button name="mNav" id="mNav">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-0212/1/-/-/-/-/Mobile%20Menu%20Icon.png" />
                </button>
                <div class="clear"></div>
            </div>
		</nav>
		<header>
            <div class="outerThirdWidth">
                <div class="insideHeaderDiv">
                <!-- ---------------------------------------------------------
                Homepage text, over image ------------------------------------
                ---------------------------------------------------------- -->
                    <!-- About -->
                    <?php if( is_page(21) ) : ?>
						<?php $the_query = new WP_Query( 'page_id=980' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    <!-- Home -->
                    <?php elseif( is_home() || is_front_page() ) : ?>
						<?php $the_query = new WP_Query( 'page_id=971' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    <!-- Job Seekers -->
                    <?php elseif( is_page(1850) ) : ?>
                    	<div class="threeQuartersWidth">
						<?php $the_query = new WP_Query( 'page_id=1853' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                        </div>
                    <!-- Leadership Excellence -->
                    <?php elseif( is_page(17) ) : ?>
						<?php $the_query = new WP_Query( 'page_id=973' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    <!-- Nursing Excellence -->
                    <?php elseif( is_page(19) ) : ?>
						<?php $the_query = new WP_Query( 'page_id=975' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                        <!-- Magnet -->
                        <?php elseif( is_page(67) ) : ?>
							<?php $the_query = new WP_Query( 'page_id=977' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                    the_content();
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        <!-- Pathway to Excellence -->
                        <?php elseif( is_page(69) ) : ?>
							<?php $the_query = new WP_Query( 'page_id=987' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                    the_content();
                                endwhile;
                                wp_reset_postdata();
                            ?>
                    <!-- Our Team -->
                    <?php elseif( is_page(1041) ) : ?>
						<div class="halfWidth"></div><div class="halfWidth">
                        	<h1>The HealthLinx Team</h1>
                            <p>
                            Meet the HeathLinx team. Through our experienced and diverse staff, we work together to effectively improve outcomes and financial performance for hospitals to help them provide better patient care. We invite you to learn more about our teams and the individuals within.
                            </p>
                        </div>
                    <!-- Resources -->
                    <?php elseif( is_page(25) ) : ?>
						<?php $the_query = new WP_Query( 'page_id=989' ); while ( $the_query->have_posts() ) : $the_query->the_post();
                                the_content();
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    <?php endif ; ?>
                <!-- ---------------------------------------------------------
                Homepage text, over image ------------------------------------
                ---------------------------------------------------------- -->
                </div>
            </div>
		</header>
    <!-- ---------------------------------------------------------
    Titles, columns directly under header image ------------------
    ---------------------------------------------------------- -->
        <!-- 1850 - Job Seeker, 25 - Resources -->
        <?php if ( is_page(1850) || is_page(25)) : ?>
            <h1 class="whiteTextOrangeBG"><?php the_title(); ?></h1>
            <div class="arrow-down arrow-down-orange"></div>
        <!-- Leadership Excellence page -->
        <?php elseif ( is_page(17)) : ?>
            <h1 class="whiteTextOrangeBG"><?php the_title(); ?></h1>
            <div class="arrow-down arrow-down-orange"></div>
            <div class="leSolutionsWrapper widthRestriction">
                <div class="thirdWidth">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01e1/1/-/-/-/-/Leadership%20Excellence%20Icon.png" />
                    <h4 class="darkOrange">Leadership Excellence Solution</h4>
                    <p>Receive the benefits of both our Transitional and Permanent solutions, and we <span class="orange">guarantee positive financial impact</span>.</p>
                </div><div class="thirdWidth">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01e0/1/-/-/-/-/Permanent%20Leadership%20Icon.png" />
                    <h4 class="darkOrange">Permanent Leadership Solution</h4>
                    <p>Through management of the Big 4 Threats to Success<sup>&trade;</sup>, we can help you acquire a qualified, experienced Permanent Leader in 120 days.</p>
                </div><div class="thirdWidth">
                    <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01df/1/-/-/-/-/Transitional%20Leadership%20Icon.png" />
                    <h4 class="darkOrange">Transitional Leadership Solution</h4>
                    <p>In as few as 5 days, our transitional leader can begin to significatnly improve position performance.</p>
                </div>
            </div>
        <!-- Nursing Excellence -->
        <?php elseif ( is_page(19) ) : ?>
            <h1 class="whiteTextOrangeBG whiteTextGrayBG"><?php the_title(); ?></h1>
            <div class="arrow-down arrow-down-gray"></div>
        <?php endif ; ?>
    <!-- ---------------------------------------------------------
    Titles, columns directly under header image ------------------
    ---------------------------------------------------------- -->
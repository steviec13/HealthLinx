<div class="ourTeam">
	<h1 class="orange darkGrayBG"><?php the_title(); ?></h1>
    <ul class="ourTeamUL midGrayBG">
    	<li id="leadershipTeam">
        	Leadership Team
        </li><li id="leTeam">
        	Leadership Excellence
        </li><li id="neTeam">
        	Nursing Excellence
        </li><li id="clientSolutions">
        	Client Solutions
        </li><li id="supportTeam">
       		Support Team
        </li>
    </ul>
    <div class="widthRestriction widthRestrictionOurTeam">
    	<!-- 48 - Leadership Team -->
		<?php
			$orderDetails = array('date' => 'ASC') ;
        	query_posts( array( 'cat' => '48,49,50,51,52', 'orderby' => $orderDetails) );
		?>
        <?php while (have_posts()) : the_post(); ?><div class=" quarterWidthOurTeam quarterWidth <?php the_category_ID(); ?>">
				<div class="hoverIcons">
					<?php the_post_thumbnail(); ?>
               		<?php 
						// Client Solutions Team
							// Cheri Durant
							if ($post->ID == '1133') {$linkedinHref = 'cheri-durrant-5400a14';}
							// Jeff Wang
							if ($post->ID == '1130') {$linkedinHref = 'jeff-wang-91185b7';}
							// Lamar Love
							if ($post->ID == '1099') {$linkedinHref = 'lamarlove';}
							// Michael Pittroff
							if ($post->ID == '1136') {$linkedinHref = 'pittroff';}
							// Sharon Richmond
							if ($post->ID == '1140') {$linkedinHref = 'sharon-richmond-4405799';}
							
						// Leadership Excellence Team
							// Archie Drake
							if ($post->ID == '1043') {$linkedinHref = 'archie-drake-668a2954';}
							// Chad Burgel
							if ($post->ID == '1172') {$linkedinHref = 'chad-burgel-mba-78bbb313';}
							// Christina Snodgrass
							if ($post->ID == '1184') {$linkedinHref = 'christina-snodgrass-b1a14722';}
							// Colleen Deep
							if ($post->ID == '1153') {$linkedinHref = 'colleen-deep-a5ab5762';}
							// Darlene Smuke
							if ($post->ID == '1166') {$linkedinHref = 'darlene-smuke-864a3774';}
							// Deahna Thomas
							if ($post->ID == '1169') {$linkedinHref = 'deahna-thomas-mba-a2065922';}
							// Elliot Berry
							if ($post->ID == '1150') {$linkedinHref = 'elliot-berry-225357b';}
							// Jenny Killian
							if ($post->ID == '1160') {$linkedinHref = 'jenny-killian-419a5913';}
							// Julie Morrow
							if ($post->ID == '1163') {$linkedinHref = 'julianne-morrow-31a6b79';}
							// Mike Koch
							if ($post->ID == '1181') {$linkedinHref = 'michaeljkoch';}
							// Rebecca Allard
							if ($post->ID == '1147') {$linkedinHref = 'rebecca-allard-506a887';}
							// Paul Hocking
							if ($post->ID == '1178') {$linkedinHref = 'paul-hocking-6b611641';}
							// Tammy Driver
							if ($post->ID == '1175') {$linkedinHref = 'tammy-driver-868a1a8b';}
							// Valerie Jones
							if ($post->ID == '1156') {$linkedinHref = 'valeriejjones';}
							
						// Leadership Team
							// Bob Sherman
							if ($post->ID == '1086') {$linkedinHref = 'robert-sherman-cmc-a44b7652';}
							// Cassie Arp
							if ($post->ID == '1088') {$linkedinHref = 'cassie-arp-a627433';}
							// Gina Boring
							if ($post->ID == '1053') {$linkedinHref = 'gina-boring-msn-rn-ne-bc-1156271b';}
							// Heather Darling
							if ($post->ID == '1091') {$linkedinHref = 'heatherdarling';}
							// Julie Berry
							if ($post->ID == '1056') {$linkedinHref = 'julie-berry-1295699';}
							// Matt Berry
							if ($post->ID == '1050') {$linkedinHref = 'matt-berry-72233a95';}
							// Melissa Adams
							if ($post->ID == '1083') {$linkedinHref = 'melissa-adams-7751501a';}
							// Paul Ferrell
							if ($post->ID == '1243') {$linkedinHref = 'pdferrell';}
							// Rod Phillips
							if ($post->ID == '1048') {$linkedinHref = 'rod-phillips-9719443';}
							// Suzanne Horton
							if ($post->ID == '1093') {$linkedinHref = 'suzanne-horton-8a936538';}
							
						// Leadership Team
							// Abdou Seck 
							if ($post->ID == '1317') {$linkedinHref = 'abdoukarimseck';}
							// Celeste Felix 
							if ($post->ID == '1190') {$linkedinHref = 'celeste-felix-50516b61';}
							// Cindy Henry 
							if ($post->ID == '1199') {$linkedinHref = 'cindy-henry-651725aa';}
							// Ethan Kosmider 
							if ($post->ID == '1205') {$linkedinHref = '#';}
							// Janice Hodges 
							if ($post->ID == '1202') {$linkedinHref = 'janice-jan-hodges-65327a33';}
							// Jeanine Scholl 
							if ($post->ID == '1214') {$linkedinHref = 'jeanine-ann-marie-scholl-msn-aprn-ne-bc-7911768';}
							// Joan Hanson 
							if ($post->ID == '1196') {$linkedinHref = 'joan-hanson-2194692a';}
							// Kathleen Yhen 
							if ($post->ID == '1220') {$linkedinHref = 'kathleen-yhlen-70b5b489';}
							// Kathy Riley 
							if ($post->ID == '1211') {$linkedinHref = 'katherine-riley-msn-rn-ne-bc-b7125923';}
							// Kelly Ruggiero 
							if ($post->ID == '1144') {$linkedinHref = 'kellyraynor';}
							// Kristin Whitehead 
							if ($post->ID == '1217') {$linkedinHref = 'kristin-whitehead-60582a2';}
							// Marilyn Morales 
							if ($post->ID == '1208') {$linkedinHref = 'marilyn-pearson-morales-phd-rn-bc-fnp-164b5810';}
							// Mary Clarke 
							if ($post->ID == '1187') {$linkedinHref = 'mary-clarke-phd-rn-bc-6873b4a4';}
							// Vicki Haag 
							if ($post->ID == '1193') {$linkedinHref = 'vicki-haag-dha-ms-rn-68889918';}
							
						// Support Team
							// Steven Castillo
							if ($post->ID == '1234') {$linkedinHref = 'steviec13';}
							// Ed Hoferr
							if ($post->ID == '1261') {$linkedinHref = 'edward-hofherr-0612453';}
							// Tim Parker
							if ($post->ID == '1308') {$linkedinHref = 'timparkeroh';}
							// Nikki Biratsis
							if ($post->ID == '1228') {$linkedinHref = 'nikki-biratsis-a2a6a619';}
							// Brooke Garrett
							if ($post->ID == '1252') {$linkedinHref = 'brooke-garrett-66b4593b';}
							// Hannah Cassell 
							if ($post->ID == '1231') {$linkedinHref = 'hannahcassell';}
							// Giselle Belkin
							if ($post->ID == '1225') {$linkedinHref = 'gisellebelkin';}
							// David Jackson
							if ($post->ID == '1270') {$linkedinHref = 'david-jackson-171a05ba';}
							// Kristin Stratton 
							if ($post->ID == '1322') {$linkedinHref = 'kirstin-stratton-2893a074';}
							// Heather Neel
							if ($post->ID == '1302') {$linkedinHref = '#';}
							// Lacy Schnitzler 
							if ($post->ID == '1314') {$linkedinHref = 'lacy-schnitzler-23b747a7';}
							// Jenn Fulwider
							if ($post->ID == '1249') {$linkedinHref = 'jennifer-fulwider-92ab6144';}
							// Kate Eiler
							if ($post->ID == '1240') {$linkedinHref = 'kate-eiler-40b0056b';}
							// Kate Terlecky
							if ($post->ID == '1845') {$linkedinHref = 'katharine-terlecky-88794211';}
							// Ashley White 
							if ($post->ID == '1325') {$linkedinHref = 'ashley-white-b9454778';}
							// Cortney Sketch
							if ($post->ID == '1320') {$linkedinHref = 'cortney-sketch-a1ba584';}
							// Terrie Cooper 
							if ($post->ID == '1237') {$linkedinHref = '#';}
							// Kathy Harris 
							if ($post->ID == '1255') {$linkedinHref = '#';}
							// Shelley Kirk
							if ($post->ID == '1273') {$linkedinHref = 'shelley-kirk-9950571b';}
							// Kim Link 
							if ($post->ID == '1329') {$linkedinHref = 'kim-link-2290378a';}
							// Nathan Fish
							if ($post->ID == '1246') {$linkedinHref = 'nathan-fish-a874539';}
							// Katie Ibarra
							if ($post->ID == '1267') {$linkedinHref = 'katie-ibarra-69527870';}
							// Allie Matuk
							if ($post->ID == '1305') {$linkedinHref = 'allie-matuk-05388a119';}
							// Olivia Hickman
							if ($post->ID == '1258') {$linkedinHref = 'olivia-hickman-10b78b96';}
							// Adam Hritzak
							if ($post->ID == '1264') {$linkedinHref = 'adamhritzak';}
							// Jon Scalf
							if ($post->ID == '1311') {$linkedinHref = 'jon-scalf-95137045';}
					?>
                    <!-- If not in Support Team; 1317 - Abdou Seck -->
                    <?php if (in_category(50) && ($post->ID == '1317')) : ?>
                    <?php elseif (in_category(array(48,49,50,51))) : ?>
					<div class="hoverInfoButton">
						<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-022a/1/-/-/-/-/Info%20Button.png" />
					</div>
                    <?php endif ; ?>
                    <!-- Exclude 1255: Kathy Harris, 1237: Terrie Cooper, 1302: Heather Neel -->
                    <?php if (in_category(50) && ($post->ID == '1205')) : ?>
                    <?php elseif (!in_category(52) || (in_category(52) && (!in_array($post->ID, array(1237,1255,1302))))) : ?>
					<a class="linkedinLogo" href="https://www.linkedin.com/in/<?php echo $linkedinHref ;?>" target="_blank">
						<img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-01f8/1/-/-/-/-/LinkedIn%20Icon.png" />
					</a>
                	<?php endif ; ?>
                </div>
                <?php the_content(); ?>
                <div class="ourTeamModal">
                    <div class="innerModal">
                    	<div class="modalTitleWrapper">
                            <img src="http://solutions.healthlinx.com/cdnr/34/acton/attachment/4436/f-022b/1/-/-/-/-/Modal%20X.png" />
                        	<a href="<?php the_permalink(); ?>">
								<?php
                                    // Shows only the first category (0)
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                ?>
                            </a>
                        </div>
                        <div class="halfWidth">
                        	<?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>
                        </div><div class="halfWidth">
                            <div class="modalText">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <!-- Modal button at the bottom of the pop-up window -->
                        <div class="fullWidth">
                        	<span class="modalButton">
                            	<?php 
									 // 1083 - Melissa Adams
                                		if(in_category(48) && $post->ID == '1083') {
											echo '<a href="http://healthlinx.com/critical_care/opportunities.php">Start Your HealthLinx Journey</a>';
										}
									 // 1053 - Gina Boring
                                		else if(in_category(48) && $post->ID == '1053') {
											echo '<a href="/nursing-excellence">Start Your Nursing Excellence Journey</a>';
										}
									 // 1088 - Cassie Arp
                                		else if(in_category(48) && $post->ID == '1088') {
											echo '<a href="/leadership-excellence">Start Your Leadership Excellence Journey</a>';
										}
									 // 1093 - Suzannne Horton
                                		else if(in_category(48) && $post->ID == '1093') {
											echo '<a href="/leadership-excellence">Start Your Leadership Excellence Journey</a>';
										}
									 // Leadership Team
                                		else if(in_category(48) && $post->ID !== '1083' && $post->ID !== '1053') {
											echo '<a href="/category/case-studies/">Let Us Prove Our Value</a>';
										}
									// Leadership Excellence Team + Leader Facing
                                		else if(in_category(49) && in_category(63)) {
											echo '<a href="http://healthlinx.com/critical_care/opportunities.php">Start Your Leadership Excellence Journey</a>';
										}
									// Leadership Excellence Team
                                		else if(in_category(49)) {
											echo '<a href="/leadership-excellence">Start Your Leadership Excellence Journey</a>';
										}
									 // Nursing Excellence Team
                                		else if(in_category(50)) {
											echo '<a href="/nursing-excellence">Start Your Nursing Excellence Journey</a>';
										}
									 // Client Solutions Team
                                		else if(in_category(51)) {
											echo '<a href="/category/case-studies/">Let Us Prove Our Value</a>';
										}
								?>
                            </span>
                        </div>
                    </div>
   				<div></div>
                </div>
            </div><?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
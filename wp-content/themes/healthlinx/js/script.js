$(document).ready(function() {
	/////////////////////////////////////
	// Nav and Header
	/////////////////////////////////////
		// Header margin
			var navHeight = $("nav").height();
			$("header").css("margin-top" , navHeight);
	
		// Logo link to homepage
			$(".navImage").click(function() {
				window.location.href = "/";
			});
		
		// Nav active title
			$(".menu li a").click(function() {
				$(".activeNav").removeClass("activeNav");
				$(this).addClass("activeNav");
			});
		
		// Mobile navigation
			$("#mNav").click(function() {
				$("#menu-navigation").slideToggle(300);
				$("#menu-navigation li").mouseenter(function() {
					$(this).children(".sub-menu").hide();
				});
			});
			$(".sidebarMobileTab").click(function() {
				$(".sidebarWrapper").toggle("slide", {direction: "right"}, 300);
				$(".hideSidebar").click(function() {
					$(".sidebarWrapper").hide(300);
				})
			})
		
		// Pseudo-states / hover-state and displaying child pages
			$("#menu-navigation li").mouseenter(function() {
				$(this).children(".sub-menu").show(300).css("display" , "block").children("li").show(300).css("display" , "block");
				$(this).mouseleave(function() {
					$(this).children(".sub-menu").hide().children("li").hide();
				})
			});
			$("#menu-navigation li").mouseleave(function() {
				$(this).children(".sub-menu").hide();
			});
	
	/////////////////////////////////////
	// Main Content
	/////////////////////////////////////
		// Equal heights for LE and NE homepage sections
			$(".NEservices").height($(".LEservices").height());
		
		// Careers link to individual job post
			$(".jobPost a .blogPostStyle").mouseover(function() {
				$(this).addClass("darkGrayBG");	
				$(this).children(".blogPageIndividualText").children("h3").removeClass("midGray").addClass("orange");
				$(this).children(".blogPageIndividualText").children("h6").addClass("white");
			});
			$(".jobPost a .blogPostStyle").mouseleave(function() {
				$(this).removeClass("darkGrayBG");	
				$(this).children(".blogPageIndividualText").children("h3").addClass("midGray").removeClass("orange");
				$(this).children(".blogPageIndividualText").children("h6").removeClass("white");
			});
			
		// Our Team
			// Leadership Team showing on load
				$(".53").hide();
				$(".48").addClass("thirdWidth").show();	
				$(".ourTeam .widthRestriction").children(".49, .50, .51, .52").hide();
				$(".ourTeam").css("background-color" , "rgba(255,153,0,0.3)");
				$(".ourTeamJobTitle, .quarterWidthOurTeam p").removeClass("white");
				$(".quarterWidthOurTeam p a, .quarterWidthOurTeam h3").addClass("orange").removeClass("midGray");
				$("#leadershipTeam").addClass("ourTeamActive");	
			$(".ourTeamUL li").click(function() {
				$(".ourTeamActive").removeClass("ourTeamActive");
				$(this).addClass("ourTeamActive");
			})
			
			// Secondary Nav
				$("#leadershipTeam").click(function() {
					$(".53").hide();
					$(".48").addClass("thirdWidth").show();	
					$(".ourTeam .widthRestriction").children(".49, .50, .51, .52").hide();
					$(".ourTeam").css("background-color" , "rgba(255,153,0,0.3)");
					$(".ourTeamJobTitle, .quarterWidthOurTeam p").removeClass("white");
					$(".quarterWidthOurTeam p a, .quarterWidthOurTeam h3").addClass("orange").removeClass("midGray");
					$(".linkedinLogo").removeClass("centerLogo");
				})
				$("#leTeam").click(function() {
					$(".53").hide();
					$(".49").show();	
					$(".ourTeam .widthRestriction").children(".48, .50, .51, .52").hide();
					$(".ourTeam").css("background-color" , "rgba(255,153,0,0.6)");
					$(".ourTeamJobTitle, .quarterWidthOurTeam p").removeClass("white");
					$(".quarterWidthOurTeam p a, .quarterWidthOurTeam h3").removeClass("orange").addClass("midGray");
					$(".linkedinLogo").removeClass("centerLogo");
				})
				$("#neTeam").click(function() {
					$(".53").hide();
					$(".50").show();	
					$(".ourTeam .widthRestriction").children(".48, .49, .51, .52").hide();
					$(".ourTeam").css("background-color" , "rgba(234,234,234,1.0)");
					$(".ourTeamJobTitle, .quarterWidthOurTeam p").removeClass("white");
					$(".quarterWidthOurTeam p a, .quarterWidthOurTeam h3").addClass("orange").removeClass("midGray");
					$(".linkedinLogo").removeClass("centerLogo");
				})
				$("#clientSolutions").click(function() {
					$(".53").hide();
					$(".51").show();	
					$(".ourTeam .widthRestriction").children(".48, .49, .50, .52").hide();
					$(".ourTeam").css("background-color" , "rgba(35,35,35,1.0)");
					$(".quarterWidthOurTeam > .contactInfo > p, .quarterWidthOurTeam > .contactINfo > p > span").addClass("white");
					$(".quarterWidthOurTeam > p > a, .quarterWidthOurTeam h3").addClass("orange").removeClass("midGray");
					$(".linkedinLogo").removeClass("centerLogo");
				})
				$("#supportTeam").click(function() {
					$(".53").hide();
					$(".52").addClass("sixthWidth").show();	
					$(".ourTeam .widthRestriction").children(".48, .49, .50, .51").hide();
					$(".ourTeam").css("background-color" , "rgba(255,255,255,1.0)");
					$(".ourTeamJobTitle, .quarterWidthOurTeam p").removeClass("white");
					$(".quarterWidthOurTeam p a, .quarterWidthOurTeam h3").addClass("orange").removeClass("midGray");
					$(".linkedinLogo").addClass("centerLogo");
				})
				
			// Modal
				if ($(window).width() >+ 1100){
					$(".hoverIcons").mouseenter(function() {
						$(this).children(".wp-post-image").addClass("grayscale");
						$(this).children(".linkedinLogo").show();
						$(this).children(".hoverInfoButton").show();
					})
					$(".hoverIcons").mouseleave(function() {
						$(this).children(".wp-post-image").removeClass("grayscale");
						$(this).children(".linkedinLogo").hide();
						$(this).children(".hoverInfoButton").hide();
					})
				}
				$(".hoverInfoButton").click(function() {
					if (!$(this).parent(".hoverIcons").parent(".quarterWidthOurTeam").hasClass("52")) {
						$(this).parent(".hoverIcons").siblings(".ourTeamModal").fadeToggle(300);
						$(".modalText p").show();
						$(".colorOverlay").fadeToggle();
						$(".modalTitleWrapper img").click(function() {
							$(".ourTeamModal").hide(300);
							$(".modalText p").hide();
							$(".colorOverlay").hide();
						})
						$(".colorOverlay").click(function() {
							$(".ourTeamModal").hide(300);
							$(".modalText p").hide();
							$(".colorOverlay").hide();
						})
					}
				})
			
	/////////////////////////////////////
	// Footer
	/////////////////////////////////////
		$("img.socialMediaIcon").mouseenter(function() {
			$(this).addClass("footerIconBorder");
		});
		$("img.socialMediaIcon").mouseleave(function() {
			$(this).removeClass("footerIconBorder");
		});
	
		// To Top Button
			$("button[name=footerToTop]").click(function(){
				window.scrollTo(0,0);
			});
});
$(function(){
	 // Variables for logo carousel
		  // Reference: http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
		  var $clientcarousel = $('#clients-list');
		  var clients = $clientcarousel.children().length;
		  var clientwidth = (clients * 220); // 140px width for each client item 
		  $clientcarousel.css('width',clientwidth);
		  
		  var rotating = true;
		  var clientspeed = 0;
		  var seeclients = setInterval(rotateClients, clientspeed);
		  
		  $(document).on({
			mouseenter: function(){
			  rotating = false; // turn off rotation when hovering
			},
			mouseleave: function(){
			  rotating = true;
			}
		  }, '#clients');
		  
		  function rotateClients() {
			if(rotating != false) {
			  var $first = $('#clients-list li:first');
			  $first.animate({ 'margin-left': '-220px' }, 2000, function() {
				$first.remove().css({ 'margin-left': '0px' });
				$('#clients-list li:last').after($first);
			  });
			}
		  }
});
			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
									</nav>

					<p class="source-org copyright">All work copyright &copy; <?php echo date('Y'); ?> Ian Marquette.</p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

	<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-1.6.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/matchmedia.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/picturefill.js"></script>

	<script>

	    // Toggle Menu open on small screens
	    $(document).ready(function() {

	        $('#menu-toggle').click(function () {
	            $('.open').css('display','block');
	            $('#menu-main-menu').slideToggle('.open'); 
	            $('#menu-main-menu').addClass('mobile'); 
	            e.preventDefault();
	        });
	    
	    });

	    
	    // Scroll down to green section when down arrow button is clicked
	    $(document).ready(function() {

	        $(".scroll-down").click(function() {
	            $('html, body').animate({
	                scrollTop: $(".green-section").offset().top - $(".header").outerHeight() + 2
	            }, 2000);
	        });

	    });

	     // Scroll up to top when up arrow button is clicked
	    $(document).ready(function() {

	        $(".scroll-up").click(function() {
	            $('html, body').animate({
	                scrollTop: $(".blue-section").offset().top
	            }, 2000);
	        });

	    });


	    // Scroll down to green section when Work menu item button is clicked
	    $(document).ready(function() {

	        $(".menu-item-7").click(function() {
	            $('html, body').animate({
	                scrollTop: $(".home-green-block").offset().top - $("#inner-header").outerHeight() + 2
	            }, 2000);

	            $('.mobile').slideUp(); 

	        });

	    });


	    // Scroll down to green section when Work menu item button is clicked
	    $(document).ready(function() {

	        $(".menu-item-8").click(function() {
	            $('html, body').animate({
	                scrollTop: $(".home-dark-grey-block").offset().top - $("#inner-header").outerHeight() + 2
	            }, 2000);

	            $('.mobile').slideUp(); 

	        });

	    });


	    // Scroll down to green section when Work menu item button is clicked
	    $(document).ready(function() {

	        $(".menu-item-9").click(function() {
	            $('html, body').animate({
	                scrollTop: $(".home-white-block").offset().top - $("#inner-header").outerHeight() + 2
	            }, 2000);

	            $('.mobile').slideUp(); 

	        });

	    });


	    // Fade out down arrow button when header image gets to top of screen 
	     $(document).ready(function() {

	            $(".eye").waypoint(function() {
	                $('.scroll-down').fadeOut('slow', function() {
	                    // $("h2").toggleClass("bottom-element");
	                });
	            });
	        });


	     //Fade in down arrow button when navigation element becomes visible again
	      $(document).ready(function() {

	            $('.header-image').waypoint(function() {
	               // $("h2").removeClass("bottom-element");
	                $('.scroll-down').fadeIn('slow');
	                    
	            });
	        });


	      // Add persistent header class to header when header image gets to top of screen
	        $(document).ready(function() {

	            $("h1").waypoint(function() {
	                $("#inner-header").toggleClass("persistent-header");               
	            });
	        });


	         $(document).ready(function() {

	            $(".project-001").waypoint(function() {
	                $(".project-001").addClass("fadeInRight");               
	            }, { offset: '80%' });
	        });

	        $(document).ready(function() {

	            $(".project-002").waypoint(function() {
	                $(".project-002").addClass("fadeInLeft");               
	            }, { offset: '80%' });
	        });
	        
	        $(document).ready(function() {

	            $(".project-003").waypoint(function() {
	                $(".project-003").addClass("fadeInRight");               
	            }, { offset: '80%' });
	        }); 

	        $(document).ready(function() {

	            $(".project-004").waypoint(function() {
	                $(".project-004").addClass("fadeInLeft");               
	            }, { offset: '80%' });
	        }); 

	        $(document).ready(function() {

	            $(".dark-grey-section").waypoint(function() {
	                $(".dark-grey-section .sixcol").addClass("fadeIn");               
	            }, { offset: '90%' });
	        });

	        $(document).ready(function() {

	            $(".white-section").waypoint(function() {
	                $(".white-section .sixcol").addClass("fadeIn");               
	            }, { offset: '90%' });
	        });

	        $(document).ready(function() {

	            $(".case-study-001").waypoint(function() {
	                $(".case-study-001").addClass("fadeInRight");               
	            }, { offset: '80%' });
	        });

	         $(document).ready(function() {

	            $(".case-study-002").waypoint(function() {
	                $(".case-study-002").addClass("fadeInLeft");               
	            }, { offset: '80%' });
	        });
	        
	        $(document).ready(function() {

	            $(".case-study-003").waypoint(function() {
	                $(".case-study-003").addClass("fadeInRight");               
	            }, { offset: '80%' });
	        }); 

	         $(document).ready(function() {

	            $(".case-study-004").waypoint(function() {
	                $(".case-study-004").addClass("fadeInLeft");               
	            }, { offset: '80%' });
	        }); 

	          $(document).ready(function() {

	            $(".case-study-005").waypoint(function() {
	                $(".case-study-005").addClass("fadeInRight");               
	            }, { offset: '80%' });
	        }); 

	</script>

</html> <!-- end page. what a ride! -->

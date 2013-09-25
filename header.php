<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		<script type="text/javascript" src="//use.typekit.net/aed0tpb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<link href="<?php echo get_template_directory_uri(); ?>/library/headsupgrid/hugrid.css" type="text/css" rel="stylesheet" />
<script src="<?php echo get_template_directory_uri(); ?>/library/headsupgrid/jquery-1.6.2.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/library/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/matchmedia.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/picturefill.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/library/headsupgrid/hugrid.js"></script>
<script type="text/javascript">
    definegrid = function() {
        var browserWidth = $(window).width(); 
        if (browserWidth >= 1001) 
        {
            pageUnits = 'px';
            colUnits = 'px';
            pagewidth = 1000;
            columns = 6;
            columnwidth = 150;
            gutterwidth = 20;
            pagetopmargin = 0;
            rowheight = 32;
            gridonload = 'off';
            makehugrid();
        } 
        if (browserWidth <= 1000) 
        {
            pageUnits = '%';
            colUnits = '%';
            pagewidth = 94;
            columns = 2;
            columnwidth = 48;
            gutterwidth = 4;
            pagetopmargin = 0;
            rowheight = 32;
            gridonload = 'off';
            makehugrid();
        }
        if (browserWidth <= 768) 
        {
            pageUnits = '%';
            colUnits = '%';
            pagewidth = 96;
            columns = 2;
            columnwidth = 49;
            gutterwidth = 2;
            pagetopmargin = 0;
            rowheight = 32;
            gridonload = 'off';
            makehugrid();
        }
    }
    $(document).ready(function() {
        definegrid();
        setgridonload();
    });    

    $(window).resize(function() {
        definegrid();
        setgridonresize();
    });
</script>

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

    


    
    // Scroll down to green section when arrow button is clicked
    $(document).ready(function() {

        $(".scroll-down").click(function() {
            $('html, body').animate({
                scrollTop: $(".green-section").offset().top - $(".header").outerHeight() + 2
            }, 2000);
        });

    });


    // Scroll down to green section when Work menu item button is clicked
    $(document).ready(function() {

        $(".menu-item-7").click(function() {
            $('html, body').animate({
                scrollTop: $(".green-section").offset().top - $("#inner-header").outerHeight() + 2
            }, 2000);

            $('.mobile').slideUp(); 

        });

    });


    // Scroll down to green section when Work menu item button is clicked
    $(document).ready(function() {

        $(".menu-item-8").click(function() {
            $('html, body').animate({
                scrollTop: $(".dark-grey-section").offset().top - $("#inner-header").outerHeight() + 2
            }, 2000);

            $('.mobile').slideUp(); 

        });

    });


    // Scroll down to green section when Work menu item button is clicked
    $(document).ready(function() {

        $(".menu-item-9").click(function() {
            $('html, body').animate({
                scrollTop: $(".white-section").offset().top - $("#inner-header").outerHeight() + 2
            }, 2000);

            $('.mobile').slideUp(); 

        });

    });


    // Fade out arrow button when header image gets to top of screen 
     $(document).ready(function() {

            $(".header-image").waypoint(function() {
                $('.scroll-down').fadeOut('slow', function() {
                    // $("h2").toggleClass("bottom-element");
                });
            });
        });


     //Fade in arrow button when navigation element becomes visible again
      $(document).ready(function() {

            $('nav').waypoint(function() {
               // $("h2").removeClass("bottom-element");
                $('.scroll-down').fadeIn('slow');
                    
            });
        });


      // Add persistent header class to header when header image gets to top of screen
        $(document).ready(function() {

            $(".header-image").waypoint(function() {
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

            $(".dark-grey-section").waypoint(function() {
                $(".dark-grey-section .sixcol").addClass("fadeIn");               
            }, { offset: '90%' });
        });

        $(document).ready(function() {

            $(".white-section").waypoint(function() {
                $(".white-section .sixcol").addClass("fadeIn");               
            }, { offset: '90%' });
        });


</script>
 

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="clearfix">

                     <a id="menu-toggle" class="anchor-link">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

                    <p class="hire-btn">
                        <script type="text/javascript">(function(){var ml="ua@s:Hrntf>c.-l/h<mqoMe \"ki=",mi="A1G;>133KHB1J>8D=>J7IHG@6F9KHB1J>8D4J172J17B16C0F88F<;DBHG:5J6FGEFA?1:",o="";for(var j=0,l=mi.length;j<l;j++){o+=ml.charAt(mi.charCodeAt(j)-48);}document.write(o);}());</script><noscript>*protected email*</noscript>
                    </p>    

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

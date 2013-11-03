<?php
/*
Template Name: Apple Product Download
*/
?>

<?php get_header(); ?>

	<div id="content">

						<div id="main" class="clearfix case-study" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="blue-section">

									<div class="wrap sixcol animated fadeIn">

										<h1 itemprop="headline"><?php the_title(); ?></h1>

										<span class="case-study-001 animated" data-picture data-alt="<?php the_field('apple_download_image_001_alt_tag'); ?>">
        										<span data-src="<?php the_field('apple_download_image_001_small'); ?>"></span>
										        <span data-src="<?php the_field('apple_download_image_001_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_001_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('apple_download_image_001_medium_retina'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_001_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('apple_download_image_001_small'); ?>" alt="<?php the_field('apple_download_image_001_alt_tag'); ?>">
										        </noscript>
    										</span>

    										<a href="<?php the_field('download_link'); ?>" class="download-button button" target="_blank">Download Files</a>

									</div> <!-- end article header -->

								</section><!-- end home section -->

								<section class="green-section">

									<div class="wrap sixcol">
										<?php the_field('apple_download_description'); ?>
									</div>	

								</section><!-- end green section -->	

								<section class="yellow-section">

									<div class="wrap sixcol">
											<span class="case-study-002 animated" data-picture data-alt="<?php the_field('apple_download_image_002_alt_tag'); ?>">
        										<span data-src="<?php the_field('apple_download_image_002_small'); ?>"></span>
										        <span data-src="<?php the_field('apple_download_image_002_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_002_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('apple_download_image_002_medium_retina'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_002_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('apple_download_image_002_small'); ?>" alt="<?php the_field('apple_download_image_002_alt_tag'); ?>">
										        </noscript>
    										</span>
									</div>	

								</section><!-- end yellow section -->

								<section class="blue-section">

									<div class="wrap sixcol">

											<span class="case-study-003 animated" data-picture data-alt="<?php the_field('apple_download_image_003_alt_tag'); ?>">
        										<span data-src="<?php the_field('apple_download_image_003_small'); ?>"></span>
										        <span data-src="<?php the_field('apple_download_image_003_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_003_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('apple_download_image_003_medium_retina'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_003_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('apple_download_image_003_small'); ?>" alt="<?php the_field('apple_download_image_003_alt_tag'); ?>">
										        </noscript>
    										</span>
									</div>	

								</section><!-- end blue section -->	

								<section class="green-section">

									<div class="wrap sixcol">
											<span class="case-study-004 animated" data-picture data-alt="<?php the_field('apple_download_image_004_alt_tag'); ?>">
        										<span data-src="<?php the_field('apple_download_image_004_small'); ?>"></span>
										        <span data-src="<?php the_field('apple_download_image_004_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_004_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('apple_download_image_004_medium_retina'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_004_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('apple_download_image_004_small'); ?>" alt="<?php the_field('apple_download_image_004_alt_tag'); ?>">
										        </noscript>
    										</span>
									</div>	

								</section><!-- end green section -->

								<section class="yellow-section">

									<div class="wrap sixcol">
											<span class="case-study-005 animated" data-picture data-alt="<?php the_field('apple_download_image_005_alt_tag'); ?>">
        										<span data-src="<?php the_field('apple_download_image_005_small'); ?>"></span>
										        <span data-src="<?php the_field('apple_download_image_005_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_005_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('apple_download_image_005_medium_retina'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('apple_download_image_005_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('apple_download_image_005_small'); ?>" alt="<?php the_field('apple_download_image_005_alt_tag'); ?>">
										        </noscript>
    										</span>
									</div>	

									<a href="<?php the_field('download_link'); ?>" class="download-button button" target="_blank">Download Files</a>

								</section><!-- end yellow section -->	

								<section class="white-section">

									<div class="wrap sixcol animated">
										<h4>Contact Me</h4>

										<p><span itemprop="telephone"><a href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('telephone_number'); ?></a></span></p>
										<p><script type="text/javascript">(function(){var ml="hr:ao/<lmf>\"c.iu=ske@n tq-",mi="63F<73AA@;83>7G4I7>EB;F01C9@;83>7G42>3ED>3E831H?CGGC=<48;F:>3ED>3E831H?CGGC=<48653:",o="";for(var j=0,l=mi.length;j<l;j++){o+=ml.charAt(mi.charCodeAt(j)-48);}document.write(o);}());</script><noscript>*protected email*</noscript></p>
										<ul>
											<li><a href="skype:ianmarquette.com?call" aria-hidden="true" class="icon-skype"></a></li>
											<li><a href="https://twitter.com/ianmarquette" aria-hidden="true" class="icon-twitter"></a></li>
											<li><a href="http://instagram.com/ianmarquette" aria-hidden="true" class="icon-instagram"></a></li>
											<li><a href="http://ca.linkedin.com/in/ianmarquette/" aria-hidden="true" class="icon-linkedin"></a></li>
											<li><a href="http://www.pinterest.com/ianmarquette/" aria-hidden="true" class="icon-pinterest"></a></li>
											<li><a href="https://github.com/ianmarquette" aria-hidden="true" class="icon-github"></a></li>
										</ul>	
									</div>	

								</section><!-- end white section -->									

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

			</div> <!-- end #content -->

<?php get_footer(); ?>


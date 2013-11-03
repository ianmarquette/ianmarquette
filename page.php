<?php get_header(); ?>

			<div id="content">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="home-section home-blue-block">

									<header class="wrap sixcol animated fadeIn">

										<div class="header-image"></div>

										<h1 itemprop="headline"><?php the_field('main_header'); ?></h1>

										<h2><?php the_field('sub-heading'); ?></h2>


										<div class="scroll-box">
											<a href="#" class="scroll-down"></a>
										</div>	

									</header> <!-- end article header -->

								</section><!-- end home section -->

								<section class="dark-grey-strip">

									<div class="wrap sixcol">
										<h4>Recent Projects</h4>
									</div>	

								</section>

								<section class="green-section home-green-block" id="work">

									<div class="wrap sixcol">
										<h3><?php the_field('project_001_title'); ?></h3>

											<span class="project-001 animated" data-picture data-alt="<?php the_field('project_001_image_alt_tag'); ?>">
        										<span data-src="<?php the_field('project_001_image_small'); ?>"></span>
										        <span data-src="<?php the_field('project_001_image_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_001_image_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('project_001_image_large'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_001_image_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('project_001_image_small'); ?>" alt="<?php the_field('project_001_image_alt_tag'); ?>">
										        </noscript>
    										</span>
										<p class="project-excerpt"><?php the_field('project_001_excerpt'); ?></p>
										<a class="project-button button" href="<?php the_field('project_001_link'); ?>">View Project</a>
									</div>	

								</section><!-- end green section -->	

								<section class="yellow-section">

									<div class="wrap sixcol">
										<h3><?php the_field('project_002_title'); ?></h3>

											<span class="project-002 animated" data-picture data-alt="<?php the_field('project_002_image_alt_tag'); ?>">
        										<span data-src="<?php the_field('project_002_image_small'); ?>"></span>
										        <span data-src="<?php the_field('project_002_image_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_002_image_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('project_002_image_large'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_002_image_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('project_002_image_small'); ?>" alt="<?php the_field('project_002_image_alt_tag'); ?>">
										        </noscript>
    										</span>
										<p class="project-excerpt"><?php the_field('project_002_excerpt'); ?></p>
										<a class="project-button button" href="<?php the_field('project_002_link'); ?>">View Project</a>
									</div>	

								</section><!-- end yellow section -->

								<section class="blue-section">

									<div class="wrap sixcol">
										<h3><?php the_field('project_003_title'); ?></h3>

											<span class="project-003 animated" data-picture data-alt="<?php the_field('project_003_image_alt_tag'); ?>">
        										<span data-src="<?php the_field('project_003_image_small'); ?>"></span>
										        <span data-src="<?php the_field('project_003_image_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_003_image_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('project_003_image_large'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_003_image_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('project_003_image_small'); ?>" alt="<?php the_field('project_003_image_alt_tag'); ?>">
										        </noscript>
    										</span>
										<p class="project-excerpt"><?php the_field('project_003_excerpt'); ?></p>
										<a class="project-button button" href="<?php the_field('project_003_link'); ?>">View Project</a>
									</div>	

								</section><!-- end blue section -->	

								<section class="green-section">

									<div class="wrap sixcol">
										<h3><?php the_field('project_004_title'); ?></h3>

											<span class="project-004 animated" data-picture data-alt="<?php the_field('project_004_image_alt_tag'); ?>">
        										<span data-src="<?php the_field('project_004_image_small'); ?>"></span>
										        <span data-src="<?php the_field('project_004_image_small_retina'); ?>"      data-media="(min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_004_image_medium'); ?>"        data-media="(min-width: 24em)"></span>
										        <span data-src="<?php the_field('project_004_image_large'); ?>"     data-media="(min-width: 24em) and (min-device-pixel-ratio: 1.5)"></span>
										        <span data-src="<?php the_field('project_004_image_large'); ?>"         data-media="(min-width: 38em)"></span> 

        										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										        <noscript>
										            <img src="<?php the_field('project_004_image_small'); ?>" alt="<?php the_field('project_004_image_alt_tag'); ?>">
										        </noscript>
    										</span>
										<p class="project-excerpt"><?php the_field('project_004_excerpt'); ?></p>
										<a class="project-button button" href="<?php the_field('project_004_link'); ?>">View Project</a>
									</div>	

								</section><!-- end green section -->

								<section class="dark-grey-section home-dark-grey-block" id="about">

									<div class="wrap sixcol animated">
										<h4>About Me</h4>

										<?php the_field('bio'); ?>
										<div class="bio-eye"></div>
									</div>	

								</section><!-- end dark grey section -->	

								<section class="white-section home-white-block" id="contact">

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

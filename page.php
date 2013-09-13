<?php get_header(); ?>

			<div id="content">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="blue-section">

									<header class="wrap sixcol">

										<div class="header-image"></div>

										<h1 itemprop="headline"><?php the_field('main_header'); ?></h1>

										<h2><?php the_field('sub-heading'); ?></h2>

										<a href="#" class="scroll-down"></a>

									</header> <!-- end article header -->

								</section>

								<section class="dark-grey-section">

									<div class="wrap sixcol">
										<h3>Recent Projects</h3>
									</div>	

								</section>

								<section class="green-section">

									<div class="wrap sixcol">
										<p>sdfsfsdfsdfddddddddddd</p>
									</div>	

								</section>		

								<section class="entry-content clearfix" itemprop="articleBody">

									<?php the_content(); ?>
							</section> <!-- end article section -->

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

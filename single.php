<?php
/**
 * 
 * Template Name: News
 * Template Post Type: post
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package goldenmonkey
 */

get_header();

$bg_image = '';
if (has_post_thumbnail()) {
	$bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}
?>

<div class="position-relative d-flex align-items-center justify-content-center bg-brand" style="min-height: 45vh;">
	<?php if ($bg_image): ?>
		<img src="<?php echo esc_url($bg_image); ?>" class="position-absolute w-100 h-100 top-0 start-0"
			style="object-fit: cover; z-index: 0;" alt="<?php echo esc_attr(get_the_title()); ?>">
		<!-- Overlay gelap agar teks lebih terbaca -->
		<div class="position-absolute w-100 h-100 top-0 start-0" style="background: rgba(0,0,0,0.5); z-index: 1;"></div>
	<?php endif; ?>

	<div class="container position-relative" style="z-index: 2;">
		<div class="row py-5 align-items-center">
			<div class="col-12 py-3 py-lg-5 text-center text-white">
				<div class="mobilespacer d-block d-lg-none"></div>
				<h1 class="fw-bold mb-0" style="text-shadow: 0 2px 10px rgba(0,0,0,0.5);"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="bg-white py-5">
	<main id="primary" class="container py-3">
		<div class="row gy-4 gx-lg-4">
			<?php if (have_posts()):
				while (have_posts()):
					the_post();

					get_template_part('template-parts/content', 'single');

				endwhile;

			else:

				get_template_part('template-parts/content', 'none');

			endif;
			?>
			<div class="col-12 col-lg-4">
				<div class="sticky-top recent-post">
					<h4 class="normal-text fw-bold pb-4 px-2 px-lg-0">GOLDEN MONKEY NEWS</h4>
					<?php
					$args = array(
						'orderby' => 'rand',
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'news',
						'posts_per_page' => 5
					);
					$the_pages = new WP_Query($args);

					if ($the_pages->have_posts()) { ?>
						<ul class="list-unstyled mb-0 px-2 px-lg-0">
							<?php
							while ($the_pages->have_posts()) {
								$the_pages->the_post();
								$size = 'thumbnail';
								?>
								<li class="pb-4 mb-4 row align-items-center">
									<?php if (has_post_thumbnail()): ?>
										<div class="col-3 col-lg-4">
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<?php the_post_thumbnail($size, array('class' => 'img-fluid')); ?>
											</a>
										</div>
									<?php endif; ?>
									<div class="col-9 col-lg-8">
										<a class="black" href="<?php the_permalink(); ?>" class="fw-bold"><?php the_title(); ?></a>
									</div>
								</li>
								<?php
							}
							?>
						</ul>
						<?php
					}
					wp_reset_query();
					?>
				</div>
			</div>
			<div id="container-next-prev" class="col-12 col-lg-8 py-4 px-2 px-lg-5">
				<div class="bg-light">
					<nav id="nav-single" class="d-block d-lg-flex align-items-start">
						<?php
						$prev_post = get_previous_post();
						if (!empty($prev_post)):
							$id = $prev_post->ID;
							$permalink = get_permalink($id);
						endif;
						?>
						<?php
						$next_post = get_next_post();
						if (!empty($next_post)):
							$nid = $next_post->ID;
							$permalink = get_permalink($nid);
						endif;
						?>
						<span class="nav-previous d-block w-50 p-4 text-center text-lg-start">
							<?php
							if (!empty($prev_post)):
								previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous<br>', 'goldenmonkey')); ?>
								<strong><a href="<?php echo $permalink; ?>">
										<?php echo $prev_post->post_title; ?>
									</a></strong>
							<?php endif; ?>
						</span>
						<span class="nav-next d-block w-50 p-4 text-center text-lg-end">
							<?php
							if (!empty($next_post)):
								next_post_link('%link', __('Next <span class="meta-nav">&rarr;</span><br>', 'goldenmonkey')); ?>
								<strong><a href="<?php echo $permalink; ?>"><?php echo $next_post->post_title; ?></a></strong>
							<?php endif; ?>
						</span>
					</nav>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div>

<?php
get_footer();

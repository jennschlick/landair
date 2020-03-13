<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php if(get_field('home_section_1_image') || get_field('home_section_1_content')) { ?>
			<div class="home-section-1 text-center"<?php if(get_field('home_section_1_image')) { ?> style="background-image: url(<?php the_field('home_section_1_image'); ?>);"<?php } ?>>
				<?php if(get_field('home_section_1_image')) { ?><img src="<?php the_field('home_section_1_image'); ?>" class="img-fluid d-block mb-5 mb-md-0" alt=""><?php } ?>
				<?php if(get_field('home_section_1_content')) { ?>
					<div class="container d-flex flex-column align-items-center justify-content-center">
						<?php the_field('home_section_1_content'); ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>

		<?php if(get_field('home_section_2_image') || get_field('home_section_2_content')) { ?>
			<div class="home-section-2 py-5">
				<div class="container">
  				<div class="row align-items-lg-center justify-content-center">
						<?php if(get_field('home_section_2_image')) { ?>
							<div class="col-md-5">
								<img src="<?php the_field('home_section_2_image'); ?>" class="img-fluid mx-auto d-block mb-5 mb-md-0" alt="">
							</div>
						<?php } ?>
						<?php if(get_field('home_section_2_content')) { ?>
							<div class="col-md-4">
								<?php the_field('home_section_2_content'); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php if(get_field('home_section_3_content')) { ?>
			<div class="home-section-3 text-center">
				<div class="container-fluid">
					<div class="row align-items-stretch">
						<?php if(get_field('home_section_3_content')) { ?>
							<div class="col-md-6 home-section-3-col-1 py-5 d-flex flex-column justify-content-center">
								<?php the_field('home_section_3_content'); ?>
							</div>
						<?php } ?>
						<?php if(get_field('home_section_3_icon_1_image') || get_field('home_section_3_icon_1_content') || get_field('home_section_3_icon_2_image') || get_field('home_section_3_icon_2_content') || get_field('home_section_3_icon_3_image') || get_field('home_section_3_icon_3_content') || get_field('home_section_3_icon_4_image') || get_field('home_section_3_icon_4_content')) { ?>
							<div class="col-md-6 home-section-3-col-2 py-5 d-flex flex-column justify-content-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-6">
											<?php if(get_field('home_section_3_icon_1_image')) { ?>
												<img src="<?php the_field('home_section_3_icon_1_image'); ?>" class="mb-4" alt="">
											<?php } ?>
											<?php if(get_field('home_section_3_icon_1_content')) { ?>
												<?php the_field('home_section_3_icon_1_content'); ?>
											<?php } ?>
										</div>
										<div class="col-md-6">
											<?php if(get_field('home_section_3_icon_2_image')) { ?>
												<img src="<?php the_field('home_section_3_icon_2_image'); ?>" class="mb-4" alt="">
											<?php } ?>
											<?php if(get_field('home_section_3_icon_2_content')) { ?>
												<?php the_field('home_section_3_icon_2_content'); ?>
											<?php } ?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<?php if(get_field('home_section_3_icon_3_image')) { ?>
												<img src="<?php the_field('home_section_3_icon_3_image'); ?>" class="mt-md-5 mb-4" alt="">
											<?php } ?>
											<?php if(get_field('home_section_3_icon_3_content')) { ?>
												<?php the_field('home_section_3_icon_3_content'); ?>
											<?php } ?>
										</div>
										<div class="col-md-6">
											<?php if(get_field('home_section_3_icon_4_image')) { ?>
												<img src="<?php the_field('home_section_3_icon_4_image'); ?>" class="mt-md-5 mb-4" alt="">
											<?php } ?>
											<?php if(get_field('home_section_3_icon_4_content')) { ?>
												<?php the_field('home_section_3_icon_4_content'); ?>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>

	<?php endwhile; ?>
<?php else : ?>

	<div class="container">
		<h1>404 &mdash; Page not found</h1>
		<p>This page cannot be found.</p>
	</div>

<?php endif; ?>

<?php get_footer(); ?>

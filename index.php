<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-5 py-5">
						<h1>404 &mdash; Page not found</h1>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6 align-self-end">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-default-image.jpg" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</header>
		<div class="container py-5">
			<p>This page cannot be found.</p>
		</div>
	</article>

<?php endif; ?>

<?php get_footer(); ?>

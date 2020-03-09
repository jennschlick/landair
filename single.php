<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<div class="container">
		<h1>404 &mdash; Page not found</h1>
		<p>This page cannot be found.</p>
	</div>

<?php endif; ?>

<?php get_footer(); ?>

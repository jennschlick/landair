<?php
/*
 * Styles
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<article>
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-5 py-5">
							<h1><?php the_title(); ?></h1>
							<?php if(get_field('page_subtitle')) { ?>
								<p><?php the_field('page_subtitle'); ?></p>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6 align-self-end">
							<?php if ( has_post_thumbnail() ) {
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
							    echo '<img src="$image[0]" />';
							} else {
							    echo '<img src="' . get_stylesheet_directory_uri() . '/img/header-default-image.jpg" class="img-fluid" />';
							} ?>
						</div>
					</div>
				</div>
			</header>
			<div class="container py-5">
				<h1>Heading 1</h1>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>

				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit
						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipiscing elit</li>
							<li>Ut eu turpis vel magna sagittis semper eu id massa</li>
						</ul>
					</li>
					<li>Ut eu turpis vel magna sagittis semper eu id massa</li>
				</ul>

				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit
						<ol>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipiscing elit</li>
							<li>Ut eu turpis vel magna sagittis semper eu id massa</li>
						</ol>
					</li>
					<li>Ut eu turpis vel magna sagittis semper eu id massa</li>
				</ol>

				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu turpis vel magna sagittis semper eu id massa. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.
					<cite>Lorem ipsum</cite>
				</blockquote>

				<h2>Heading 2</h2>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>

				<h3>Heading 3</h3>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>

				<h4>Heading 4</h4>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>

				<h5>Heading 5</h5>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>

				<h6>Heading 6</h6>

				<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> <em>adipiscing elit</em>. <a href="#">Ut eu turpis vel magna sagittis semper eu id massa</a>. Ut quis placerat urna. Donec sed sagittis lacus. Morbi malesuada ante tristique, venenatis tortor vitae, rutrum lectus. Integer bibendum mollis convallis. Proin ut neque id ex molestie pellentesque. Mauris quis velit ut sem fermentum poitor.</p>
			</div>
		</article>

	<?php endwhile; ?>
<?php else : ?>

	<div class="container">
		<h1>404 &mdash; Page not found</h1>
		<p>This page cannot be found.</p>
	</div>

<?php endif; ?>

<?php get_footer(); ?>

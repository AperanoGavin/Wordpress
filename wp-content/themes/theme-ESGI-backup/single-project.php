<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1 class="post-title"><?php the_title() ?></h1>
				<div class="post-image"><?= get_the_post_thumbnail() ?></div>
				<div class="post-content">
					<?php the_content() ?>
				</div>
			</div>

			<?php
				if(get_theme_mod('has_sidebar', false)){ ?>
					<div class="col-md-2 offset-md-1">
						<?php get_sidebar(); ?>
					</div>
			<?php } ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
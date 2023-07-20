<?php // Template d'un article seul ?>
<?php get_header() ?>

<main id="site-content">
	<div class="container single-post">
		<div class="row">
		<?php 
			if(get_theme_mod('has_sidebar', false)){?>
				<div class="col-md-2 offset-md-1">
				<form role="search" method="get" class="search-form" action="<?php echo custom_search_form_action( home_url( '/' ) ); ?>">
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
				</form>
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
			<div class="col-md-6 offset-md-3">
				<h1 class="post-title"><?php the_title() ?></h1>
				<div class="post-infos">
					<div>
						<?= get_the_author_meta('display_name', $post->post_author) ?>
					</div>
					<time>
						<?= wp_date('j F Y', strtotime($post->post_date)) ?>
					</time>
				</div>
				<div class="post-content">
					<?= get_the_post_thumbnail($post->ID, 'large'); ?>
					<?php the_content() ?>
				</div>
				<!-- affiche les tags , les commentaires et le formulaire pour les commentaires aussi -->
				<div class="post-tags">
					<?php the_tags() ?>

					<?php comments_number('Aucun commentaire', ' commentaire (1)', 'commentaires(%)') ?>

					<?php comments_template() ?>


				</div>
			</div>
			
		</div>
	</div>
</main>

<?php get_footer() ?>
<footer id="site-footer" class="col-md-6 offset-3">
	<div class="container">
		©2023 Edouard Sombié
	</div>
	<?php if (get_theme_mod('has_footer_search', true)) : ?>
	<div class="container">
		<?php get_search_form(); ?>
	</div>
	<?php endif; ?>
	<?php if (get_theme_mod('url_twitter')) : ?>
		<a href="<?php echo esc_url(get_theme_mod('url_twitter')); ?>">
			<?php echo getIcon('twitter'); ?>
		</a>
	<?php endif; ?>
	<?php if (get_theme_mod('url_facebook')) : ?>
		<a href="<?php echo esc_url(get_theme_mod('url_facebook')); ?>">
			<?php echo getIcon('facebook'); ?>
		</a>
	<?php endif; ?>
	<?php if (get_theme_mod('url_instagram')) : ?>
		<a href="<?php echo esc_url(get_theme_mod('url_instagram')); ?>">
			<?php echo getIcon('google'); ?>
		</a>
	<?php endif; ?>
	<?php if (get_theme_mod('url_linkedin')) : ?>
		<a href="<?php echo esc_url(get_theme_mod('url_linkedin')); ?>">
			<?php echo getIcon('url_linkedin'); ?>
		</a>
	<?php endif; ?>

	<?php
	wp_nav_menu(array(
		'theme_location' => 'footer-menu',
		'container' => 'nav',
		'container_class' => 'footer-menu',
		'menu_class' => 'nav',
		'fallback_cb' => false
	));
	?>
</footer>

<?php wp_footer(); ?>
</body>
</html>

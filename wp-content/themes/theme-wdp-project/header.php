<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="mt-3 mb-3">
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center justify-content-center">
			<div class="header-section-logo">
				<?php $image_header = get_theme_mod('image_header'); ?>
					<?php if ($image_header) : ?>
						<img src="<?php echo $image_header; ?>" alt="Image du header">
					<?php endif; ?>
			</div>

			<nav class="main-menu navbar navbar-expand-md">
				<button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-collapse" aria-controls="menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
 				<?php
					$menu_url = get_template_directory_uri() . '/src/images/svg/menu.svg';
					$menu = '<img src="' . $menu_url . '" alt="Menu">';
					echo $menu;
					?>

				</button>

				<div class="collapse navbar-collapse" id="menu-collapse">
					<!-- Le contenu de votre menu -->
					<?php
					if (has_nav_menu('primary_menu')) {
						wp_nav_menu([
							'theme_location' => 'primary_menu',
							'container' => false,
							'menu_class' => 'navbar-nav text-sm', // Ajout de la classe text-sm
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth' => 2,
							'link_before' => '<span class="nav-link-text">',
							'link_after' => '</span>',
						]);
					}
					?>
				</div>
			</nav>
		</div>
	</div>
</header>




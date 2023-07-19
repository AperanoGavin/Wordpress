<?php
/*
Template Name: esgi-customize

*/



if(!function_exists('allow_svg_uploads')) {
	function allow_svg_uploads($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'allow_svg_uploads');
}


// Déclaration des emplacements de menu

if(!function_exists('esgi_init')){
	function esgi_init(){
		register_nav_menus([
					'primary_menu' => __('Menu principal', 'ESGI') // chaine traduite dans le domaine 'ESGI'
				]);
	}
	add_action('init', 'esgi_init');
}

// Ajout des supports de theme
if(!function_exists('esgi_after_setup_theme')){
	function esgi_after_setup_theme(){
		add_theme_support('custom-logo');
	}
	add_action('after_setup_theme','esgi_after_setup_theme');
}

if(!function_exists('enqueue_bootstrap')){
	function enqueue_bootstrap() {
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/bootstrap/css/bootstrap.css');
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/src/bootstrap/js/bootstrap.js', array('jquery'), '5.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
}

// chargement de la feuille de style


if(!function_exists('esgi_enqueue_assets')){
	function esgi_enqueue_assets(){
		wp_enqueue_style('main', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
}


if(!function_exists('add_bootstrap_classes_to_menu')){
	function add_bootstrap_classes_to_menu($items, $args) {
		if ($args->theme_location == 'primary_menu') {
			$items = str_replace('class="menu-item', 'class="menu-item nav-item', $items);
			$items = str_replace('<a', '<a class="nav-link"', $items);
			//change la couleur du menu pour le mettre en noir
			$items = str_replace('class="nav-link"', 'class="nav-link text-dark"', $items);
			//deplace le menu un peu plus à gauche
			$items = str_replace('class="nav-link text-dark"', 'class="nav-link text-dark ms-3"', $items);
			//encore un peu plus à gauche
			$items = str_replace('class="nav-link text-dark ms-3"', 'class="nav-link text-dark ms-5"', $items);
		}
		return $items;
	}
	add_filter('wp_nav_menu_items', 'add_bootstrap_classes_to_menu', 10, 2);
}


if(!function_exists('getIcon')){
		function getIcon($icon){

			$twitter = '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M18 1.6875C17.325 2.025 16.65 2.1375 15.8625 2.25C16.65 1.8 17.2125 1.125 17.4375 0.225C16.7625 0.675 15.975 0.9 15.075 1.125C14.4 0.45 13.3875 0 12.375 0C10.4625 0 8.775 1.6875 8.775 3.7125C8.775 4.05 8.775 4.275 8.8875 4.5C5.85 4.3875 3.0375 2.925 1.2375 0.675C0.9 1.2375 0.7875 1.8 0.7875 2.5875C0.7875 3.825 1.4625 4.95 2.475 5.625C1.9125 5.625 1.35 5.4 0.7875 5.175C0.7875 6.975 2.025 8.4375 3.7125 8.775C3.375 8.8875 3.0375 8.8875 2.7 8.8875C2.475 8.8875 2.25 8.8875 2.025 8.775C2.475 10.2375 3.825 11.3625 5.5125 11.3625C4.275 12.375 2.7 12.9375 0.9 12.9375C0.5625 12.9375 0.3375 12.9375 0 12.9375C1.6875 13.95 3.6 14.625 5.625 14.625C12.375 14.625 16.0875 9 16.0875 4.1625C16.0875 4.05 16.0875 3.825 16.0875 3.7125C16.875 3.15 17.55 2.475 18 1.6875Z" fill="#1A1A1A"/>
		</svg>';	

			$facebook = '<svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#1A1A1A"/>
		</svg>';
			
			$google = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path id="Vector" d="M9.12143 7.71429V10.8H14.3929C14.1357 12.0857 12.85 14.6571 9.25 14.6571C6.16429 14.6571 3.72143 12.0857 3.72143 9C3.72143 5.91429 6.29286 3.34286 9.25 3.34286C11.05 3.34286 12.2071 4.11429 12.85 4.75714L15.2929 2.44286C13.75 0.9 11.6929 0 9.25 0C4.23572 0 0.25 3.98571 0.25 9C0.25 14.0143 4.23572 18 9.25 18C14.3929 18 17.8643 14.4 17.8643 9.25714C17.8643 8.61428 17.8643 8.22857 17.7357 7.71429H9.12143Z" fill="#1A1A1A"/>
		</svg>';

			$linkedin = '<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M17.9698 0H1.64687C1.19966 0 0.864258 0.335404 0.864258 0.782609V17.2174C0.864258 17.5528 1.19966 17.8882 1.64687 17.8882H18.0816C18.5289 17.8882 18.8643 17.5528 18.8643 17.1056V0.782609C18.7525 0.335404 18.4171 0 17.9698 0ZM3.54749 15.205V6.70807H6.23072V15.205H3.54749ZM4.8891 5.59006C3.99469 5.59006 3.32389 4.80745 3.32389 4.02484C3.32389 3.13043 3.99469 2.45963 4.8891 2.45963C5.78351 2.45963 6.45432 3.13043 6.45432 4.02484C6.34252 4.80745 5.67171 5.59006 4.8891 5.59006ZM16.0692 15.205H13.386V11.0683C13.386 10.0621 13.386 8.8323 12.0444 8.8323C10.7028 8.8323 10.4792 9.95031 10.4792 11.0683V15.3168H7.79593V6.70807H10.3674V7.82609C10.7028 7.15528 11.5972 6.48447 12.827 6.48447C15.5102 6.48447 15.9574 8.27329 15.9574 10.5093V15.205H16.0692Z" fill="#1A1A1A"/>
		</svg>';

			return $$icon;
	}
}



if(!function_exists('register_customizer_sections')){
	function register_customizer_sections($wp_customize) {
		// Section du titre
		$wp_customize->add_section('title-section', array(
			'title' => 'Section du titre',
			'priority' => 10,
		));

		// Section de l'image
		$wp_customize->add_section('image-section', array(
			'title' => 'Section de l\'image',
			'priority' => 20,
		));

		// Section de la description
		$wp_customize->add_section('description-section', array(
			'title' => 'Section de la description',
			'priority' => 30,
		));

		// Section de l'image à gauche
		$wp_customize->add_section('image-left-section', array(
			'title' => 'Section de l\'image à gauche',
			'priority' => 40,
		));

		// Section des services
		$wp_customize->add_section('services-section', array(
			'title' => 'Section des services',
			'priority' => 50,
		));

		// Section des partenaires
		$wp_customize->add_section('partners-section', array(
			'title' => 'Section des partenaires',
			'priority' => 60,
		));

		//section copr-section

		$wp_customize->add_section('copr-section', array(
			'title' => 'Section du footer pour copr-section',
			'priority' => 70,
		));

		//section  image-section-service-page

		$wp_customize->add_section('image-section-service-page', array(
			'title' => 'Section de l\'image',
			'priority' => 80,
		));

		//section contact-section

		$wp_customize->add_section('contact-section', array(
			'title' => 'Section de contact',
			'priority' => 90,
		));


		//section info-contact

		$wp_customize->add_section('contact-info-section', array(
			'title' => 'Section d\'information de contact',
			'priority' => 100,
		));

		//ajoute le footer

		$wp_customize->add_section('footer-section', array(
			'title' => 'Section du footer',
			'priority' => 110,
		));

		//ajout du header 

		$wp_customize->add_section('header-section-logo', array(
			'title' => 'Section du header logo',
			'priority' => 120,
		));


		// Ajoutez d'autres sections si nécessaire
	}
	add_action('customize_register', 'register_customizer_sections');
}


if(!function_exists('register_customizer_settings')){
	function register_customizer_settings($wp_customize) {
		// Titre
		$wp_customize->add_setting('homepage_title', array(
			'default' => 'Titre de la page d\'accueil',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('homepage_title', array(
			'label' => 'Titre de la page d\'accueil',
			'section' => 'title-section',
			'settings' => 'homepage_title',
			'type' => 'text',
		));

		// Image de mise en avant
		$wp_customize->add_setting('homepage_featured_image', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_featured_image', array(
			'label' => 'Image de mise en avant',
			'section' => 'image-section',
			'settings' => 'homepage_featured_image',
		)));

		// Description à propos de nous
		$wp_customize->add_setting('about_title', array(
			'default' => 'À propos de nous',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_title', array(
			'label' => 'Titre de la section à propos de nous',
			'section' => 'description-section',
			'settings' => 'about_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('about_content', array(
			'default' => 'Contenu à propos de nous',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_content', array(
			'label' => 'Contenu à propos de nous',
			'section' => 'description-section',
			'settings' => 'about_content',
			'type' => 'textarea',
		));

		// Image à gauche
		$wp_customize->add_setting('left_image', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_left', array(
			'label' => 'Image à gauche',
			'section' => 'image-left-section',
			'settings' => 'left_image',
		)));

		//description à droite

		$wp_customize->add_setting('right_description', array(
			'default' => 'Description à droite',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('right_description', array(
			'label' => 'Description à droite',
			'section' => 'image-left-section',
			'settings' => 'right_description',
			'type' => 'textarea',
		));

		//ajoute 3 titre et 3 content pour la section image-left-section about_title_1 
		
		$wp_customize->add_setting('about_title_1', array(
			'default' => 'Titre 1',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_title_1', array(
			'label' => 'Titre 1',
			'section' => 'image-left-section',
			'settings' => 'about_title_1',
			'type' => 'text',
		));

		$wp_customize->add_setting('about_content_1', array(
			'default' => 'Contenu 1',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_content_1', array(
			'label' => 'Contenu 1',
			'section' => 'image-left-section',
			'settings' => 'about_content_1',
			'type' => 'textarea',
		));


		$wp_customize->add_setting('about_title_2', array(
			'default' => 'Titre 2',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_title_2', array(
			'label' => 'Titre 2',
			'section' => 'image-left-section',
			'settings' => 'about_title_2',
			'type' => 'text',
		));

		$wp_customize->add_setting('about_content_2', array(
			'default' => 'Contenu 2',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_content_2', array(
			'label' => 'Contenu 2',
			'section' => 'image-left-section',
			'settings' => 'about_content_2',
			'type' => 'textarea',
		));


		$wp_customize->add_setting('about_title_3', array(
			'default' => 'Titre 3',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_title_3', array(
			'label' => 'Titre 3',
			'section' => 'image-left-section',
			'settings' => 'about_title_3',
			'type' => 'text',
		));

		$wp_customize->add_setting('about_content_3', array(
			'default' => 'Contenu 3',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('about_content_3', array(
			'label' => 'Contenu 3',
			'section' => 'image-left-section',
			'settings' => 'about_content_3',
			'type' => 'textarea',
		));




		// Services
		$wp_customize->add_setting('services_title', array(
			'default' => 'Nos services',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('services_title', array(
			'label' => 'Titre de la section services',
			'section' => 'services-section',
			'settings' => 'services_title',
			'type' => 'text',
		));

		//service_image_1
		$wp_customize->add_setting('service_image_1', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_1', array(
			'label' => 'Image du service 1',
			'section' => 'services-section',
			'settings' => 'service_image_1',
		)));

		$wp_customize->add_setting('service_image_1_title', array(
			'default' => 'Manager',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_1_title', array(
			'label' => 'Titre du service 1',
			'section' => 'services-section',
			'settings' => 'service_image_1_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_1_phone', array(
			'default' => '+33 1 53 31 25 23',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_1_phone', array(
			'label' => 'Numéro de téléphone du service 1',
			'section' => 'services-section',
			'settings' => 'service_image_1_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_1_email', array(
			'default' => 'info@esgi.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_1_email', array(
			'label' => 'Adresse e-mail du service 1',
			'section' => 'services-section',
			'settings' => 'service_image_1_email',
			'type' => 'text',
		));

		//service_image_2

		$wp_customize->add_setting('service_image_2', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_2', array(
			'label' => 'Image du service 2',
			'section' => 'services-section',
			'settings' => 'service_image_2',
		)));

		$wp_customize->add_setting('service_image_2_title', array(
			'default' => 'Manager',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_2_title', array(
			'label' => 'Titre du service 2',
			'section' => 'services-section',
			'settings' => 'service_image_2_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_2_phone', array(
			'default' => '+33 1 53 31 25 23',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_2_phone', array(
			'label' => 'Numéro de téléphone du service 2',
			'section' => 'services-section',
			'settings' => 'service_image_2_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_2_email', array(
			'default' => 'info@esgi.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_2_email', array(
			'label' => 'Adresse e-mail du service 2',
			'section' => 'services-section',
			'settings' => 'service_image_2_email',
			'type' => 'text',
		));

		//service_image_3

		$wp_customize->add_setting('service_image_3', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_3', array(
			'label' => 'Image du service 3',
			'section' => 'services-section',
			'settings' => 'service_image_3',
		)));

		$wp_customize->add_setting('service_image_3_title', array(
			'default' => 'Manager',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_3_title', array(
			'label' => 'Titre du service 3',
			'section' => 'services-section',
			'settings' => 'service_image_3_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_3_phone', array(
			'default' => '+33 1 53 31 25 23',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_3_phone', array(
			'label' => 'Numéro de téléphone du service 3',
			'section' => 'services-section',
			'settings' => 'service_image_3_phone',
			'type' => 'text',
		));
		
		$wp_customize->add_setting('service_image_3_email', array(
			'default' => 'info@esgi.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_3_email', array(
			'label' => 'Adresse e-mail du service 3',
			'section' => 'services-section',
			'settings' => 'service_image_3_email',
			'type' => 'text',
		));


		//service_image_4

		$wp_customize->add_setting('service_image_4', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_4', array(
			'label' => 'Image du service 4',
			'section' => 'services-section',
			'settings' => 'service_image_4',
		)));

		$wp_customize->add_setting('service_image_4_title', array(
			'default' => 'Manager',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_4_title', array(
			'label' => 'Titre du service 4',
			'section' => 'services-section',
			'settings' => 'service_image_4_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_4_phone', array(
			'default' => '+33 1 53 31 25 23',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_4_phone', array(
			'label' => 'Numéro de téléphone du service 4',
			'section' => 'services-section',
			'settings' => 'service_image_4_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('service_image_4_email', array(
			'default' => 'info@esgi.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('service_image_4_email', array(
			'label' => 'Adresse e-mail du service 4',
			'section' => 'services-section',
			'settings' => 'service_image_4_email',
			'type' => 'text',
		));

		//partners_title
		$wp_customize->add_setting('partners_title', array(
			'default' => 'Nos partenaires',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('partners_title', array(
			'label' => 'Titre de la section partenaires',
			'section' => 'partners-section',
			'settings' => 'partners_title',
			'type' => 'text',
		));
		

		//partner_logo_1
		
		$wp_customize->add_setting('partner_logo_1', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_1', array(
			'label' => 'Logo du partenaire 1',
			'section' => 'partners-section',
			'settings' => 'partner_logo_1',
		)));

		//partner_logo_2	
		$wp_customize->add_setting('partner_logo_2', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_2', array(
			'label' => 'Logo du partenaire 2',
			'section' => 'partners-section',
			'settings' => 'partner_logo_2',
		)));
		

		$wp_customize->add_setting('partner_logo_3', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_3', array(
			'label' => 'Logo du partenaire 3',
			'section' => 'partners-section',
			'settings' => 'partner_logo_3',
		)));


		$wp_customize->add_setting('partner_logo_4', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_4', array(
			'label' => 'Logo du partenaire 4',
			'section' => 'partners-section',
			'settings' => 'partner_logo_4',
		)));
		$wp_customize->add_setting('partner_logo_5', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_5', array(
			'label' => 'Logo du partenaire 5',
			'section' => 'partners-section',
			'settings' => 'partner_logo_5',
		)));
		$wp_customize->add_setting('partner_logo_6', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_6', array(
			'label' => 'Logo du partenaire 6',
			'section' => 'partners-section',
			'settings' => 'partner_logo_6',
		)));

		//sur la page services  
		
		$wp_customize->add_setting('copr_title', array(
			'default' => 'Notre copr',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('copr_title', array(
			'label' => 'Titre de la section copr',
			'section' => 'copr-section',
			'settings' => 'copr_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('copr_description', array(
			'default' => 'Description de notre copr',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('copr_description', array(
			'label' => 'Description de la section copr',
			'section' => 'copr-section',
			'settings' => 'copr_description',
			'type' => 'textarea',
		));

		$wp_customize->add_setting('image_page_services', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_page_services', array(
			'label' => 'Image de la page services',
			'section' => 'copr-section',
			'settings' => 'image_page_services',
		)));
		

		//section contact

		$wp_customize->add_setting('contact_title', array(
			'default' => 'Nous contacter',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_title', array(
			'label' => 'Titre de la section contact',
			'section' => 'contact-section',
			'settings' => 'contact_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_description', array(
			'default' => 'Description de la section contact',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_description', array(
			'label' => 'Description de la section contact',
			'section' => 'contact-section',
			'settings' => 'contact_description',
			'type' => 'textarea',
		));

		//info-contact

		$wp_customize->add_setting('contact_info_1_title', array(
			'default' => 'Informations de contact',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_1_title', array(
			'label' => 'Titre de la section informations de contact',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_1_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_1_phone', array(
			'default' => '06 00 00 00 00',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_1_phone', array(
			'label' => 'Numéro de téléphone',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_1_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_1_email', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_1_email', array(
			'label' => 'Adresse email',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_1_email',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_2_title', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_2_title', array(
			'label' => 'Titre de la section informations de contact',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_2_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_2_phone', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_2_phone', array(
			'label' => 'Numéro de téléphone',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_2_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_2_email', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_2_email', array(
			'label' => 'Adresse email',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_2_email',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_3_title', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_3_title', array(
			'label' => 'Titre de la section informations de contact',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_3_title',
			'type' => 'text',
		));


		$wp_customize->add_setting('contact_info_3_phone', array(
			'default' => '',
			'transport' => 'refresh',
		));


		$wp_customize->add_control('contact_info_3_phone', array(
			'label' => 'Numéro de téléphone',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_3_phone',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_info_3_email', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_info_3_email', array(
			'label' => 'Adresse email',
			'section' => 'contact-info-section',
			'settings' => 'contact_info_3_email',
			'type' => 'text',
		));


		//section contact-form

		$wp_customize->add_setting('contact_form_title', array(
			'default' => 'Formulaire de contact',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_form_title', array(
			'label' => 'Titre de la section formulaire de contact',
			'section' => 'contact-form-section',
			'settings' => 'contact_form_title',
			'type' => 'text',
		));

		$wp_customize->add_setting('contact_form_description', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('contact_form_description', array(
			'label' => 'Description de la section formulaire de contact',
			'section' => 'contact-form-section',
			'settings' => 'contact_form_description',
			'type' => 'textarea',
		));

		//footer(footer-section)

		$wp_customize->add_setting('image_footer', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_footer', array(
			'label' => 'Image du footer',
			'section' => 'footer-section',
			'settings' => 'image_footer',
		)));


		$wp_customize->add_setting('image_header', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_header', array(
			'label' => 'Image du header',
			'section' => 'header-section-logo',
			'settings' => 'image_header',
		)));



	}

	add_action('customize_register', 'register_customizer_settings');
}


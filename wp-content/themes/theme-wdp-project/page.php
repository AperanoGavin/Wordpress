<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <?php
    $slug = get_post_field('post_name', get_queried_object_id()); // Récupère le slug de la page
    if ($slug === 'about-us') {
        get_template_part('page-about-us'); // Utilisez le nom de votre fichier de modèle de page personnalisé pour About Us
    } elseif ($slug === 'services') {
        get_template_part('page-services'); // Utilisez le nom de votre fichier de modèle de page personnalisé pour Services
    } elseif ($slug === 'partners') {
        get_template_part('page-partners'); // Utilisez le nom de votre fichier de modèle de page personnalisé pour Partners
    } elseif ($slug === 'contacts') {
        get_template_part('page-contacts'); // Utilisez le nom de votre fichier de modèle de page personnalisé pour Contacts
    } else {
        // Utilisez le modèle de page par défaut pour les autres pages
        the_title('<h1>', '</h1>');
        the_content();
    }
    ?>
<?php endwhile; ?>

<?php get_footer(); ?>

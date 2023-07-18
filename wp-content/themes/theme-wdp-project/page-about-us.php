<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header(); ?>

<section class="title-section">
    <div class="container">
        <h1><?php echo get_theme_mod('homepage_title', 'Titre de la page d\'accueil'); ?></h1>
    </div>
</section>

<section class="image-section">
    <div class="container">
        <?php $featured_image = get_theme_mod('homepage_featured_image'); ?>
        <?php if ($featured_image) : ?>
            <img src="<?php echo $featured_image; ?>" alt="Image de mise en avant" class="custom-image">
        <?php endif; ?>
    </div>
</section>

<section class="description-section">
    <div class="container">
        <h4><?php echo get_theme_mod('about_title', 'À propos de nous'); ?></h4>
        <p><?php echo get_theme_mod('about_content', 'Contenu à propos de nous'); ?></p>
    </div>
</section>

<section class="image-left-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $left_image = get_theme_mod('left_image'); ?>
                <?php if ($left_image) : ?>
                    <img src="<?php echo $left_image; ?>" alt="Image de gauche">
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <p><?php echo get_theme_mod('right_description', 'Description de droite'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <h4><?php echo get_theme_mod('services_title', 'Nos Services'); ?></h4>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_1'); ?>" alt="Image 1">
                <div class="service-info">
                    <p style="color:white;"><?php echo get_theme_mod('service_image_1_title', 'Manager'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_1_phone', '+33 1 53 31 25 23'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_1_email', 'info@esgi.com'); ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_2'); ?>" alt="Image 2">
                <div class="service-info">
                    <p style="color:white;"><?php echo get_theme_mod('service_image_2_title', 'Manager'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_2_phone', '+33 1 53 31 25 23'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_2_email', 'info@esgi.com'); ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_3'); ?>" alt="Image 3">
                <div class="service-info">
                    <p style="color:white;"><?php echo get_theme_mod('service_image_3_title', 'Manager'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_3_phone', '+33 1 53 31 25 23'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_3_email', 'info@esgi.com'); ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_4'); ?>" alt="Image 4">
                <div class="service-info">
                    <p style="color:white;"><?php echo get_theme_mod('service_image_4_title', 'Manager'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_4_phone', '+33 1 53 31 25 23'); ?></p>
                    <p style="color:white;"><?php echo get_theme_mod('service_image_4_email', 'info@esgi.com'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="partners-section">
    <div class="container">
        <h4><?php echo get_theme_mod('partners_title', 'Nos Partenaires'); ?></h4>
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_1'); ?>" alt="Logo 1">
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_2'); ?>" alt="Logo 2">
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_3'); ?>" alt="Logo 3">
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_4'); ?>" alt="Logo 4">
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_5'); ?>" alt="Logo 5">
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_theme_mod('partner_logo_6'); ?>" alt="Logo 6">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

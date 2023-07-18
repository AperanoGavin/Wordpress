<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>

<section class="services-section">
    <div class="container">
        <h4><?php echo get_theme_mod('services_title', 'Nos Services'); ?></h4>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_1'); ?>" alt="Image 1">
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_2'); ?>" alt="Image 2">
            </div>
            <div class="col-md-3">
                <img src="<?php echo  get_theme_mod('service_image_3'); ?>" alt="Image 3">
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_theme_mod('service_image_4'); ?>" alt="Image 4">
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

<section class="copr-section">
    <div class="container">
        <h4><?php echo get_theme_mod('copr_title', 'Notre copr'); ?></h4>
        <div class="row">
            <div class="col-md-12">
                <p><?php echo get_theme_mod('copr_description', 'Description de notre copr'); ?></p>
            </div>
        </div>
    </div>
</section>


<section class="image-section-service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_theme_mod('image_page_services'); ?>" alt="Image page services">
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>

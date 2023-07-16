<?php get_header(); ?>

<section class="contact-section">
    <div class="container">
        <h4><?php echo get_theme_mod('contact_title', 'Contactez-nous'); ?></h4>
        <p><?php echo get_theme_mod('contact_description', 'Description de contact'); ?></p>
    </div>
</section>


<section class="contact-info-section">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <p style="color:white;"><?php echo get_theme_mod('contact_info_1_title', 'Manager'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_1_phone', '+33 1 53 31 25 23'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_1_email', 'info@esgi.com"'); ?></p>
            </div>
            <div class="col-6 col-md-3">
                <p style="color:white;"><?php echo get_theme_mod('contact_info_2_title', 'Manager'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_2_phone', '+33 1 53 31 25 23'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_2_email', 'info@esgi.com'); ?></p>
            </div>
            <div class="col-6 col-md-3">
                <p style="color:white;"><?php echo get_theme_mod('contact_info_3_title', 'Manager'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_3_phone', '+33 1 53 31 25 23'); ?></p>
                <p style="color:white;"><?php echo get_theme_mod('contact_info_3_email', 'info'); ?></p>
            </div>
        </div>
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

<section class="contact-form">
    <div class="container">
        <h4><?php echo get_theme_mod('contact_form_title', 'Contactez-nous'); ?></h4>
        <p><?php echo get_theme_mod('contact_form_description', 'Description de contact'); ?></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="subject" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="subject" id="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="subject" id="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</section>

   
<?php get_footer(); ?>

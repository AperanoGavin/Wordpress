<footer class="footer-section" style="background-color: #050A3A">
	<div class="container">
		<div class="row">
			<?php if (!is_404()) : ?>
				<div class="col-12 col-md-6">
					<?php $image_footer = get_theme_mod('image_footer'); ?>
					<?php if ($image_footer) : ?>
						<img src="<?php echo $image_footer; ?>" alt="Image de gauche">
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="col-6 col-md-3">
				<p style="color:white;"><?php echo get_theme_mod('poste_name_footer_1', 'Manager') ?></p>
				<p style="color:white;"><?php echo get_theme_mod('phone_number_footer_1', '+33 1 53 31 25 23') ?></p>
				<p style="color:white;"><?php echo get_theme_mod('email_footer_1', 'info@esgi.com') ?></p>
	
			</div>
			<div class="col-6 col-md-3">
				<p style="color:white;"><?php echo get_theme_mod('poste_name_footer_2', 'Manager') ?></p>
				<p style="color:white;"><?php echo get_theme_mod('phone_number_footer_2', '+33 1 53 31 25 23') ?></p>
				<p style="color:white;"><?php echo get_theme_mod('email_footer_2', 'info@esgi.com') ?></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

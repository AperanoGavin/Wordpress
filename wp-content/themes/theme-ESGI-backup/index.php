<?php get_header() ?>

<main id="site-content">
	<div class="container">
		<?php
		get_template_part('template-parts/identity-card');
		?>
		<div id="post-list-wrapper">
		<?php 
		if(!is_front_page()){
			get_template_part('template-parts/posts-list');
		}
		?>
		</div>
	</div>
</main>

<?php get_footer() ?> 
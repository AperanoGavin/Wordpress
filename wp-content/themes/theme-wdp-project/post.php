<?php /* Template Name: Liste des Articles */ ?>
<?php get_header(); ?>

<main id="site-content">
	<div class="container single-post">
		<div class="row">
			<?php if ( get_theme_mod( 'has_sidebar', false ) ) : ?>
				<div class="col-md-2 offset-md-1">
					<form role="search" method="get" class="search-form" action="<?php echo custom_search_form_action( home_url( '/' ) ); ?>">
						<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						<button type="submit" class="btn btn-primary mt-2"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
					</form>
					<?php get_sidebar(); ?>
				</div>
			<?php endif; ?>
			<div class="<?php echo ( get_theme_mod( 'has_sidebar', false ) ) ? 'col-md-8' : 'col-md-10 offset-md-1'; ?>">
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type'      => 'post', // Change 'post' to your custom post type if needed.
					'posts_per_page' => 2, // Adjust the number of posts per page as needed.
					'paged'          => $paged,
				);
				$custom_query = new WP_Query( $args );
				
				if ( $custom_query->have_posts() ) :
					while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<!-- Customize the display of each post -->
						<div class="card mb-4">
							<div class="card-body">
								<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="card-text">
									<p class="text-muted"><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?> - <?php echo wp_date( 'j F Y', strtotime( $post->post_date ) ); ?></p>
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					<?php endwhile;
					
					// Pagination links
					$big = 999999999; // Set to a very large number.
					echo '<div class="pagination">';
					echo paginate_links( array(
						'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'  => '?paged=%#%',
						'current' => max( 1, get_query_var( 'paged' ) ),
						'total'   => $custom_query->max_num_pages,
					) );
					echo '</div>';
					
				else :
					// No posts found.
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>

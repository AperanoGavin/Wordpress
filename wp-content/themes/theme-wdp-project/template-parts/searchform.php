
<?php
get_header();
?>

<main id="site-content">
    <div class="container">
        <header class="archive-header">
            <h1 class="archive-title"><?php _e( 'Search Results for:', 'your-theme-textdomain' ); ?> <?php echo get_search_query(); ?></h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2 class="search-result-title"><?php the_title(); ?></h2>
                <div class="search-result-excerpt"><?php the_excerpt(); ?></div>
                <hr>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no results found.', 'your-theme-textdomain' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
?>

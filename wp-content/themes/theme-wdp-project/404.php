<?php
get_header();
?>

<style>
body {
    background-color: #050A3A;
  }
  /* Styles personnalisés pour la barre de recherche */
  .error-404 .search-form {
    display: flex;
    align-items: center;
  }

  .error-404 .search-form input[type="search"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .error-404 .search-form input[type="submit"] {
    background-color: #050A3A;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
  }

  .error-404 .search-form input[type="submit"]:hover {
    background-color: #032650;
  }
</style>

<header class="page-header alignwide">
  <h1 class="page-title"><?php esc_html_e( '404 Error.', 'twentytwentyone' ); ?></h1>
</header><!-- .page-header -->

<div class="error-404 not-found default-max-width">
  <div class="page-content">
    <p><?php esc_html_e( 'The page you were looking for couldn\'t be found. Maybe try a search?', 'twentytwentyone' ); ?></p>

    <?php get_search_form(); // Ajoute le formulaire de recherche ?>
  </div><!-- .page-content -->
</div><!-- .error-404 -->

<?php
get_footer();

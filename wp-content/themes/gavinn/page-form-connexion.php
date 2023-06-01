
<?php
/*
Template Name: Custom Connection Form
*/

ini_set('display_errors', 1); error_reporting(E_ALL);
if(isset($_POST['submit'])) {
    // retrieve form data
    $name = sanitize_text_field($_POST['name']);
    $password = $_POST['password'];

    $errors = array();
    if(empty($name)) {
        $errors[] = 'Please enter your name';
    }
    if(empty($password)) {
        $errors[] = 'Please enter your password';
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_user';
    $user = $wpdb->get_row($wpdb->prepare("SELECT * FROM wp_custom_user WHERE name = %s", $name));

    
    if ($user && wp_check_password($password, $user->password)) {
        // Connexion réussie
        wp_set_auth_cookie($user->ID);
        wp_redirect(home_url('/')); // Rediriger vers la page d'accueil ou toute autre page de votre choix
        exit;
    } else {
        // Identifiants incorrects
        $error_message = 'Identifiants invalides. Veuillez réessayer.';
    }
}


get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(!is_user_logged_in()): ?>
        <h1>Connection Form</h1>
        <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
            <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <form id="connection-form" method="post" action="" >
            <?php // wp_nonce_field('custom-connection-form'); ?>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Connect</button>
        </form>
        <?php else: ?>
        <p>You are already connected as <?php echo wp_get_current_user()->user_login; ?></p>
        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer() ?>
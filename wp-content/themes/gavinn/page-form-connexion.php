
<?php
/*
Template Name: Custom Connection Form
*/

if(isset($_POST['submit'])) {
    // retrieve form data
    $name = $_POST['name'];
    $password = $_POST['password'];

    // validate form data
    $errors = array();
    if(empty($name)) {
        $errors[] = 'Please enter your username';
    }
    if(empty($password)) {
        $errors[] = 'Please enter your password';
    }

    // check if form submission is valid
    if(wp_verify_nonce($_POST['_wpnonce'], 'custom-connection-form')) {
        global $wpdb;
        // verifier si l'utilisateur existe dans la table wp_custom_user
        $user = $wpdb->get_results("SELECT * FROM wp_custom_user WHERE name = ". $name ." AND password = ". $password ."  ") ;

        if($user !== NULL ) {
            // connecter l'utilisateur
            wp_set_auth_cookie($user->id);
            wp_redirect(home_url());
            exit;
        } else {
            $errors[] = 'Invalid username or password';
        }
       
    } else {
        $errors[] = 'Invalid form submission';
    }
}


get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(!is_user_logged_in()): ?>
        <h1>Connection Form</h1>
        <form id="connection-form" method="post">
            <?php wp_nonce_field('custom-connection-form'); ?>
            <div class="form-group">
                <label for="username">name</label>
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
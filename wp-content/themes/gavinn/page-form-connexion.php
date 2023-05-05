
<?php
/*
Template Name: Custom Connection Form
*/

if(isset($_POST['submit'])) {
    // retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate form data
    $errors = array();
    if(empty($username)) {
        $errors[] = 'Please enter your username';
    }
    if(empty($password)) {
        $errors[] = 'Please enter your password';
    }

    // check if form submission is valid
    if(wp_verify_nonce($_POST['_wpnonce'], 'custom-connection-form')) {
        // attempt to log in user
        $creds = array(
            'user_login' => $username,
            'user_password' => $password,
            'remember' => true
        );
        $user = wp_signon($creds, false);

        if(is_wp_error($user)) {
            $errors[] = $user->get_error_message();
        } else {
            // redirect user after successful login
            wp_redirect(home_url('/'));
            exit;
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
        <?php if(!empty($errors)): ?>
        <div class="error">
            <?php foreach($errors as $error): ?>
            <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <form id="connection-form" method="post">
            <?php wp_nonce_field('custom-connection-form'); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" />
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
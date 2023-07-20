<?php
if ( have_comments() ) :
    echo '<h2>' . __( 'Comments', 'your-theme-domain' ) . '</h2>';
    wp_list_comments( array(
        'style'       => 'ol',
        'short_ping'  => false,
        'avatar_size' => false,
    ) );
endif;

// Show the comment form.
comment_form();
?>

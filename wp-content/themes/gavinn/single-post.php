<?php
get_header() ?>
<?php if( have_posts()): ;?>
        <?php while( have_posts()): the_post() ?>
       <h1> <?php the_title() ?> </h1>
       <p>
        <img src ="<?= the_post_thumbnail_url() ?>" alt="" style=" width:20%; height: auto">
       </p>
       <?php the_content() ?>
        <?php endwhile; ?>
        
<?php else: ?>
    <h1> Dont have an article </h1>

<?php endif; ?>

<?php get_footer() ?>
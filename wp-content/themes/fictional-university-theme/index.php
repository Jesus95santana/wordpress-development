<?= get_header() ?>

    <h1>I am the HomePage</h1>
<?php while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h2>
    <p><?= the_content() ?></p>
    <hr>
<?php endwhile; ?>


<?php
get_footer();
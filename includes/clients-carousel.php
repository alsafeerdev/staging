<?php
$args = array(
    'post_type' => 'clients_logo',
);
$loop = new WP_Query($args); ?>

<?php if ($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) :
        $loop->the_post(); ?>
        <p><?php the_title(); ?></p>
    <?php endwhile; ?>
<?php endif; ?>






<?php wp_reset_postdata(); ?>
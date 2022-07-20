<?php
$args = array(
    'post_type' => 'clients_logo',
    'order' => 'ASC',
    'orderby' => 'rand',
    'posts_per_page' => 75
);
$loop = new WP_Query($args); ?>

<div id="clients-carousel" class="owl-carousel owl-theme clients-carousel dark-dots my-3">

    <?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <div class="item">
                <a href="/our-clients/" class="client-image-wrapper-link">
                    <img src="<?php echo get_field('client_logo'); ?>" alt="" class="client-logo">
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- Custom Navigation -->
<div class="next-btn-clients clients-cust-nav">
    <svg version="1.1" id="nav-next-clients" class="nav-main-clients-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>
</div>
<div class="prev-btn-clients clients-cust-nav">
    <svg version="1.1" id="nav-prev-clients" class="nav-main-clients-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>
</div>

<?php wp_reset_postdata(); ?>
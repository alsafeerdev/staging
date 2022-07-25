<?php
$args = array(
    'post_type' => 'featured_products',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>


<div id="feat-prods-carousel" class="owl-carousel owl-theme feat-prods-carousel">

    <?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <?php $feat_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <?php
            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            ?>
            <div class="feat-prods-container text-center">
                <a href="<?php echo get_permalink(); ?>" class="feat-prods-wrapper-link" target="_blank">
                    <div class="feat-prods-img-container">
                        <img data-blink-src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="feat-prods-feat-image">
                    </div>
                    <div class="feat-prods-content-container bg-white">
                        <h3 class="feat-prods-title letter-spacing-0-5 fm-pt-serif fw-bold title-fs-18"> <?php the_title(); ?></h3>
                        <p class="feat-prods-exerpt letter-spacing-0-5 fw-normal">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <p class="feat-prods-know-more letter-spacing-0-5 border-radius-30 color-white btn-default">Learn More</p>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- Custom Navigation -->
<div class="next-btn-feat-prod light cust-nav">
    <svg version="1.1" id="nav-next-feat-prod" class="nav-main" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>
</div>
<div class="prev-btn-feat-prod rotate-180 light cust-nav">
    <svg version="1.1" id="nav-prev-feat-prod" class="nav-main" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>
</div>
<?php wp_reset_postdata(); ?>
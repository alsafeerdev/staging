<?php
$args = array(
    'post_type' => 'news_and_promotions',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<!-- Main Container -->

<div id="promotions-carousel" class="owl-carousel owl-theme promotions-carousel nav-middle">
    <?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <?php $feat_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <?php
            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            ?>
            <div class="promotion-container">
                <a href="<?php echo get_permalink(); ?>" class="promo-link" target="_blank">
                    <div class="promo-image-container">
                        <img data-blink-src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="promo-feat-image">
                    </div>
                    <div class="promo-content">
                        <h3 class="promo-title title-fs-18 letter-spacing-0-5 fm-pt-serif fw-bold"> <?php the_title(); ?></h3>
                        <p class="promo-exerpt letter-spacing-0-5 fw-normal">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <p class="promo-know-more letter-spacing-0-5 color-white border-radius-30 btn-default">Read More</p>
                    </div>
                    <div class="promo-cat">
                        <?php
                        $promo_cat = get_field("promotion_category");
                        ?>
                        <p class="promo-category-title letter-spacing-0-5 color-white border-radius-30"><?php echo $promo_cat; ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- Custom Navigation -->
<div class="next-btn cust-nav">
    <svg version="1.1" id="nav-next" class="promo-nav-main svg-white-nav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>

</div>
<div class="prev-btn rotate-180 cust-nav">
    <svg version="1.1" id="nav-prev" class="promo-nav-main svg-white-nav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
        <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
    </svg>

</div>
<?php wp_reset_postdata(); ?>
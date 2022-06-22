<?php
$args = array(
    'post_type' => 'featured_products',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div id="feat-prods-mb-carousel" class="owl-carousel owl-theme feat-prods-mb-carousel">
                <?php if ($loop->have_posts()) : ?>
                    <?php while ($loop->have_posts()) :
                        $loop->the_post(); ?>
                        <?php $feat_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <?php
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                        ?>
                        <div class="item feat-prods-mb-container text-center">
                            <a href="<?php echo get_permalink(); ?>" class="feat-prods-mb-wrapper-link" target="_blank">
                                <div class="feat-prods-mb-img-container">
                                    <img data-blink-src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="feat-prods-mb-feat-image">
                                </div>
                                <div class="feat-prods-mb-content-container">
                                    <h3 class="feat-prods-mb-title"> <?php the_title(); ?></h3>
                                    <p class="feat-prods-mb-exerpt">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <p class="feat-prods-mb-know-more">Learn More</p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>
<?php
$args = array(
    'post_type' => 'featured_products',
    'order' => 'ASC',
    'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>


<div class="contaienr">
    <div class="row">
        <div class="col">

            <div id="feat-prod-carousel" class="owl-carousel owl-theme feat-prod-carousel">

                <?php if ($loop->have_posts()) : ?>
                    <?php while ($loop->have_posts()) :
                        $loop->the_post(); ?>
                        <?php $feat_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <?php
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                        ?>
                        <div class="item main-wrapper">
                            <a href="<?php echo get_permalink(); ?>" class="wrapper-link">
                                <div class="img-container">
                                    <img data-blink-src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="">
                                </div>
                                <div class="content">
                                    <h3 class="title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="exerpt">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <p class="know-more">
                                        Learn more
                                    </p>
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
<?php
$images = get_field('gallery_items');
if ($images) : ?>

    <div class="synced-slider-wrapper">
        <!-- Big Image Carousel Start -->
        <div id="big" class="synced-slider-main-img owl-carousel owl-theme big-image-carousel">
            <?php foreach ($images as $image) : ?>
                <div class="big-image-carousel-item">

                    <img class="synced-big-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                </div>
            <?php endforeach; ?>
        </div>
        <!-- Big Image Carousel End -->
        <!-- Thumbnail Carousel Start -->
        <div id="thumbs" class="owl-carousel owl-theme thumbnail-carousel">

            <?php foreach ($images as $image) : ?>
                <div class="thumbnail-carousel-item">

                    <img class="synced-thumb-img" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />

                </div>
            <?php endforeach; ?>

        </div>
        <!-- Thumbnail Carousel End -->

    </div>
<?php endif; ?>
<?php
$images = get_field('gallery_items');
if ($images) : ?>

    <div class="synced-slider-wrapper">
        <!-- Big Image Carousel Start -->
        <div id="big" class="synced-slider-main-img owl-carousel owl-theme big-image-carousel">

            <div class="big-image-carousel-item">

                <?php foreach ($images as $image) : ?>

                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                <?php endforeach; ?>

            </div>

        </div>
        <!-- Big Image Carousel End -->
        <!-- Thumbnail Carousel Start -->
        <div id="thumbs" class="owl-carousel owl-theme thumbnail-carousel">

            <div class="thumbnail-carousel-item">

                <?php foreach ($images as $image) : ?>

                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />

                <?php endforeach; ?>

            </div>

        </div>
        <!-- Thumbnail Carousel End -->

    </div>
<?php endif; ?>
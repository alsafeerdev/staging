<?php
$images = get_field('gallery_items');
if ($images) : ?>

    <div class="synced-slider-wrapper">
        <!-- Big Image Carousel Start -->
        <div id="big" class="synced-slider-main-img owl-carousel owl-theme big-image-carousel white-h-bg">
            <?php foreach ($images as $image) : ?>
                <div class="big-image-carousel-item">

                    <img width="850" height="850" class="synced-big-img" data-blink-src="<?php echo esc_url($image['url']); ?>-/resize/850x850/" alt="<?php echo esc_attr($image['alt']); ?>" />

                </div>
            <?php endforeach; ?>
        </div>
        <!-- Custom Navigation -->
        <div class="next-btn-big-img cust-nav dark-nav">
            <svg version="1.1" id="nav-next" class="service-nav-main svg-white-nav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
                <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
            </svg>
        </div>
        <div class="prev-btn-big-img rotate-180 cust-nav dark-nav">
            <svg version="1.1" id="nav-prev" class="service-nav-main svg-white-nav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 592 1000" style="enable-background:new 0 0 592 1000;" xml:space="preserve">
                <path d="M585.8,463.7c-4.8-12.2-11.9-23.1-21.2-32.4L161,27.7C143.1,9.8,119.4,0,94.2,0C69,0,45.3,9.8,27.4,27.7
	C9.6,45.5-0.2,69.2-0.2,94.4c0,25.2,9.8,48.9,27.7,66.8L366,499.8L27.4,838.3C9.6,856.2-0.2,879.9-0.2,905.1
	c0,25.2,9.8,48.9,27.7,66.8c17.8,17.8,41.6,27.7,66.8,27.7c25.2,0,48.9-9.8,66.8-27.7l403.6-403.6c9.3-9.3,16.4-20.2,21.2-32.4
	c4.5-11.5,6.7-23.7,6.4-36.1C592.4,487.4,590.3,475.2,585.8,463.7z" />
            </svg>
        </div>
        <!-- Big Image Carousel End -->
        <!-- Thumbnail Carousel Start -->
        <div id="thumbs" class="owl-carousel owl-theme thumbnail-carousel">

            <?php foreach ($images as $image) : ?>
                <div class="thumbnail-carousel-item">

                    <img class="synced-thumb-img" data-blink-src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />

                </div>
            <?php endforeach; ?>

        </div>
        <!-- Thumbnail Carousel End -->
    </div>
<?php endif; ?>

<!-- TEST -->
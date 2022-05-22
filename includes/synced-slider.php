<?php
$images = get_field('gallery_items');
if ($images) : ?>

    <div class="synced-slider-wrapper">
        <!-- Big Image Carousel Start -->
        <div id="big" class="synced-slider-main-img owl-carousel owl-theme big-image-carousel">
            <?php foreach ($images as $image) : ?>
                <div class="big-image-carousel-item">
                <?php echo wp_get_attachment_image(array("class" => "synced-big-img"));  ?>
                    

                </div>
            <?php endforeach; ?>
        </div>
        <!-- Big Image Carousel End -->
        <!-- Thumbnail Carousel Start -->
        <div id="thumbs" class="owl-carousel owl-theme thumbnail-carousel">

            <?php foreach ($images as $image) : ?>
                <div class="thumbnail-carousel-item">


                    <?php echo wp_get_attachment_image(array("class" => "synced-thumb-img"));  ?>

                  

                </div>
            <?php endforeach; ?>

        </div>
        <!-- Thumbnail Carousel End -->

    </div>
<?php endif; ?>
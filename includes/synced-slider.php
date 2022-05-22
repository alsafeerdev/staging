<?php 
$images = get_field('gallery_items');
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p><?php echo esc_html($image['caption']); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
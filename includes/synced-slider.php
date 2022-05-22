<?php
$images = get_field('gallery_items');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if ($images) : ?>

    <?php
    $imgurl = get_field('gallery_items', $post->ID);

    if (filter_var($imgurl, FILTER_VALIDATE_URL) === FALSE) {
        $imgurl = wp_get_attachment_url($imgurl);
    }
    echo '<img src="' . $imgurl . '" alt="image">';
    ?>
    <?php foreach ($images as $image_id) : ?>

        <img src="<?php echo $imgurl ?>" alt="" srcset="">


    <?php endforeach; ?>
<?php endif; ?>
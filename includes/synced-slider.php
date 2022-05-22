<?php
$images = get_field('gallery_items');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if ($images) : ?>

    <?php
    $imgurl = get_field('gallery_items', $post->ID);
    ?>
    <?php foreach ($images as $image_id) : ?>

        <img src="<?php echo $imgurl ?>" alt="" srcset="">


    <?php endforeach; ?>
<?php endif; ?>
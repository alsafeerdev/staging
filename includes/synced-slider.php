<?php
$images = get_field('gallery_items');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if ($images) : ?>

    <?php foreach ($images as $image_id) : ?>

        <img src="<?php echo $images ?>" alt="" srcset="">


    <?php endforeach; ?>
<?php endif; ?>
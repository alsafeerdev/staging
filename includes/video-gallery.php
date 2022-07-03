<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>

 <?php foreach ($images as $image) : ?>

<?php var_dump($image);
        die(); ?>

<?php endforeach; ?>
<?php endif; ?>
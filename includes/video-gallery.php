<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>

 <?php foreach ($image as $images) : ?>

<?php var_dump($image);die(); ?>

<?php endforeach; ?>
<?php endif; ?>
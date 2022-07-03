<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>


    <?php foreach ($images as $image) : ?>

        <?php

        $vid_url = $image['url'];
        $vid_type = $image['mime_type'];
        $vid_width = $image['width'];
        ?>


<?php echo $vid_url . $vid_type . $vid_width ?>

    <?php endforeach; ?>

<? endif; ?>

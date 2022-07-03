<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>


    <?php foreach ($images as $image) : ?>

        <?php

        $vid_url = $image['url'];
        $vid_type = $image['mime_type'];
        $vid_width = $image['width'];
        $vid_height = $image['height'];
        ?>


        <?php echo $vid_url . $vid_type . $vid_width ?>

        <div class="vid-thumb-container">

            <video width="<?php echo $vid_width ?>" height="<?php echo $vid_height ?>" controls>

                <source src="<?php echo $vid_url ?>" type="<?php echo $vid_type ?>">
                Your browser does not support the video tag.
            </video>

        </div>


    <?php endforeach; ?>

<? endif; ?>
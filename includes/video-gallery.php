<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>

    <div class="container">
        <div class="row">
            <div class="vid-thumb-container">
                <?php foreach ($images as $image) : ?>
                    <?php

                    $vid_url = $image['url'];
                    $vid_type = $image['mime_type'];
                    ?>

                    <div class="col-md-6">

                        <div class="vid-container">

                            <video width="600" height="600" controls>

                                <source src="<?php echo $vid_url ?>" type="<?php echo $vid_type ?>">
                                Your browser does not support the video tag.
                            </video>


                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>
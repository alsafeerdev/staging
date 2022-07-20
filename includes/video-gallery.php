<?php $images = get_field('video_gallery'); ?>

<?php if ($images) : ?>
    <div class="container mb-5">
        <div class="row">
            <?php foreach ($images as $image) : ?>
                <?php
                $vid_url = $image['url'];
                $vid_type = $image['mime_type'];
                ?>
                <div class="col-md-6 mb-3">
                    <div class="vid-container" style="width:fit-content">
                        <video width="600" controls controlsList="nodownload">
                            <source src="<?php echo $vid_url ?>" type="<?php echo $vid_type ?>">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<? endif; ?>
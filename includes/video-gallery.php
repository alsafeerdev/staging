<!-- NEW -->
<?php $rows = get_field('video_gallery'); ?>

<?php if ($rows) : ?>
    <div class="container mb-5">
        <div class="row">
            <?php foreach ($rows as $row) : ?>

                <?php

                $vid_webm = $rows[0];
                $vid_mp4 = $rows[1];
                ?>
                <div class="col-md-6 mb-3">
                    <div class="vid-container" style="width:fit-content">
                        <video width="600" controls controlsList="nodownload">
                            <source src="<?php echo $vid_webm; ?>" type="video/webm">
                            <source src="<?php echo $vid_mp4; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<? endif; ?>

<!-- NEW END -->
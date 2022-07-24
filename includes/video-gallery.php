<div class="container mb-5">
    <div class="row">
        <?php
        if (have_rows('video_gallery')) :
            while (have_rows('video_gallery')) : the_row();
                $webm = get_sub_field('webm');
                $mp4 = get_sub_field('mp4');
                $fallback = get_sub_field('fallback_image') ?>
                <div class="col-md-4 mb-3">
                    <div class="vid-container" style="width:fit-content">
                        <video width="600" style="border-radius: 10px;" controls controlsList="nodownload" poster="<?php echo $fallback; ?>">
                            <source src="<?php echo $webm; ?>" type="video/webm">
                            <source src="<?php echo $mp4; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<!-- NEW END -->
<?php

if (have_rows('video_gallery')) :
    while (have_rows('video_gallery')) : the_row();

        // Layout 1.
        $webm = get_sub_field('webm');
        $mp4 = get_sub_field('mp4'); ?>

        <div class="col-md-4 mb-3">
            <div class="vid-container" style="width:fit-content">
                <video width="600" controls controlsList="nodownload">
                    <source src="<?php echo $webm; ?>" type="video/webm">
                    <source src="<?php echo $mp4; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

<?php endwhile;
endif; ?>
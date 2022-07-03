<?php

$images = get_field('video_gallery');

if ($images) :


    foreach ($images as $image) :

        var_dump($image);
        die;

    endforeach;

endif;

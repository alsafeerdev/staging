<?php

$images = get_field('video_gallery');

if ($images) :


    foreach ($images as $image) :

        echo $image['url'];

    endforeach;

endif;

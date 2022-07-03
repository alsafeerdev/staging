<?php

$images = get_field('video_gallery');

if ($images) :

    foreach ($image as $images) : ?>

<?php

        var_dump($image);
        die(); ?>


<?php endforeach; ?>
<?php endif; ?>
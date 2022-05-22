<?php 
$images = get_field('gallery_items');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
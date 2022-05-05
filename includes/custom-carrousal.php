<?php
$args = array(
  'post_type' => 'process',
  'order' => 'ASC',
  'orderby' => 'ID'
);
$loop = new WP_Query($args); ?>

<div class="owl-carousel owl-theme">
  <?php if ($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="container-main ">
        <div class="img-container">
          <?php
          // An attachment/image ID is all that's needed to retrieve its alt and title attributes.
          $image_id = get_post_thumbnail_id();
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
          ?>
          <img class="owl-lazy" data-src-retina="<?php echo the_post_thumbnail_url('full'); ?>" data-src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>">
        </div>
        <div class="content">
          <p class="post-content"> <?php echo get_the_excerpt(); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<!-- Custom Navigation -->
<div class="am-next cust-nav">
  <img src="http://staging.alsafeeradvt.com/wp-content/uploads/2022/04/arrow-next.svg" alt="" srcset="">
</div>
<div class="am-prev cust-nav">
  <img src="http://staging.alsafeeradvt.com/wp-content/uploads/2022/04/arrow-prev.svg" alt="" srcset="">
</div>

<?php wp_reset_postdata(); ?>
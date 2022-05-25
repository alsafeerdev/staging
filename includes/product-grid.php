<div class="container-fluid main-container">
    <div class="row">
        <!-- Filter Goes Here -->
        <div class="col-md-4 filter-container">
            <div class="filter-wrapper">
                <form action="<?php echo admin_url('admin-ajax.php') ?>" method="POST" id="filter">
                    <?php
                    if ($terms = get_terms(array(
                        'taxonomy' => 'product_categories',
                        'orderby' => 'name'
                    ))) : ?>
                        <div class="category-list">
                            <?php foreach ($terms as $term) : ?>
                                <label for="<?php echo $term->term_id ?>">
                                    <input type="radio" name="prod-category" id="<?php echo $term->term_id ?>" value="<?php echo $term->term_id ?>">
                                    <?php echo $term->name ?>
                                </label>

                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <button class="submit-btn" type="submit">Apply Filter</button>
                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>
        </div>
        <!-- Posts Goes HERE -->
        <div class="col-md-7 posts-container">

            <div id="response">

                <?php
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                );
                $loop = new WP_Query($args); ?>

                <div class="row">
                    <?php if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-4 my-3">
                                <div class="post-container">
                                    <div class="image-container">
                                        <?php
                                        // An attachment/image ID is all that's needed to retrieve its alt and title attributes.
                                        $image_id = get_post_thumbnail_id();
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                                        ?>
                                        <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="product-grid-image">

                                    </div>
                                    <div class="post-meta text-center d-flex flex-column flex-wrap align-items-center justify-content-between">

                                        <h2 class="product-title"> <?php the_title(); ?></h2>

                                        <p class="post-excerpt"> <?php echo get_the_excerpt(); ?></p>

                                        <a href="<?php echo get_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="know-more ">Know More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="row my-4">
                            <div class="col-4">
                                <nav class="pagination">
                                    <?php pagination_bar($loop); ?>
                                </nav>
                            </div>
                        </div>
                </div>

            </div>



        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>


</div>
</div>
</div>
</div>
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
                <?php $args = array(
                    'post_type' => 'services',
                    'orderby' => 'date', // we will sort posts by date
                    'order'    => $_POST['date'] // ASC or DESC
                );
                $query = new WP_Query($args);

                echo '<div class="row grid-container">';
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
            
                        <div class="col-md-4 my-3">
                            <a href="<?php echo get_permalink(); ?>" class="prods-wrapper-link" target="_blank">
                                <div class="post-container">
                                    <div class="image-container">
                                        <?php
                                        // An attachment/image ID is all that's needed to retrieve its alt and title attributes.
                                        $image_id = get_post_thumbnail_id();
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                                        ?>
                                        <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="product-grid-image">
                                        <div class="image-overlay"></div>
                                    </div>
                                    <div class="post-meta text-center d-flex flex-column flex-wrap align-items-center justify-content-between">
            
                                        <h2 class="product-title"> <?php the_title(); ?></h2>
            
                                        <p class="post-excerpt"> <?php echo get_the_excerpt(); ?></p>
            
                                        <p class="know-more ">Know More</p>
                                    </div>
                                </div>
                            </a>
                        </div>
            
            <?php endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
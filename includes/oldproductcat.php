<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="checkbox-container">
                <div class="accordion" id="filter-options">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Search by Name
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Filter by Category
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                                <div class="accordion" id="filter-cat">
                                    <?php

                                    foreach (get_categories('hide_empty=0') as $cat) :
                                        if (!$cat->parent) {
                                            echo '<div class="accordion-item">';
                                            echo '<h2 class="accordion-header" id="' . $cat->term_id . '">';
                                            echo '
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $cat->term_id . '" aria-expanded="true" aria-controls="collapse' . $cat->term_id . '">
                                                ' .  $cat->name . '';
                                            echo '</button>';
                                            echo '</h2>';

                                            echo '<div id="collapse' . $cat->term_id . '" class="accordion-collapse collapse" aria-labelledby="' . $cat->term_id . '" data-bs-parent="#filter-cat">';
                                            echo ' <div class="accordion-body">';
                                            process_cat_tree($cat->term_id);

                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    endforeach;
                                    wp_reset_query();

                                    function process_cat_tree($cat)
                                    {

                                        $args = array('category__in' => array($cat), 'numberposts' => -1);
                                        $cat_posts = get_posts($args);

                                        if ($cat_posts) :
                                            foreach ($cat_posts as $post) :
                                                echo '<p>';
                                                echo '<a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a>';
                                                echo '</p>';
                                            endforeach;
                                        endif;

                                        $next = get_categories('hide_empty=0&parent=' . $cat);

                                        if ($next) :
                                            foreach ($next as $cat) :
                                                echo '<p>';
                                                echo '<a href="' . get_permalink($post->ID) . '">' . $cat->name . '</a>';
                                                echo '</p>';
                                                process_cat_tree($cat->term_id);
                                            endforeach;
                                        endif;
                                    }














                                    ?>




                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">

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
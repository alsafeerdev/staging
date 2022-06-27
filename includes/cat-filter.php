<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories', // to make it simple I use default categories
    'orderby' => 'name'
))) : ?>

    <div class="checkbox-container">
        <div class="accordion" id="filter-options">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Search by Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#filter-options">
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
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#filter-options">
                    <div class="accordion-body">


                        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" class="checkbox-container">

                            <?php foreach ($terms as $term) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?php echo $term->term_id; ?>" id="flexCheckIndeterminate" name="<?php echo $term->name; ?>">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        <?php echo $term->name; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <input type="hidden" name="action" value="myfilter">
                        </form>

                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
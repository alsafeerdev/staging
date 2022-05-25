<div class="container-fluid main-container">
    <div class="row">
        <!-- Filter Goes Here -->
        <div class="col-md-2 filter-container">
            <div class="filter-wrapper">
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
                                                            <?php echo $term->name ?> (<?php echo $term->count ?>)
                                                        </label>

                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            <button class="submit-btn" type="submit">Apply Filter</button>
                                            <input type="hidden" name="action" value="myfilter">
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Posts Goes HERE -->
        <div class="col-1"></div>
        <div class="col-md-9 posts-container">

            <div id="response">


            </div>
        </div>
    </div>
</div>
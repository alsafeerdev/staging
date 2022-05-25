<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

    <?php
    if ($terms = get_terms(array(
        'taxonomy' => 'product_categories',
        'orderby' => 'name'
    ))) : ?>

        <div class="category-list">
            <?php foreach ($terms as $term) : ?>

                <input type="checkbox" name="prod-category" id="<?php echo $term->term_id ?>" value="<?php echo $term->term_id ?>">
                <label for="<?php echo $term->term_id ?>">
                    <?php echo $term->name ?>
                </label>

            <?php endforeach; ?>
        </div>

    <?php endif; ?>


</form>
<div id="response"></div>
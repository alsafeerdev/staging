<form action="<?php echo admin_url('admin-ajax.php') ?>" method="POST" id="filter">
    <?php
    if ($terms = get_terms(array(
        'taxonomy' => 'product_categories',
        'orderby' => 'name'
    ))) : ?>
        <div class="category-list">
            <?php foreach ($terms as $term) : ?>
                <label for="<?php echo $term->term_id ?>">
                    <input type="checkbox" name="prod-category" id="<?php echo $term->term_id ?>" value="<?php echo $term->term_id ?>">
                    <?php echo $term->name ?>
                </label>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <button class="submit-btn" type="submit">Apply Filter</button>
    <input type="hidden" name="action" value="myfilter">
</form>
<div id="response"></div>

<!-- Query -->


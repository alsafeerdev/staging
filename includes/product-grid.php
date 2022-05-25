<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories', // to make it simple I use default categories
    'orderby' => 'name'
))) : ?>
    // if categories exist, display the dropdown

    <ul class="category-list">
        <?php foreach ($terms as $term) : ?>
            <li class="prod-cats" value="<?php echo $term->term_id ?>"><?php echo $term->name ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>
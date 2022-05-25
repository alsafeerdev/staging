<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name'
))) : ?>

    <ul class="category-list">
        <?php foreach ($terms as $term) : ?>
            <li class="prod-cats" value="<?php echo $term->term_id ?>"><?php echo $term->name ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>
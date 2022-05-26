<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name'
))) : ?>
    <div class="category-list">
        <ul class="cat-list">
            <?php $category_link = get_category_link($term->term_id); ?>
            <?php foreach ($terms as $term) : ?>
                <li class="prod-cat" id="<?php echo $term->term_id ?>">
                    <a href="<?php echo $category_link ?>" class="cat-link"></a>
                    <?php echo $term->name ?> (<?php echo $term->count ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
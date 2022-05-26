<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name'
))) :
    $category_id = get_cat_ID('product_categories'); ?>
    <div class="category-list">
        <ul class="cat-list">
            <?php $term_link = get_term_link($terms->term_id); ?>
            <?php foreach ($terms as $term) : ?>ß
            <li class="prod-cat" id="<?php echo $term->term_id ?>">
                <a href="<?php get_term_link($term->term_id); ?> " class="cat-link"><?php echo $term->name ?> (<?php echo $term->count ?>)</a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<p>rev 1.8</p>
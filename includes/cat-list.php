<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name'
))) :
    $category_id = get_cat_ID('product_categories'); ?>
    <div class="category-list">
        <ul class="cat-list">
        <?php $term_link = get_term_link($terms->term_id);?>
            <?php foreach ($terms as $term) : ?>
               
                <li class="prod-cat" id="<?php echo $term->term_id ?>">
                    <a href="<?php echo $term_link ?> " class="cat-link"><?php echo $term->name ?> (<?php echo $term->count ?>)</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<p>rev 1.7</p>
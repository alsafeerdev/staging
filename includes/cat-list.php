<?php
if ($terms = get_terms(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name'
))) : ?>
    <div class="category-list">
        <ul class="cat-list">
            <?php foreach ($terms as $term) : ?>
                <li class="prod-cat" id="<?php echo $term->term_id ?>">
                    <?php echo $term->name ?> (<?php echo $term->count ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
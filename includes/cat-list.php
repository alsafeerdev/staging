<?php
$categories = get_categories(array(
    'taxonomy' => 'product_categories',
    'orderby' => 'name',
    'order'   => 'ASC'
)); ?>

<?php foreach ($categories as $category) : ?>

    <div class="category-list">
        <ul class="cat-list">

            <li class="prod-cat" id="<?php echo $category->term_id ?>">
                <a href="<?php get_category_link($category->term_id); ?> " class="cat-link"><?php echo $category->name ?> (<?php echo $category->count ?>)</a>
            </li>

        <?php endforeach; ?>
        </ul>
    </div>


    <p>rev 2</p>
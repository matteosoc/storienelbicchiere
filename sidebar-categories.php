<div id="categories" class="border-bottom">
    <div>Categorie</div>
    <ul class="category-list">
        <?php
        // Funzione per mostrare categorie e sottocategorie
        function display_category_tree($parent_id)
        {
            $categories = get_categories(array(
                'parent' => $parent_id,
                'hide_empty' => true,
            ));

            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<li>';
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';

                    // Ottieni sottocategorie
                    $child_categories = get_categories(array(
                        'parent' => $category->term_id,
                        'hide_empty' => true,
                    ));

                    if (!empty($child_categories)) {
                        echo '<ul class="flex-wrap subcategory-list">';
                        foreach ($child_categories as $child_category) {
                            echo '<li>';
                            echo '<a href="' . esc_url(get_category_link($child_category->term_id)) . '">' . esc_html($child_category->name) . '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }

                    echo '</li>';
                }
            }
        }

        // Ottieni categoria corrente
        $current_category = get_queried_object();

        if ($current_category && isset($current_category->term_id)) {
            display_category_tree($current_category->term_id);
        } else {
            echo '<li>Nessuna categoria disponibile.</li>';
        }
        ?>
    </ul>
</div>

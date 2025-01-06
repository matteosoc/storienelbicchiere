<div id="categories" class="border-bottom">
    <div>Categorie</div>
    <ul class="category-list">
        <?php
        // Funzione per mostrare categorie manuali
        function display_manual_categories() {
            // Categorie manuali (modifica con i tuoi nomi di categoria o gli ID)
            $categories = array(
                array(
                    'name' => 'Vino',
                    'url' => get_category_link(1),  // Usa l'ID della categoria
                ),
                array(
                    'name' => 'Persone',
                    'url' => get_category_link(2),  // Usa l'ID della categoria
                ),
                array(
                    'name' => 'Storie',
                    'url' => get_category_link(3),  // Usa l'ID della categoria
                ),
            );

            // Itera sulle categorie
            foreach ($categories as $category) {
                echo '<li>';
                echo '<a href="' . esc_url($category['url']) . '">' . esc_html($category['name']) . '</a>';

                // Sottocategorie (modifica con le sottocategorie di ciascuna categoria manualmente se necessario)
                $child_categories = get_categories(array(
                    'parent' => get_cat_ID($category['name']),
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

        // Visualizza le categorie manuali
        display_manual_categories(); 
        ?>
    </ul>
</div>

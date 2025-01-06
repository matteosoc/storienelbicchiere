<div class="pagination align-items-center">
    <?php
    the_posts_pagination(array(
        'mid_size'  => 2, // Numero di pagine mostrato ai lati della pagina corrente
        'prev_text' => '<',
        'next_text' => '>',
        'screen_reader_text' => __('Search Results Navigation', 'textdomain'), // Testo per lettori di schermo
    ));
    ?>
</div>
<div id="topics" class="border-bottom">
    <div>Argomenti</div>
    <ul class="flex-wrap tags-list">
        <?php
        // Recupera i primi 10 tag
        $tags = get_tags(array(
            'number' => 16, // Numero massimo di tag da mostrare
            'orderby' => 'count', // Ordina per numero di post associati
            'order' => 'DESC' // Ordine decrescente
        ));

        // Mostra i tag
        foreach ($tags as $tag) : ?>
            <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

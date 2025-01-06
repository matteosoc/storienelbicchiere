<div id="articlesGrid">
    <?php
    // Configurazione predefinita: usa la query corrente o una personalizzata con limite
    $custom_query = isset($args['query']) ? $args['query'] : null;
    $query = $custom_query ?: new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 10, // Limite a 10 articoli
    ));

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="article-link">
                <article class="border-bottom flex-space-between align-items-center">
                    <div>
                        <h2 class="clamp-text"><?php the_title(); ?></h2>
                        <div class="article-excerpt clamp-text"><?php the_excerpt(); ?></div>
                        <ul class="inline tags-list">
                            <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                        </ul>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </article>
            </a>
        <?php endwhile;
    else :
        echo '<p>No articles found</p>';
    endif;

    // Resetta i dati della query personalizzata
    if ($custom_query) wp_reset_postdata();
    ?>
</div>

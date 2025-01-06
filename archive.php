<?php get_header(); ?>

<div id="page" class="content flex-space-between">
    <div id="pageContent">
        <h1 class="border-bottom">Tutti gli articoli</h1>
        <div id="articlesGrid">
            <?php
            // Controlla se ci sono articoli
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
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
                
                // Aggiungi la paginazione
                get_template_part('pagination');
                
            else : ?>
                <p><?php _e('Nessun articolo trovato.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part('sidebar'); ?>
</div>

<?php get_footer(); ?> 
<?php get_header(); ?>

<div id="page" class="content flex-space-between">
    <div id="pageContent">
        <h1 class="border-bottom"><span>Ricerca per: </span><?php echo get_search_query(); ?></h1>
        <div id="articlesGrid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
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
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e('Nessun articolo trovato in questa categoria.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
        <?php get_template_part('pagination'); ?>
    </div>
    <?php get_template_part('sidebar'); ?>
</div>

<?php get_footer(); ?>
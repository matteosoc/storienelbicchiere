<?php get_header(); ?>
<?php get_template_part('home-banner'); ?>

<div id="page" class="content flex-space-between">
    <div id="pageContent">
        <header class="border-bottom">Gli ultimi articoli</header>
        <?php get_template_part('articles-grid'); ?>
    </div>
    <?php get_template_part('sidebar'); ?>
</div>
<?php get_footer(); ?>
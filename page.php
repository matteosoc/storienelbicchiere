<?php get_header(); ?>

<div id="articlePage" class="content">
    <article>
        <h1 class="border-bottom">
            <?php the_title(); ?>
        </h1>
        <?php
        if (has_post_thumbnail()) :
            echo '<div>';
            the_post_thumbnail('full');  // Puoi cambiare 'full' con altre dimensioni come 'thumbnail', 'medium', 'large', ecc.
            echo '</div>';
        endif;
        ?>
        <div id="article-content">
            <?php the_content(); ?>
        </div>
    </article>
</div>
</div>

<?php get_footer(); ?>
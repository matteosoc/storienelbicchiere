<?php get_header(); ?>

<div id="articlePage" class="content">
    <article>
        <h1 class="border-bottom">
            <?php the_title(); ?>
        </h1>
        <div id="author-box" class="flex-space-between border-bottom">
            <div class="inline">
                <div id="authorImgContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/storie-nel-bicchiere-blog-eleonora.jpg" alt="grappolo-di-uva">
                </div>
                <div>
                    <h3>Eleonora Trumino</h3>
                    <div>
                        <?php display_reading_time(); ?> · <?php echo get_the_date('j M Y'); ?>
                    </div>
                </div>
            </div>
            <div>
                <button id="share-btn">
                    <ion-icon name="share-outline" size="large"></ion-icon>
                </button>
            </div>
        </div>

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
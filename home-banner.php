<div id="home-banner">
    <div class="content relative">
        <div class="width-70">
            <h1><?php echo wp_kses_post(get_theme_mod('home_banner_title', 'Vini <br>/ storie')); ?></h1>
            <h3><?php echo esc_html(get_theme_mod('home_banner_subtitle', 'Un viaggio per leggere, raccontare e vivere il mondo del vino.')); ?></h3>
            <a href="<?php echo esc_url(get_theme_mod('home_banner_button_url', '#')); ?>">
                <?php echo esc_html(get_theme_mod('home_banner_button_text', 'Inizia a leggere')); ?>
            </a>
        </div>
        <div id="grapesContainer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/grapes-wine.png" alt="grappolo-di-uva">
        </div>
    </div>
</div>

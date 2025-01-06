<footer id="footer">
    <div class="content">
        <nav id="secondaryNav" class="border-bottom">
            <?php display_menu('secondary'); ?>
        </nav>
        <p id="colophon" class="text-white">
            <?php
            // Recupera il valore del colophon dal Customizer
            echo esc_html(get_theme_mod('colophon_text', '© Lorem ipsum dolor sit amet, consectetur adipiscing elit Nam in fringilla'));
            ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
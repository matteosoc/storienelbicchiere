<?php get_header(); ?>

<div id="page-404" class="content">
    <h1 class="error-code">404</h1>
    <p class="error-message">Oops! La pagina che stai cercando non è stata trovata.</p>
    <a href="<?php echo home_url(); ?>" class="btn-primary">
        Torna alla Home
    </a>
</div>

<?php get_footer(); ?>
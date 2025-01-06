<div id="sidebar">
    <?php if (is_home() || is_front_page()) : ?>
        <?php get_template_part('sidebar-author'); ?>
        <?php get_template_part('sidebar-tags'); ?>
        <?php get_template_part('sidebar-socials'); ?>
    <?php endif; ?>
    <?php if (is_category()) : ?>
        <?php get_template_part('sidebar-categories'); ?>
        <?php get_template_part('sidebar-tags'); ?>
        <?php get_template_part('sidebar-socials'); ?>
    <?php endif; ?>
    <?php if (is_tag()) : ?>
        <?php get_template_part('sidebar-categories-generic'); ?>
        <?php get_template_part('sidebar-tags'); ?>
        <?php get_template_part('sidebar-socials'); ?>
    <?php endif; ?>
    <?php if (is_search()) : ?>
        <?php get_template_part('sidebar-categories-generic'); ?>
        <?php get_template_part('sidebar-tags'); ?>
        <?php get_template_part('sidebar-socials'); ?>
    <?php endif; ?>
</div>
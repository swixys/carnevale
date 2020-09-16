<?php
/*
 * Template name: services
 */
get_header(); ?>
<main class="main">
    <?php if (have_rows('services_page')): ?>
        <?php while (have_rows('services_page')): the_row(); ?>
            <?php if (get_row_layout() == 'services'): ?>
                <?php get_template_part('services-parts/sections', 'services'); ?>
            <?php endif; ?>
            <?php if (get_row_layout() == 'skils'): ?>
                <?php get_template_part('services-parts/sections', 'skils'); ?>
            <?php endif; ?>
            <?php if (get_row_layout() == 'extended_services'): ?>
                <?php get_template_part('services-parts/sections', 'extended'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

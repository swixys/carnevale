<?php
/*
 * Template name: Studio
 */
get_header(); ?>
<main class="main">
    <?php if (have_rows('studio')): ?>
        <?php while (have_rows('studio')):
            the_row(); ?>
            <?php if (get_row_layout() == 'info'): ?>
            <?php get_template_part('studio-parts/sections', 'info'); ?>
        <?php endif; ?>
            <?php if (get_row_layout() == 'content'): ?>
            <?php get_template_part('studio-parts/sections', 'content'); ?>
        <?php endif; ?>
            <?php if (get_row_layout() == 'slider'): ?>
            <?php get_template_part('studio-parts/sections', 'slider'); ?>
        <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

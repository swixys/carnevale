<?php
/*
 * Template name: Case studio
 */
get_header(); ?>
<main class="main">
    <div class="container">
        <?php if (have_rows('case_page')): ?>
            <?php while (have_rows('case_page')): the_row(); ?>
                <?php if (get_row_layout() == 'title_wich_text'): ?>
                    <?php get_template_part('case-studio-parts/sections', 'info'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('case_page')): ?>
            <?php while (have_rows('case_page')): the_row(); ?>
                <?php if (get_row_layout() == 'cases'): ?>
                    <?php get_template_part('case-studio-parts/sections', 'case'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('case_page')): ?>
            <?php while (have_rows('case_page')): the_row(); ?>
                <?php if (get_row_layout() == 'remarkable-clients'): ?>
                    <?php get_template_part('case-studio-parts/sections', 'clients'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

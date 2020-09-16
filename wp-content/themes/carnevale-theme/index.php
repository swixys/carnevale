<?php get_header(); ?>
    <main class="main">
        <?php if (have_rows('home')): ?>
            <?php while (have_rows('home')): the_row(); ?>
                <?php if (get_row_layout() == 'hero_video'): ?>
                    <?php get_template_part('home-parts/sections', 'video'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'text_block'): ?>
                    <?php get_template_part('home-parts/sections', 'text-block'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'services'): ?>
                    <?php get_template_part('home-parts/sections', 'services'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'slider'): ?>
                    <?php get_template_part('home-parts/sections', 'slider'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'clients'): ?>
                    <?php get_template_part('home-parts/sections', 'clients'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>
<?php get_header(); ?>
<main class="main">
    <?php if (have_rows('case')): ?>
        <?php while (have_rows('case')): the_row(); ?>
            <?php if (get_row_layout() == 'main_image'): ?>
                <?php get_template_part('case-parts/sections', 'main-image'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>



        <?php if (have_rows('case')): ?>
            <?php while (have_rows('case')): the_row(); ?>

                <?php if (get_row_layout() == 'title_info'): ?>
                    <?php get_template_part('case-parts/sections', 'info'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'video'): ?>
                    <?php get_template_part('case-parts/sections', 'video'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'image_50%'): ?>
                    <?php get_template_part('case-parts/sections', 'image-or-vidio'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'title_with_text'): ?>
                    <?php get_template_part('case-parts/sections', 'title-wich-text'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'quote'): ?>
                    <?php get_template_part('case-parts/sections', 'qoute'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'image_full'): ?>
                    <?php get_template_part('case-parts/sections', 'image-full'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'related_technology'): ?>
                    <?php get_template_part('case-parts/sections', 'related-technology'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'more_work'): ?>
                    <?php get_template_part('case-parts/sections', 'more-works'); ?>
                    <?php break; ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'slider'): ?>
                    <?php get_template_part('case-parts/sections', 'slider'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'image_50'): ?>
                    <?php get_template_part('case-parts/sections', 'image'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <script>
        $(function(){
            $('.js-load-video').joldLoadVideo({

            });
        });
    </script>
</main>
<?php get_footer(); ?>

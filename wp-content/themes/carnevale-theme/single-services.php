<?php get_header(); ?>
<main class="main">
    <?php if (have_rows('services')): ?>
        <?php while (have_rows('services')): the_row(); ?>
            <?php if (get_row_layout() == 'main_image'): ?>
                <?php get_template_part('single-service-parts/sections', 'image-main'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="container">
        <?php if (have_rows('services')): ?>
            <?php while (have_rows('services')): the_row(); ?>
                <?php if (get_row_layout() == 'title_info'): ?>
                    <?php get_template_part('single-service-parts/sections', 'info'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'image_full'): ?>
                    <?php get_template_part('single-service-parts/sections', 'image-full'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'title_with_text'): ?>
                    <?php get_template_part('single-service-parts/sections', 'title-text'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'image_50%'): ?>
                    <?php get_template_part('single-service-parts/sections', 'image'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'related_technology'): ?>
                    <?php get_template_part('single-service-parts/sections', 'related-technology'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'more_services'): ?>
                    <?php get_template_part('single-service-parts/sections', 'more-services'); ?>
                    <?php break; ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'image_or_video_50%'): ?>
                    <?php get_template_part('single-service-parts/sections', 'image-or-vidio'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'quote'): ?>
                    <?php get_template_part('single-service-parts/sections', 'qoute'); ?>
                <?php endif; ?>
                <?php if (get_row_layout() == 'video'): ?>
                    <?php get_template_part('single-service-parts/sections', 'video'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <script>
            $(function(){
                $('.js-load-video').joldLoadVideo({

                });
            });
        </script>
    </div>
</main>
<?php get_footer(); ?>

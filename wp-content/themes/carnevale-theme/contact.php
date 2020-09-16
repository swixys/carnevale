<?php
/*
 * Template name: Contact
 */
get_header(); ?>
    <main class="main">
        <section class="contact container">
            <?php if (have_rows('contact')): ?>
                <?php while (have_rows('contact')):
                    the_row(); ?>

                    <?php if (get_row_layout() == 'contact_form'): ?>
                    <?php get_template_part('contact-parts/sections', 'contact'); ?>
                <?php endif; ?>

                    <?php if (get_row_layout() == 'title_wich_text'): ?>
                    <?php get_template_part('contact-parts/sections', 'title-text'); ?>
                <?php endif; ?>

                    <?php if (get_row_layout() == 'slider'): ?>
                    <?php get_template_part('contact-parts/sections', 'slider'); ?>
                <?php endif; ?>
                    <?php if (get_row_layout() == 'open_position'): ?>
                    <?php get_template_part('contact-parts/sections', 'position'); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </section>
    </main>
    <script>

    </script>
    <script>

    </script>

<?php get_footer(); ?>
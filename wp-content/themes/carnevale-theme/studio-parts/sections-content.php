<section class="content">
    <?php if (have_rows('content_studio')): ?>
        <?php while (have_rows('content_studio')): the_row(); ?>
            <?php if (get_row_layout() == 'title_with_text'): ?>
                <div class="about">
                    <div class="about__title">
                        <p class="about__title--large">
                            <?php the_sub_field('title'); ?>
                        </p>
                    </div>
                    <div class="about__description">
                        <p>
                            <?php the_sub_field('text'); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_row_layout() == 'full_image'): ?>
                <div class="about">
                    <div class="details-image">
                        <div class="details-image__wrapper">
                            <img src="<?php the_sub_field('image'); ?>"
                                 alt="cover" class="details-image__image">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_row_layout() == 'image_50%'): ?>
                <div class="about-images">
                    <div class="details-image">
                        <div class="details-image__wrapper">
                            <img src="<?php the_sub_field('image_№1'); ?>"
                                 alt="cover" class="details-image__image">
                        </div>
                    </div>
                    <div class="details-image">
                        <div class="details-image__wrapper">
                            <img src="<?php the_sub_field('image_№2'); ?>"
                                 alt="cover" class="details-image__image">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
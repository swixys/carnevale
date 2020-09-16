<section class="about">
    <div class="about__title">
        <?php the_sub_field('title'); ?>
    </div>
    <div class="about__description">
        <?php if (have_rows('text')): ?>
            <?php while (have_rows('text')): the_row(); ?>
                <div class="body-large">
                    <?php the_sub_field('text1'); ?>
                </div>
                <p>
                    <?php the_sub_field('text2'); ?>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

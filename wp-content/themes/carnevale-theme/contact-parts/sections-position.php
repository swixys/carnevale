<section class="contact__open-position about">
    <div class="about__title">
        <p class="about__title--large">
            <?php the_sub_field('title'); ?>
        </p>
    </div>
    <div class="about__description">
        <?php if (have_rows('info')): ?>
            <?php while (have_rows('info')): the_row(); ?>
                <p>
                    <?php the_sub_field('text'); ?>
                </p>
                <p class="recruiters"><i> <?php the_sub_field('subtitle'); ?></i></p>
                <ul class="position__list">
                    <?php
                    if (have_rows('position')):
                        while (have_rows('position')) : the_row();
                            ?>
                            <li class="position__item"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('position_name'); ?></a></li>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>

                </ul>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

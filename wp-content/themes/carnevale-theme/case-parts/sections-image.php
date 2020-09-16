<div class="container">
    <section class="about-images">
        <?php
        if (have_rows('block')):
            while (have_rows('block')) : the_row();
                ?>
                <div class="details-image">
                    <div class="details-image__wrapper">
                        <img src="<?php the_sub_field('image'); ?>"
                             alt="cover"
                             class="details-image__image">
                    </div>
                    <?php if (get_sub_field('text')): ?>
                        <div class="details-image__caption"><?php the_sub_field('text'); ?></div>
                    <?php endif; ?>
                </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </section>
</div>
<section class="about">
    <div class="details-image">
        <div class="details-image__wrapper">
            <img src="<?php the_sub_field('image'); ?>" alt="cover"
                 class="details-image__image">
        </div>
        <?php if( get_sub_field('text') ): ?>
        <div class="details-image__caption">
            <?php the_sub_field('text'); ?>
        </div>
        <?php endif; ?>
    </div>
</section>
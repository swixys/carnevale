<section class="sponsors main container">
    <p class="sponsors__description">
        <?php the_sub_field('text'); ?>
    </p>
    <div class="sponsors__list">
        <?php
        if (have_rows('logo')):
            while (have_rows('logo')) : the_row();
                ?>
                <div class="sponsors__item">
                    <img src="<?php the_sub_field('images'); ?>" class="sponsors__image">
                </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</section>
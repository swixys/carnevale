<section class="contact__gallery">
    <ul class="gallery">
        <?php
        if (have_rows('images')):
            while (have_rows('images')) : the_row();
                ?>
                <li class="gallery__item">
                    <img src="<?php the_sub_field('image'); ?>" alt="gallery image"
                         class="gallery__image">
                </li>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </ul>
    <div class="gallery__controls">
        <button class="slider-control__prev">
            <img class="inactive"
                 src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-left.svg">
            <img class="hover"
                 src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-left-reversed.svg">
        </button>
        <button class="slider-control__next">
            <img class="inactive"
                 src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-right.svg">
            <img class="hover"
                 src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-right-reversed.svg">
        </button>
    </div>
</section>

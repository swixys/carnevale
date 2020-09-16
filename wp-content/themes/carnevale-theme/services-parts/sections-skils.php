<section class="our-skills">
    <h3>Our skills</h3>
    <ul class="skills">
        <?php
        if (have_rows('skils_block')):
            while (have_rows('skils_block')) : the_row();
                ?>
                <li class="skills__item">
                    <a class="caption" id="<?php echo get_row_index(); ?>">
                        <div class="skills__img-wrapper">
                            <img src="<?php the_sub_field('image'); ?>" alt="product-strategy"
                                 class="skills__image">
                            <div class="skills__drawer-button">
                                <img
                                        src="<?php echo bloginfo('template_url'); ?>/assets/icons/diagonal-arrow.svg"
                                        class="skills__drawer-icon">
                            </div>
                        </div>
                    </a>
                    <a class="caption" id="<?php echo get_row_index(); ?>">
                        <p class="caption__description"><?php the_sub_field('title'); ?></p>
                    </a>
                </li>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </ul>
</section>
<?php
if (have_rows('skils_block')):
    while (have_rows('skils_block')) : the_row();
        ?>
        <div id='drawer_<?php echo get_row_index(); ?>' class="drawer">
            <button class="close">
                <img class="inactive"
                     src="<?php echo bloginfo('template_url'); ?>/assets/icons/close.svg">
                <img class="hover"
                     src="<?php echo bloginfo('template_url'); ?>/assets/icons/close-hover.svg">
            </button>
            <div class="drawer__content">
                <div class="drawer__img-wrapper">
                    <img
                            src="<?php the_sub_field('image'); ?>"
                            alt="product-strategy"
                            class="drawer__image"
                    >

                </div>
                <div class="drawer__description">
                    <p class="skill__caption caption">
                    <p class="caption__title"><?php the_sub_field('subtitle'); ?></p>
                    <p class="caption__description"><?php the_sub_field('title'); ?></p>
                    </p>
                    <p class="skill__description">
                        <?php the_sub_field('text'); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php
    endwhile;
else :
endif;
?>

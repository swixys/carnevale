<section class="additional-services" style=" border-bottom: none">
    <div class="carousel">
        <div class="carousel__slides">
            <?php
            if (have_rows('slider_block')):
                while (have_rows('slider_block')) : the_row();
                    ?>
                    <div class="carousel__slide fade">
                        <div class="carousel__image-wrapper">
                            <img class="carousel__image" src="<?php the_sub_field('image'); ?>" alt="service 1">
                        </div>
                        <div class="caption">
                            <p class="caption__title"><?php the_sub_field('title'); ?></p>
                            <p class="caption__description"> <a style="border-bottom: none" class="caption__description" href="<?php the_sub_field('link'); ?>"><span><?php the_sub_field('subtitle'); ?></span></a></p>
                            <a style="border-bottom:none;" href="<?php the_sub_field('link'); ?>"><button class="dark">Read more</button></a>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="carousel__controls">

            <div class="carousel__controls-slides">
                <button class="dark slider-control__prev">
                    <img class="inactive"
                         src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-left-reversed.svg">
                    <img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-left-red.svg">
                </button>
                <button class="dark slider-control__next">
                    <img class="inactive"
                         src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-right-reversed.svg">
                    <img class="hover" src="<?php echo bloginfo('template_url'); ?>/assets/icons/chevron-right-red.svg">
                </button>
            </div>
        </div>
    </div>
</section>






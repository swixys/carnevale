<section class="services container" style=" border-bottom: none">
    <div class="carousel">
        <div class="carousel__slides">
            <?php
            $post_objects = get_sub_field('service');
            if ($post_objects): ?>
                <?php foreach ($post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="carousel__slide fade">
                        <div class="carousel__image-wrapper">
                            <?php if (have_rows('services')): ?>
                                <?php while (have_rows('services')): the_row(); ?>
                                    <?php if (get_row_layout() == 'main_image'): ?>
                                        <img class="carousel__image"
                                             src="<?php the_sub_field('image'); ?>" alt="service 1">
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="carousel__caption">
                            <div class="carousel__caption-content">
                                <?php if (have_rows('services')): ?>
                                    <?php while (have_rows('services')): the_row(); ?>
                                        <?php if (get_row_layout() == 'title_info'): ?>
                                            <p class="carousel__caption-title"><?php the_sub_field('subtitle'); ?></p>
                                            <p class="carousel__caption-subtitle"><?php the_sub_field('title'); ?></p>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <div class="carousel__caption-description">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <button class="carousel__caption-button">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif;
            ?>
        </div>
        <div class="carousel__controls">

            <div class="carousel__controls-slides">
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
        </div>
        <div class="carousel__tabs">
            <?php if (get_row_layout() == 'services'): ?>
                <?php
                $post_objects = get_sub_field('service');
                if ($post_objects): ?>
                    <?php foreach ($post_objects as $post): ?>
                        <?php setup_postdata($post); ?>

                        <?php if (have_rows('services')): ?>
                            <?php while (have_rows('services')): the_row(); ?>
                                <?php if (get_row_layout() == 'title_info'): ?>
                                    <a class="service-carousel">
                                        <p class="service-carousel__title">Services</p>
                                        <p class="service-carousel__description"><?php the_sub_field('subtitle'); ?></p>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>

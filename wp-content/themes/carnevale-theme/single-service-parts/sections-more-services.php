<section class="more-services">
    <h3>More services</h3>
    <ul class="services__list">
        <?php
        $post_objects = get_sub_field('more_service');
        if ($post_objects): ?>
            <?php foreach ($post_objects as $post): ?>
                <?php setup_postdata($post); ?>
                <li class="services__item item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="item__img-wrapper">
                            <?php if (have_rows('services')): the_row(); ?>

                                <img src="<?php the_sub_field('image'); ?>" alt="serviceId" class="item__image">
                            <?php endif; ?>

                        </div>
                    </a>
                    <a href="<?php the_permalink(); ?>" class="caption">
                        <?php if (have_rows('services')): the_row(); ?>
                            <?php if (get_row_layout() == 'title_info'): ?>
                                <p class="caption__title"><?php the_sub_field('subtitle'); ?></p>
                                <p class="caption__description"><?php the_sub_field('title'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                    </a></li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
        <?php endif;
        ?>
    </ul>
</section>

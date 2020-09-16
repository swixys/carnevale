<section class="about-images" style="flex-wrap: wrap">
    <?php
    $post_objects = get_sub_field('cases_block');
    if ($post_objects): ?>
        <?php foreach ($post_objects as $post): ?>
            <?php setup_postdata($post); ?>

            <div class="details-image">
                <a href="<?php the_permalink(); ?>" >
                <div class="details-image__wrapper">
                    <?php if (have_rows('case')): ?>
                        <?php while (have_rows('case')): the_row(); ?>
                            <?php if (get_row_layout() == 'main_image'): ?>
                                <img src="<?php the_sub_field('image'); ?>" alt="cover" class="details-image__image">
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                </a>
                <a href="<?php the_permalink(); ?>" class="caption">
                    <?php if (have_rows('case')): ?>
                        <?php while (have_rows('case')): the_row(); ?>
                            <?php if (get_row_layout() == 'title_info'): ?>
                                <p class="caption__title"><?php the_sub_field('subtitle'); ?></p>
                                <p class="caption__description"><?php the_sub_field('title'); ?></p>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </a>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
    <?php endif;
    ?>
</section>

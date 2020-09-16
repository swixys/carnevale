<section class="about-images">
    <?php if (have_rows('content')): ?>
        <?php while (have_rows('content')): the_row(); ?>
            <?php if (get_row_layout() == 'video'): ?>
                <div class="details-image">
                    <div class="details-image__wrapper details-image__wrapper_video">
                       
                        <div class="video-container">
                            <div class="js-load-video" data-service="vimeo" data-placeholder="" data-embed="<?php the_sub_field('link_to_vimeo'); ?>">
                                <a class="btn" title="Play Video"></a>
                            </div>
                        </div>
                    </div>

                    <?php if( get_sub_field('text') ): ?>
                        <div class="details-image__caption"><?php the_sub_field('text'); ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if (get_row_layout() == 'images'): ?>
                <div class="details-image">
                    <div class="details-image__wrapper details-image__wrapper_video">
                        <img src="<?php the_sub_field('image'); ?>" alt="cover"
                             class="details-image__image">
                    </div>
                <?php if( get_sub_field('text') ): ?>
                    <div class="details-image__caption"><?php the_sub_field('text'); ?></div>
                <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
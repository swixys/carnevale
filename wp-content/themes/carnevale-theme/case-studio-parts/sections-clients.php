<section class="remarkable-clients">
    <header class="remarkable-clients__header about">
        <div class="about__title">
            <p class="about__title--large">
                <?php the_sub_field('title'); ?>
            </p>
        </div>
        <div class="about__description">
            <p class="body-large">
                <?php the_sub_field('text'); ?>
            </p>
        </div>
    </header>
    <ul class="remarkable-clients__list">
        <?php
        if (have_rows('remarkable_client')):
            while (have_rows('remarkable_client')) : the_row();
                ?>
                <li class="remarkable-clients__item">
        <span class="remarkable-clients__link">
         <?php the_sub_field('name'); ?>
        </span>
                </li>
            <?php endwhile;
        else :
        endif;
        ?>
    </ul>
</section>
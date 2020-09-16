<section class="extended-services">
    <h3>Extended services</h3>
    <ul class="extended-services__list">
        <?php
        if (have_rows('extended_service')):
            while (have_rows('extended_service')) : the_row();
                ?>
                <li class="extended-services__item">
        <span class="extended-services__link">
          <?php the_sub_field('name'); ?>
        </span>
                </li>
            <?php
            endwhile;
        else :
        endif;
        ?>

    </ul>
</section>

<div class="container">
<section class="related-technology">
    <h3>Related technology</h3>
    <ul class="related-technology__list">
        <?php
        if (have_rows('related_technologys')):
            while (have_rows('related_technologys')) : the_row();
                ?>
                <li class="related-technology__item">
        <span class="related-technology__link">
           <?php the_sub_field('name'); ?>
        </span></li>
            <?php endwhile;
        else :
        endif;
        ?>

    </ul>
</section>
</div>
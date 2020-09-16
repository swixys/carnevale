<section class="contact__header">
    <?php the_sub_field('title'); ?>
    <p class="body-large"><?php the_sub_field('text'); ?></p>
    <p><?php the_sub_field('adress'); ?></p>
</section>

<section class="contact__form">
    <?php echo do_shortcode('[contact-form-7 id="361" title="Контактная форма 1"]'); ?>
    <div class="contact__form_thanks">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/message.png"
             class="form_thanks-form">
        <div class="form_thanks-text">
            Thanks for the message!<br>
            We’ll get back with you shortly.
        </div>
    </div>
</section>

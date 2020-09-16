<section id="goToNext" class="about">
    <div class="about__title">
        <div class="title">
            <p class="title__title"><?php the_sub_field('subtitle'); ?></p>
            <p class="title__subtitle"><?php the_sub_field('title'); ?></p>
        </div>
        <p class="social-links">
            <span>Share</span>
            <?php $url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

            $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
            ?>

            <a target="_blank" href="http://www.facebook.com/sharer.php?u=http:<?php echo $escaped_url ?>" class="social-link">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook.svg"
                     alt="facebook"
                     class="inactive">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook-hover.svg"
                     alt="facebook" class="hover">
            </a>


            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=http:<?php echo $escaped_url ?>"
               class="social-link">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in.svg"
                     alt="linkedin"
                     class="inactive">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in-hover.svg"
                     alt="linkedin" class="hover">
            </a>

            <a target="_blank" href="http://twitter.com/share?text=<?php the_sub_field('title'); ?>&url=<?php echo $escaped_url ?>"
               class="social-link">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg"
                     alt="twitter"
                     class="inactive">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter-hover.svg"
                     alt="twitter"
                     class="hover">
            </a>


            <a target="_blank" href="mailto:?subject=<?php the_sub_field('title'); ?>&amp;body=Check out this page  http:<?php echo $escaped_url ?>" class="social-link">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/email.svg"
                     alt="mail"
                     class="inactive">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/email-hover.svg"
                     alt="mail"
                     class="hover">
            </a>

        </p>
    </div>
    <div class="about__description">
        <div class="body-large">
            <?php the_sub_field('text_first'); ?>
        </div>
        <div>
            <?php the_sub_field('text_second'); ?>
        </div>
    </div>
</section>
<footer class="footer container">
    <div class="footer__links">
        <div class="links-group">
            <?php
            $params = array(
                'container'=> false,
                'echo'=> false,
                'menu'=> 'footer-menu1',
            );
            // Чистим все теги, кроме ссылок
            print strip_tags(wp_nav_menu( $params ), '<a>' );
            ?>
        </div>
        <div class="links-group">
            <?php
            $params = array(
                'container'=> false,
                'echo'=> false,
                'menu'=> 'footer-menu2',
            );
            // Чистим все теги, кроме ссылок
            print strip_tags(wp_nav_menu( $params ), '<a>' );
            ?>
        </div>
        <div class="links-group">
            <a href="https://www.carnevale.co/op/">
                Carnevale.co/op
            </a>
            <p class="links-group-par">Partnering with organizations to create technology for social good.</p>
        </div>
    </div>
    <div class="footer__social">
        <a  href="http://www.facebook.com/carnevaleco" class="social-link">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook.svg" alt="facebook" class="inactive">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook-hover.svg" alt="facebook" class="hover">
        </a>
        <a  href="https://www.instagram.com/carnevale_co" class="social-link">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" class="inactive">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram-hover.svg" alt="instagram" class="hover">
        </a>
        <a  href="https://www.linkedin.com/company/carnevale/" class="social-link">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in.svg" alt="linkedin" class="inactive">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/linked-in-hover.svg" alt="linkedin" class="hover">
        </a>
        <a  href="https://twitter.com/carnevale_co" class="social-link">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter.svg" alt="twitter" class="inactive">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/twitter-hover.svg" alt="twitter" class="hover">
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142448003-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); 
    gtag('config', 'UA-142448003-2');
</script>
</body>
</html>
<footer class="footer" style="background-image: url(<?php the_field('footer_background')?>)">
        <div class="container">
            <div class="footer__inner">
                <a class="logo-link footer__logo-link" href="#">
                    <img class="logo-img footer__logo-img" src="<?php the_field('logotype')?>"" alt="logotype">
                </a>
                <a  class="footer__privacy" href="#">
                    Политика конфиденциальности
                </a>
                <p class="footer__copyright">
                    © 2020, Oknavid.com
                </p>
                
            </div>
    </footer> 
    <?php wp_footer();?>
</body>
</html>
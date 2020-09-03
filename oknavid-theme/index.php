<?php get_header(); ?>
    <main class="main-content">
        <section class="services " style="background-image: url(<?php the_field('footer_background')?>)">
            <div class="container">
                <div class="services__inner services__inner-row">
                    <a class="logo-link services__logo-link" href="#">
                        <img class="logo-img services__logo-img" src="<?php the_field('logotype')?>" alt="logotype">
                    </a>
                    <ul class="services__menu services__menu--closed">
                        <li class="services__menu-item">
                            <a href="#" class="services__menu-link">
                                Об услуге
                            </a>
                        </li>
                        <li class="services__menu-item">
                            <a href="#" class="services__menu-link">
                                Отзывы
                            </a>
                        </li>
                        <li class="services__menu-item">
                            <a href="#" class="services__menu-link">
                                Фотоотчет
                            </a>
                        </li>
                        <li class="services__menu-item">
                            <a href="#" class="services__menu-link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <div class="services__contact section__contact">
                        <a class="services__contact-phone section__phone" href="tel:+380677152118">
                            +38 (067) 715 21 18
                        </a>
                        <a class="services__contact-phone section__phone" href="tel:+380993398829">
                            +38 (099) 339 88 29
                        </a>
                    </div>
                    <div class="burger-menu burger-menu--closed">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>  
                </div>
            </div>
        </section>
        <section class="offers" style="background-image: url(<?php the_field('offers__background')?>);">
            <div class="container">
                <div class="offers__inner">
                    <h3 class="offers__inner-title section__title">
                        <?php the_field('offers__inner-title')?>
                    </h3>
                    <ul class="offers__inner-items">
                        <li class="offers__inner-item">
                            <?php the_field('offers__inner-item-1')?>
                        </li>
                        <li class="offers__inner-item">
                            <?php the_field('offers__inner-item-2')?>                            
                        </li>
                    </ul>
                    <a class="offers__inner-btn" href="#">
                        Заказать услугу
                    </a>
                </div>
            </div>
        </section>

        <section class="production" style="background-image: url(<?php the_field('production__background')?>);">
            <div class="container">
                <div class="production__inner">
                    <h3 class="production__inner-title section__title">                        
                        <?php the_field('production__inner-title')?>
                    </h3>
                    <p class="production__inner-txt section__txt">
                        <?php the_field('production__inner-txt')?>
                    </p>
                    <ul class="production__inner-items">
                        <li class="production__inner-item">
                            <?php the_field('production__inner-item-1')?>                            
                        </li>
                        <li class="production__inner-item">
                            <?php the_field('production__inner-item-2')?>  
                        </li>
                        <li class="production__inner-item">
                            <?php the_field('production__inner-item-3')?>
                        </li>
                        <li class="production__inner-item">
                            <?php the_field('production__inner-item-4')?>
                        </li>                        
                    </ul>
                </div>
            </div>
        </section>

        <section class="contactform" style="background-image: url(<?php the_field('contactform__background')?>);">
            <div class="container">
                <div class="contactform__inner">
                    <form class="contactform__form" action="">
                        <h3 class="contactform__title section__title">                            
                            <?php the_field('contactform__title')?>
                        </h3>
                        <p class="contactform__txt section__txt">
                            <?php the_field('contactform__txt')?>
                            
                        </p>
                        <!-- <input type="text" placeholder="Имя">
                        <input type="tel" placeholder="+38">
                        <button type="submit">Получить консультацию</button> -->
                        <?php echo do_shortcode('[contact-form-7 id="154" title="Контактная форма"]')?>
                    </form>

                    <div class="contactform__manager">
                        <p class="contactform__manager-name">
                            <?php the_field('contactform__manager-name')?>                            
                        </p>
                        <p class="contactform__manager-position">
                            <?php the_field('contactform__manager-position')?>                                 
                        </p>
                        <span class="contactform__manager-dot"></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="samples" style="background-image: url(<?php the_field('samples__background')?>);">
            <div class="container">
                <div class="samples__inner">
                    <div class="samples__inner-item samples__inner-textbox">
                        <h3 class="samples__inner-title section__title">
                            <?php the_field('samples__inner-title')?>
                           
                        </h3>
                        <p class="samples__inner-txt section__txt">
                            <?php the_field('samples__inner-txt')?>
                        </p>
                    </div>
                    <img  class="samples__inner-item samples__inner-item--hiden" src="<?php the_field('samples__inner-item-1')?>" alt="our work">
                    <img  class="samples__inner-item samples__inner-item--hiden" src="<?php the_field('samples__inner-item-2')?>" alt="our work">
                    <img  class="samples__inner-item samples__inner-item--hiden" src="<?php the_field('samples__inner-item-3')?>" alt="our work">
                    <img  class="samples__inner-item samples__inner-item--hiden" src="<?php the_field('samples__inner-item-4')?>" alt="our work">
                    <img  class="samples__inner-item samples__inner-item--hiden" src="<?php the_field('samples__inner-item-5')?>" alt="our work">
                    
                    <div class="samples__inner-slider">
                        <img  class="samples__inner-item" src="<?php the_field('samples__inner-item-1')?>" alt="our work">
                        <img  class="samples__inner-item" src="<?php the_field('samples__inner-item-2')?>" alt="our work">
                        <img  class="samples__inner-item" src="<?php the_field('samples__inner-item-3')?>" alt="our work">
                        <img  class="samples__inner-item" src="<?php the_field('samples__inner-item-4')?>" alt="our work">
                        <img  class="samples__inner-item" src="<?php the_field('samples__inner-item-5')?>" alt="our work">
                    </div>
                </div>
            </div>
        </section>

        
        <section class="reviews" style="background-image: url(<?php the_field('reviews__background')?>);">
            <div class="container">
                <div class="reviews__inner">
                    <div class="reviews__inner-box">
                        <h3 class="reviews__inner-title section__title">                            
                            <?php the_field('reviews__inner-title')?>
                        </h3>
                        <h4 class="reviews__inner-subtitle">
                            <?php the_field('reviews__inner-subtitle')?>
                        </h4>
                    </div>                    

                    
                            <?php
                                $featured_posts = get_field('reviews__comment');
                                    if( $featured_posts ): ?>
                                    <ul class="reviews__comments">
                                    <?php foreach( $featured_posts as $post ): 
                                        setup_postdata($post); ?>
                                        <li class="reviews__comment">
                                            
                                                <div class="reviews__comment-photobox">
                                                    <img  class="reviews__comment-avatar" src="<?php the_field('reviews__comment-avatar')?>" alt="avatar">
                                                    <time class="reviews__comment-time" datetime='2020-06-28'><?php the_field('reviews__comment-time')?></time>
                                                </div>
                                                <div class="reviews__comment-textbox">
                                                    <p class="reviews__comment-name">
                                                        <?php the_field('reviews__comment-name')?>
                                                    </p>
                                                    <p class="reviews__comment-txt">
                                                        <?php the_field('reviews__comment-txt')?>
                                                    </p>
                                                </div>
                                            
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                <?php 
                                wp_reset_postdata(); ?>
                            <?php endif; ?>   
                    

                </div>
            </div>
        </section>

        <section class="contacts" style="background-image: url( <?php the_field('contacts__background')?>);">
            <div class="container">
                <div class="contacts__inner">
                    <div class="contacts__inner-box">
                        <h3 class="contacts__inner-title section__title">                            
                            <?php the_field('contacts__inner-title')?>
                        </h3>
                        <p class="contacts__inner-txt section__txt">
                            <?php the_field('contacts__inner-txt')?>                            
                        </p>
                        <div class="contacts__inner-phones section__contact">
                            <a class="contacts__inner-phone section__phone" href="tel:+380677152118">
                                
                                <?php the_field('contacts__inner-phone-1')?> 
                            </a>
                            <a class="contacts__inner-phone section__phone" href="tel:+380993398829">
                                <?php the_field('contacts__inner-phone-2')?>
                            </a>
                        </div>
                        <address class="contacts__inner-address">                            
                            <?php the_field('contacts__inner-address')?>
                        </address>
                        <div class="contacts__messengers">
                            <div class="contacts__messengers-txt">
                                Связаться с нами через мессенджеры:
                            </div>
                            <a  class="contacts__messenger contacts__messenger-whatsap" href="whatsapp://tel:380677152118" title="Связаться с нами в Whatsap">
                                12
                            </a>
                            <a class="contacts__messenger contacts__messenger-viber" href="viber://add?number=380677152118" title="Связаться с нами в Viber">
                                12
                            </a>
                        </div>
                    </div>
                    <div class="contacts__inner-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.9335402294414!2d30.73231642943116!3d46.469824383122365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631819c0b1959%3A0xc97b93cc25f6cb3f!2z0J_QoNCY0JLQntCX!5e0!3m2!1sru!2sua!4v1597071720780!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>


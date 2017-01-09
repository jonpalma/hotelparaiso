<?php $page = 'contacto'; ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container light-spacing">
            <div class="col-xs-6 left-side">
                <div class="images-container vertical-align">
                    <div class="logo-container">
                        <a class="smoothScroll" href="#index">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/contacto/logo.png" alt="">
                        </a>
                    </div>
                    <div class="link-container">
                        <a target="_blank" href="https://www.facebook.com/">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/contacto/fb.png" alt="">
                        </a>
                        <a target="_blank" href="https://www.tripadvisor.com.mx/">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/contacto/trip.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 right-side">
                <div class="forma vertical-align">
                    <p>
                        <?php echo CFS()-> get('contacto_title');?>
                    </p>
                    <div class="form-container">
                        <?php echo do_shortcode('[contact-form-7 id="18" title="Forma de Contacto"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
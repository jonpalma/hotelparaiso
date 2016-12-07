<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="top-info">
                <p class="ciudad">
                    MEOQUI, CHIHUAHUA
                </p>
                <p class="telefono">
                    (639)473.1050
                </p>
            </div>
            <div class="middle-info">
                <h1>
                    <?php echo CFS()->get('banner_text');?>
                </h1>
                <a class="smoothScroll" href="#reservaciones">
                    RESERVA
                </a>
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arrayBanner = CFS()->get('banner_array');
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach($arrayBanner as $banner)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<div class="item active">';
                    }
                    else
                    {
                        echo '</div>';
                        echo '<div class="item">';
                    }
                ?>
                <div class="img-container">
                    <img class="img-bg" src="<?php echo $banner['banner_img'];?>" alt="">
                </div>
                <?php
                    $counter++;
                }
                echo '</div>';
                ?>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $arrayBanner = CFS()->get('banner_array');
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach($arrayBanner as $banner)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<li data-target="#carousel-banner" data-slide-to="'.$counter.'" class="active"></li>';
                    }
                    else
                    {
                        echo '<li data-target="#carousel-banner" data-slide-to="'.$counter.'"></li>';
                    }
                ?>
                <?php
                    $counter++;
                }
                ?>
            </ol>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container light-spacing">
            <div id="carousel-nosotros" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayNosotros = CFS()->get('nosotros_array');
                    $arrayEnd = end($arrayNosotros);
                    $counter = 0;
                    foreach($arrayNosotros as $dato)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div class="item">';
                        }
                    ?>
                    <div class="col-sm-7 vertical-align">
                        <div class="contenido">
                            <?php echo $dato['nosotros_text'];?>
                        </div>
                    </div>
                    <div class="col-sm-5 vertical-align hidden-xs">
                        <div class="img-container">
                            <img src="<?php echo $dato['nosotros_img'];?>" alt="">
                        </div>
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-nosotros" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-nosotros" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios" id="servicios">
        <div class="container spacing">
            <h1>
                <?php echo CFS()-> get('servicios_title');?>
            </h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php
                $arrayServicios = CFS()->get('servicios_array');
                $arrayEnd = end($arrayServicios);
                $counter = 0;
                foreach($arrayServicios as $servicio)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<li role="presentation" class="active">';
                    }
                    else
                    {
                        echo '</li>';
                        echo '<li role="presentation">';
                    }
                ?>
                <?php
                    echo '<a href="#tab-'.$counter.'" aria-controls="tab-'.$counter.'" role="tab" data-toggle="tab">';
                ?>
                <div class="img-container">
                    <img src="<?php echo $servicio['servicio_logo'];?>" alt="">
                </div>
                <p>
                    <?php echo $servicio['servicio_title'];?>
                </p>
                <?php
                    echo '</a>';
                ?>
                <?php
                    $counter++;
                }
                echo '</li>';
                ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                $arrayServicios = CFS()->get('servicios_array');
                $arrayEnd = end($arrayServicios);
                $counter = 0;
                foreach($arrayServicios as $servicio)
                {
                ?>
                <?php
                    if($counter == 0)
                    {
                        echo '<div role="tabpanel" class="tab-pane fade in active" id="tab-'.$counter.'">';
                    }
                    else
                    {
                        echo '</div>';
                        echo '<div role="tabpanel" class="tab-pane fade" id="tab-'.$counter.'">';
                    }
                ?>
                <div class="col-sm-5 vertical-align hidden-xs">
                    <div class="img-container">
                        <img class="vertical-align" src="<?php echo $servicio['servicio_img'];?>" alt="">
                    </div>
                </div>
                <div class="col-sm-7 vertical-align">
                    <h2>
                        <?php echo $servicio['servicio_title'];?>
                    </h2>
                    <p>
                        <?php echo $servicio['servicio_text'];?>
                    </p>
                </div>
                <?php
                    $counter++;
                }
                echo '</div>';
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* INSTALACIONES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="instalaciones" id="instalaciones">
        <div class="container spacing">
            <h1>
                <?php echo CFS()-> get('instalaciones_title');?>
            </h1>
            <div class="col-xs-6 texto">
                <p>
                    <?php echo CFS()-> get('1er_cuadro_text');?>
                </p>
            </div>
            <div class="col-xs-6 imagen">
                <div class="img-container txt-hov-1">
                    <img src="<?php echo CFS()-> get('1er_img');?>" alt="">
                </div>
            </div>
            <div class="col-xs-6 imagen">
                <div class="img-container txt-hov-2">
                    <img src="<?php echo CFS()-> get('2da_img');?>" alt="">
                </div>
            </div>
            <div class="col-xs-6 texto">
                <p>
                    <?php echo CFS()-> get('2do_cuadro_text');?>
                </p>
            </div>
            <div class="col-xs-6 texto">
                <p>
                    <?php echo CFS()-> get('3er_cuadro_text');?>
                </p>
            </div>
            <div class="col-xs-6 imagen">
                <div class="img-container txt-hov-3">
                    <img src="<?php echo CFS()-> get('3er_img');?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* TARIFAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="tarifas" id="tarifas">
        <div class="container spacing">
            <h1>
                <?php echo CFS()-> get('promociones_title');?>
            </h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php
                $arrayHabitaciones = CFS()->get('habitaciones_array');
                $arrayEnd = end($arrayHabitaciones);
                $counter1st = 0;
                foreach($arrayHabitaciones as $habitacion)
                {
                    if($counter1st < 3)
                    {
                ?>
                <?php
                        if($counter1st == 0)
                        {
                            echo '<a href="#tabpanel-'.$counter1st.'" aria-controls="tabpanel-'.$counter1st.'" role="tab" data-toggle="tab">';
                            echo '<li role="presentation" class="active">';
                        }
                        else
                        {
                            echo '</li>';
                            echo '</a>';
                            echo '<a href="#tabpanel-'.$counter1st.'" aria-controls="tabpanel-'.$counter1st.'" role="tab" data-toggle="tab">';
                            echo '<li role="presentation">';
                        }
                ?>
                <p>
                    <?php echo $habitacion['habitacion_title'];?>
                    <br>
                    <?php echo $habitacion['habitacion_price'];?>
                </p>
                <?php
                        $counter1st++;
                    }
                }
                echo '</li>';
                echo '</a>';
                ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                $arrayHabitaciones = CFS()->get('habitaciones_array');
                $arrayEnd = end($arrayHabitaciones);
                $counter1st = 0;
                foreach($arrayHabitaciones as $habitacion)
                {
                    if($counter1st < 3)
                    {
                ?>
                <?php
                        if($counter1st == 0)
                        {
                            echo '<div role="tabpanel" class="tab-pane fade in active" id="tabpanel-'.$counter1st.'">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div role="tabpanel" class="tab-pane fade" id="tabpanel-'.$counter1st.'">';
                        }
                ?>
                <div class="col-sm-7">
                    <?php
                        echo '<div id="carousel-'.$counter1st.'" class="carousel slide" data-ride="carousel" data-interval="false">';
                    ?>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $arrayHabImg = $habitacion['habitacion_img_array'];
                        $arrayEnd = end($arrayHabImg);
                        $counter2nd = 0;
                        foreach($arrayHabImg as $imagen)
                        {
                        ?>
                        <?php
                            if($counter2nd == 0)
                            {
                                echo '<div class="item active">';
                            }
                            else
                            {
                                echo '</div>';
                                echo '<div class="item">';
                            }
                        ?>
                        <div class="img-container">
                            <img class="img-bg" src="<?php echo $imagen['habitacion_img'];?>" alt="">
                        </div>
                        <?php
                            $counter2nd++;
                        }
                        echo '</div>';
                        ?>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        $arrayHabImg = $habitacion['habitacion_img_array'];
                        $arrayEnd = end($arrayHabImg);
                        $counter2nd = 0;
                        foreach($arrayHabImg as $imagen)
                        {
                        ?>
                        <?php
                            if($counter2nd == 0)
                            {
                                echo '<li data-target="#carousel-'.$counter1st.'" data-slide-to="'.$counter2nd.'" class="active"></li>';
                            }
                            else
                            {
                                echo '<li data-target="#carousel-'.$counter1st.'" data-slide-to="'.$counter2nd.'"></li>';
                            }
                        ?>
                        <?php
                            $counter2nd++;
                        }
                        ?>
                    </ol>
                    <?php
                        echo '</div>';
                    ?>
                </div>
                <div class="col-sm-5 vertical-align">
                    <h2>
                        <?php echo $habitacion['habitacion_title'];?>
                    </h2>
                    <p>
                        <?php echo $habitacion['habitacion_text'];?>
                    </p>
                    <div class="bottom-1">
                        <?php
                        $arrayServicios = $habitacion['habitacion_servicios_array'];
                        $arrayEnd = end($arrayServicios);
                        $counter3rd = 0;
                        foreach($arrayServicios as $servicio)
                        {
                        ?>
                        <img src="<?php echo $servicio['habitacion_servicio_logo'];?>" alt="">
                        <?php
                            $counter3rd++;
                        }
                        ?>
                    </div>
                    <div class="bottom-2">
                        <p>
                            <?php echo $habitacion['habitacion_price'];?>
                        </p>
                    </div>
                </div>
                <?php
                        $counter1st++;
                    }
                }
                echo '</div>';
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RESERVACIONES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="reservaciones" id="reservaciones">
        <div class="container spacing">
            <h1>
                <?php echo CFS()-> get('informes_title');?>
            </h1>
            <p>
                <?php echo CFS()-> get('informes_text');?>
            </p>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario Reservaciones"]'); ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* TESTIMONIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="testimonios parallax-container" id="testimonios">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/comentarios/bg.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <p class="vertical-align">
                <?php echo CFS()-> get('parallax_text');?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BLOG */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="blog" id="blog">
        <div class="container spacing">
            <h1>
                BLOG
            </h1>
            <div class="top">
                <?php
                $counter = 0;
                if (have_posts())
                {
                    the_post();
                }
                ?>									  
                <?php
                query_posts('showposts=4');
                if (have_posts())
                {
                    while (have_posts())
                    { 
                        the_post();
                        if($counter == 0)
                        {
                ?>
                <a href="<?php echo the_permalink();?>">
                    <div class="col-sm-6 principal">
                        <div class="img-container">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <h3>
                            <?php
                            if (strlen($post->post_title) > 30)
                            { 
                                echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . ' [...]'; 
                            }
                            else
                            {
                                the_title();
                            }
                            ?>
                        </h3>
                        <p class="fecha">
                            <?php echo get_the_date('M-d-Y'); ?>
                        </p>
                        <p class="texto">
                            <?php
                            if ( strlen(get_the_content()) > 80)
                            {
                                echo substr(get_the_content(), 0,80).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                            ?>
                        </p>
                    </div>
                </a>
                <?php
                        }
                        else
                        {
                            if($counter == 1)
                            {
                                echo '<div class="col-sm-6 relacionadas">';
                            }
                ?>
                <a href="<?php echo the_permalink();?>">
                    <div class="relacionada">
                        <div class="col-xs-6">
                            <div class="img-container">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h3>
                                <?php
                            if (strlen($post->post_title) > 30)
                            { 
                                echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . ' [...]'; 
                            }
                            else
                            {
                                the_title();
                            }
                                ?>
                            </h3>
                            <p class="fecha">
                                <?php echo get_the_date('M-d-Y'); ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php
                        }
                ?>
                <?php
                        $counter++;
                    }
                }
                if($counter > 0)
                {
                    echo '</div>';
                }
                wp_reset_query();
                ?>
            </div>
            <div class="bottom">
                <a href="blog">
                    Más Notas
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LOCALIZACION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="localizacion parallax-container" id="localizacion">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/localizacion/bg.jpg" alt="Parallax">
        </div>
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('localizacion_title');?>
            </h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DATOS UBICACION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="datos-ubicacion container" id="datos-ubicacion">
        <div class="datos">
            <p class="direccion">
                <?php echo CFS()-> get('direccion');?>
            </p>
            <p class="telefono">
                <?php echo CFS()-> get('telefonos');?>
                <br>
                <a href="mailto:<?php echo CFS()-> get('email');?>">
                    <?php echo CFS()-> get('email');?>
                </a>
            </p>
            <div class="forma"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="googleMap" id="googleMap_paraiso" data-position="paraiso" data-lat="28.286915" data-long="-105.482074" data-title="Hotel Paraiso Dorado"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('contacto.php'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>
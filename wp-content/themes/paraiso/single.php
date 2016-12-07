<?php $page = 'detalle-noticia'; ?>
<?php include('header.php'); ?>
<div class="wrapper detalle-noticia" id="detalle-noticia">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticia" id="noticia">
        <div class="container light-spacing">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
            <div class="col-xs-6 left-side">
                <div class="img-container">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
            <div class="col-xs-6 right-side">
                <div class="content vertical-align">
                    <p class="date">
                        <?php echo get_the_date('d-m-Y'); ?>
                    </p>
                    <p class="text">
                        <?php
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();
                        ?>

                        <?php echo get_the_content(); ?>

                        <?php
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
            <?php
            $counter = 0;
            query_posts('cat='.$categoryID.'&orderby=rand');
            while (have_posts()) : the_post();
            if($the_post_name != get_the_title() && $counter != 2) {
            ?>
            <?php
                if($counter == 0)
                {
                    echo '<div class="col-xs-6 relacionada primero">';
                }
                else {
                    echo '<div class="col-xs-6 relacionada">';
                }
            ?>
            <a href="<?php echo get_the_permalink(); ?>">
                <div class="col-xs-5 hidden-xs">
                    <div class="img-container">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
                <div class="col-xs-7">
                    <h3>
                        <?php
                if (strlen($post->post_title) > 20)
                { 
                    echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . ' [...]'; 
                }
                else
                {
                    the_title();
                }
                        ?>
                    </h3>
                    <p class="date">
                        <?php echo get_the_date('d-m-Y'); ?>
                    </p>
                    <p class="text">
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
                echo '</div>';
            ?>
            <?php
                $counter++;
            }
            endwhile;
            ?>
            <div class="col-xs-12 bottom">
                <nav id="post-entries">
                    <div class="row no-margin">
                        <div class="nav-prev fl col-xs-6"><?php previous_post_link( '%link', '<p class="left-side">ANTERIOR</p>' ); ?></div>
                        <div class="nav-next fr col-xs-6 text-right"><?php next_post_link( '%link', '<p class="right-side">SIGUIENTE</p>' ); ?></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('contacto.php'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>
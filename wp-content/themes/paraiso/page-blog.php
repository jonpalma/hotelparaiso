<?php $page = 'blog'; ?>
<?php include('header.php'); ?>
<div class="wrapper blog" id="blog">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticias" id="noticias">
        <div class="container light-spacing">
            <h1>
                BLOG
            </h1>
            <?php
            // set up or arguments for our custom query
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged
            );
            // create a new instance of WP_Query
            $the_query = new WP_Query( $query_args );
            ?>

            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); // run the loop 
            if($counter == 0 || $counter%3 == 0)
            {
                echo '<div class="row">';
            }
            ?>
            <a href="<?php echo the_permalink();?>">
                <div class="col-sm-4">
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
            $counter++;
            if($counter%3 == 0 || $counter == $the_query->post_count)
            {
                echo '</div>';
            }
            endwhile; 
            ?>

            <?php if ($the_query->max_num_pages > 1){ // check if the max number of pages is greater than 1  ?>
            <nav class="prev-next-posts" id="post-entries">
                <div class="row no-margin">
                    <div class="prev-posts-link col-sm-6 text-left">
                        <?php echo get_next_posts_link( '<p class="left-side">NOTICIAS PASADAS</p>', $the_query->max_num_pages ); // display older posts link ?>
                    </div>
                    <div class="next-posts-link col-sm-6 text-right">
                        <?php echo get_previous_posts_link( '<p class="right-side">NOTICIAS RECIENTES</p>' ); // display newer posts link ?>
                    </div>
                </div>
            </nav>
            <?php } ?>

            <?php else: ?>
            <article>
                <h1>Sorry...</h1>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </article>
            <?php endif;?>
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
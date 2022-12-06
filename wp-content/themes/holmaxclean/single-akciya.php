<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li><a href="/rubrika/akciya/" title="Акции">Акции</a></li>
                <li class="current"><a href="#" title=""><?php the_title();?></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="articles">
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_9">



                <h1><?php the_title();?></h1>

                <?php the_content();?>

            <?php endwhile; // Конец цикла ?>

            <!-- additional features : begin -->
            <div class="additional-features clearfix">
                <a href="/stati/" title="">Назад к списку</a>
                <div class="share">Поделиться:
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-547304877887d8c5" async="async">
                    </script>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                </div>
            </div>
            <!-- additional features : end -->

        </div>
        <!-- left column : end -->

        <!-- right column : begin -->
        <div class="grid_3">
            <?php get_sidebar('left') /* sidebar-left.php */ ?>
        </div>
        <!-- right column : end -->

    </div>
</div>
<!-- CONTENT : end -->



<?php get_footer(); ?>
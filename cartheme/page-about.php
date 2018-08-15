<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <main class="page-main" role="main">
                <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'about' );
                    endwhile;
                ?>
            </main>
            <div class="wrap-btn">
                <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                    Записаться
                </button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
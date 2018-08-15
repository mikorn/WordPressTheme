<article id="post-<?php the_ID(); ?>" class="page-article">
    <h1 class="section-title"><?php the_title(); ?></h1>
    <div class="page-content">
        <div class="wrap-slider">
            <?= do_shortcode("[metaslider id=28]"); ?>
        </div>
        <div class="page-desc">
            <?php the_content(); ?>
        </div>
    </div>
</article>
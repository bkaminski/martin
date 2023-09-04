<?php get_header(); ?>
<section class="int-page-header pb-5" style="padding-top: 15rem;">
    <?php the_title('<h1 class="text-center text-white">', '</h1>'); ?>

</section>
<div class="container pt-5">
    <?php if (is_page('reviews')) {
        echo get_template_part('parts/page', 'reviews');
    } else {
        echo get_template_part('parts/page', 'body');
    }; ?>
</div>
<div class="tag-container">
    <div class="container">
        <div class="col pb-3 pt-3">
            <?php the_tags('<span class="badge bg-dark"><i class="fa-solid fa-tags"></i>&nbsp;Related Topics:</span>&nbsp;&nbsp;'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<section class="int-page-header pb-5" style="padding-top: 15rem;">
    <?php the_title('<h1 class="text-center text-white">', '</h1>'); ?>

</section>
<div class="pt-5">
    <?php if (is_page('reviews')) {
        echo get_template_part('parts/page', 'reviews');
    } elseif (is_page('login')) {
        echo get_template_part('parts/page', 'login');
    } elseif (is_page('about-us')) {
        echo get_template_part('parts/page', 'body');
        echo get_template_part('parts/home', 'promo');
    } elseif (is_page('services')) {
        echo get_template_part('parts/page', 'services');
        echo get_template_part('parts/home', 'promo');
    }elseif (is_page('contact')) {
        echo get_template_part('parts/page', 'contact');
    } elseif (is_page('free-estimate')) {
        echo get_template_part('parts/page', 'free-estimate');
    } elseif (is_page('process')) {
        echo get_template_part('parts/page', 'process');
        echo get_template_part('parts/home', 'promo');
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

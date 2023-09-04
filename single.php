<?php get_header(); ?>
<section class="int-page-header pb-5" style="padding-top: 15rem;">
    <?php the_title('<h1 class="text-center text-white">', '</h1>'); ?>

</section>
<div class="container pt-5">
    <?php if (is_page('reviews')) {
        echo get_template_part('parts/page', 'reviews');
    } else {
        echo get_template_part('parts/page', 'page-body');
    }; ?>
</div>
<?php get_footer(); ?>

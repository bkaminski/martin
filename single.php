<?php get_header(); ?>
<section class="int-page-header pb-5" style="padding-top: 15rem;">
    <?php the_title('<h1 class="text-center text-white">', '</h1>'); ?>

</section>
<main>
    <div class="container pt-5 pb-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="pb-3">
                    <?php echo get_the_post_thumbnail($post_id, 'full'); ?>
                </div>

                <?php the_content(); ?>

                <a class="btn btn-lg btn-warning text-uppercase" href="<?php echo get_home_url(); ?>/contact">Contact Us Today</a>

            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts or pages matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</main>
<div class="tag-container">
    <div class="container">
        <div class="col pb-3 pt-3">
            <?php the_tags('<span class="badge bg-dark"><i class="fa-solid fa-tags"></i>&nbsp;Related Topics:</span>&nbsp;&nbsp;'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
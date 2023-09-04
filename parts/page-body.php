<main class="int-page-body">
    <div class="container pt-5 pb-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts or pages matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</main>

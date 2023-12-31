<?php get_header(); ?>
<section class="int-page-header pb-5" style="padding-top: 15rem;">
	<h1 class="text-center text-white">News</h1>
</section>
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row mt-5">
				<div class="col-md-3 mb-4">
					<figure>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('medium', array('class' => 'img-thumbnail shadow')); ?>

						</a>
					</figure>
				</div>
				<div class="col-md-9 mb-4">
					<article>
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>

							</a>
						</h2>
						<small><em>Posted on: <?php echo get_the_date(); ?></em></small>
						<?php the_excerpt(); ?>
					</article>
				</div>
			</div>
			<hr>
		<?php endwhile;
	else : ?>
		<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	<div class="col text-center">
		<?php echo bkc_pagination(); ?>
	</div>
</div>
<?php get_footer(); ?>


<?php get_header(); ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-9">

			<h4 class="mt-0 text-body border-bottom pb-3 mb-3">
			<span class="text-muted">Kategori</span> <?php single_cat_title(); ?>
			</h4>
				<?php get_template_part('loop-blog'); ?>

				<?php get_template_part('pagination'); ?>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>

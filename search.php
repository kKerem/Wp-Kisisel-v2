<?php get_header(); ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-9">
			
				<h4 class="mt-0 text-body border-bottom pb-3 mb-3">
				<?php echo ($wp_query->found_posts == 0 ? "Sonuç bulunamadı." : get_search_query() . sprintf( __( ' <span class="text-muted">için <span class="text-body	">%s</span> sonuç bulundu.</span>', 'html5blank' ), $wp_query->found_posts )); ?>
				</h6>
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>


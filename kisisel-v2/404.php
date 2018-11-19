<?php get_header(); ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-9">
			
			<div class="card shadow mb-3">
				<h6 class="card-header text-body">
				<?php _e( 'Sayfa bulunamadı', 'html5blank' ); ?>
				</h6>
				<div class="card-body small">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-arrow-left mr-2"></i><?php _e( 'Geri Dön', 'html5blank' ); ?></a>
				</div>
			</div>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>


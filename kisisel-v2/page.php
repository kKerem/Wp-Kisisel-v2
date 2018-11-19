<?php get_header(); wpb_set_post_views(get_the_ID()); ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-9">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="card shadow mb-3">
				<h6 class="card-header text-body">
					<i class="fas fa-file-alt mr-3 text-black-50"></i><?php the_title(); ?>
				</h6>
				<div class="card-body small">

					<div class="row mb-2">
						<div class="col-md-6 small text-secondary">
							<?php the_time('F j, Y'); ?> <?php the_time('H:i'); ?> tarihinde yayınlandı.
						</div>
						<div class="col-md-6 small text-secondary text-md-right">
							<?php echo wpb_get_post_views(get_the_ID()); ?>  İzlenim  ·  <?php comments_number( '0', '1', '%' ); ?> Mesaj
						</div>
					</div>

					<?php the_content(); ?>

				</div>
			</div>

			<div class="row">
				<div class="col-12 my-4">
					<?php edit_post_link('<i class="fas fa-pen-alt d-inline-block mr-2"></i> Düzenle', '', '', $post->ID, 'btn-sm p-2 btn-secondary mr-2 shadow'); // Always handy to have Edit Post Links available ?>

					<div class="text-md-right float-right">
						<?php if(empty(get_post_meta($post->ID, "onizleme", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "onizleme", true); ?>" class="btn-sm p-2 btn-secondary mr-2 shadow" role="button" target="_blank"><i class="fas fa-globe-americas d-inline-block mr-2"></i>Görüntüle</a>
						<?php endif; ?>
						<?php if(!empty(get_post_meta($post->ID, "indir", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "indir", true); ?>" class="btn-sm p-2 btn-primary shadow"><i class="fas fa-download d-inline-block mr-2"></i>Dosyayı İndir</a>
						<?php endif; ?>
						<?php if(!empty(get_post_meta($post->ID, "kaynak", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "kaynak", true); ?>" class="btn-sm p-2 btn-primary shadow" target="_blank"><i class="fas fa-download d-inline-block mr-2"></i>Kaynak</a>
						<?php endif; ?>
					</div>

				</div>
			</div>

<?php endwhile; ?>

<?php else: ?>

	<div class="card shadow">
		<div class="card-body small">
			<?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
		</div>
	</div>

<?php endif; ?>

<?php comments_template(); ?>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>






<?php get_footer(); ?>

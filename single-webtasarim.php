<?php get_header(); wpb_set_post_views(get_the_ID()); ?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-9">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid mx-auto d-block rounded shadow mb-4 w-100')); ?>
            <div class="card-deck">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text small"><?php the_content(); ?></p>
                        <p class="card-text"><small class="text-muted">Son güncelleme <?php the_modified_time('F j, Y');  ?></small></p>
                    </div>
                </div>
            </div>

            <div class="row">
				<div class="col-12 my-4">
					<?php edit_post_link('<i class="fas fa-pen-alt d-inline-block mr-2"></i> Düzenle', '', '', $post->ID, 'btn-sm p-2 btn-secondary mr-2 shadow'); // Always handy to have Edit Post Links available ?>

					<div class="text-md-right float-right">
						<?php if(!empty(get_post_meta($post->ID, "onizleme", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "onizleme", true); ?>" class="btn-sm p-2 btn-secondary mx-1 shadow" role="button" target="_blank"><i class="fas fa-globe-americas d-inline-block mr-2"></i>Görüntüle</a>
						<?php endif; ?>
						<?php if(!empty(get_post_meta($post->ID, "indir", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "indir", true); ?>" class="btn-sm p-2 btn-primary mx-1 shadow"><i class="fas fa-download d-inline-block mr-2"></i>Dosyayı İndir</a>
						<?php endif; ?>
						<?php if(!empty(get_post_meta($post->ID, "kaynak", true))): ?>
							<a href="<?php echo get_post_meta($post->ID, "kaynak", true); ?>" class="btn-sm p-2 btn-primary mx-1 shadow" target="_blank"><i class="fas fa-download d-inline-block mr-2"></i>Kaynak</a>
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


<?php
wcr_related_posts(array(
   'taxonomy' => 'post_tag',
   'limit' => 3
));
?>

    </div>

<?php get_sidebar(); ?>

</div>
</div>






<?php get_footer(); ?>

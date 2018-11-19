    <div class="card-deck mt-3 mb-4">
        <?php $s = 0; if (have_posts()): while (have_posts()) : the_post(); $s++; ?>
            <div class="card shadow-sm">
				<a href="<?php the_permalink() ?>" class="linkdegil">
					<?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
					<a href="<?php the_permalink() ?>" class="linkdegil">
						<div class="card-body">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<p class="card-text small"><?php echo mb_strimwidth( get_the_excerpt(), 0,100, '...' ); ?></p>
							<p class="card-text"><small class="text-muted">Son güncelleme <?php the_modified_time('F j, Y');  ?></small></p>
						</div>
					</a>
				</a>
            </div>
            <?php echo ($s == 3 ? '</div><div class="card-deck my-4">' : ''); ?>
        <?php endwhile; ?>
        <?php else: ?>
<div class="card shadow mb-3">
    <div class="card-body d-flex flex-column align-items-start font-weight-normal">
        <p><?php _e( 'Gösterilecek birşey yok.', 'html5blank' ); ?></p>
    </div>
</div>

<?php endif; ?>

    </div>

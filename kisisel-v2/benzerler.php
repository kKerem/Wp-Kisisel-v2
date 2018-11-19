<?php if (!empty($related_posts)) { ?>
        <div class="card-deck my-4">
            <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
            ?>
            <div class="card shadow-sm">
      				<a href="<?php the_permalink() ?>" class="linkdegil">
      					<?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
      					<a href="<?php the_permalink() ?>" class="linkdegil">
      						<div class="card-body">
      							<h6 class="card-title"><?php the_title(); ?></h6>
      							<p class="card-text small"><?php echo mb_strimwidth( get_the_excerpt(), 0,100, '...' ); ?></p>
      							<p class="card-text"><small class="text-muted">Son güncelleme <?php the_modified_time('F j, Y');  ?></small></p>
      						</div>
      					</a>
      				</a>
      			</div>
            <?php } ?>
            		</div>

<?php
}

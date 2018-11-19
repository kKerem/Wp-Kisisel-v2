
<?php if (have_posts()): while (have_posts()) : the_post(); ?>


<div <?php post_class('card my-4 rounded shadow-sm h-md-250'); ?> id="post-<?php the_ID(); ?>">
  <?php if(has_post_thumbnail()) the_post_thumbnail(array('class'=>'card-img-top img-fluid w-100 d-block rounded-top shadow-sm')); ?>

<div class="card-body d-flex flex-column align-items-start font-weight-normal">
    <strong class="d-block w-100 mb-2 text-black-50 small"><?php kategori_coklu();?>
    <span class="float-sm-right small"><?php echo wpb_get_post_views(get_the_ID()); ?>  İzlenim  ·  <?php comments_number( '0', '1', '%' ); ?> Mesaj</span>
</strong>



    <h5 class="mb-0">
    <?php edit_post_link(__('<i class="fas fa-pen-alt d-inline-block mr-2 small"></i>'), '', '', '', ''); ?><a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h5>
    <div class="mb-1 text-muted font-weight-normal"><?php the_time('d M') ?></div>
    <p class="card-text mb-auto small"><?php echo mb_strimwidth( get_the_excerpt(), 0,400, '...' ); ?></p>
    <span class="card-text mb-auto small">

        <a href="<?php the_permalink() ?>" class="d-block pt-2">Daha Fazla</a>
    </span>
</div>
</div>


<?php endwhile; ?>

<?php else: ?>

<div class="card shadow mb-3">
<div class="card-body d-flex flex-column align-items-start font-weight-normal">
<p><?php _e( 'Gösterilecek birşey yok.', 'html5blank' ); ?></p>
</div>
</div>

<?php endif; ?>

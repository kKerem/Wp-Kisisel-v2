<?php get_header(); ?>


<div class="container">
    <div class="row my-4">
<?php
query_posts( array(
	'category_name' => 'proje',
   'posts_per_page' => 3,
   'orderby'   => 'rand',
));

if( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="col-md-4 margin_alt mb-2">
		<div class="card flex-md-row rounded shadow-sm h-md-250">
		<div class="card-body d-flex flex-column align-items-start">
			
			<h6 class="mb-2">
			<a class="text-dark" href="<?php the_permalink() ?>">
				<?php echo kat_ikon()[1]; ?>
				
			<?php echo $icon . mb_strimwidth( get_the_title() , 0, 26, '...' ); ?></a>
			</h6>
			<ul class="m-0 p-0">
				<li class="d-inline-block small"><i class="fas fa-eye text-muted"></i><span class="text-secondary d-inline-block ml-2"><?php echo wpb_get_post_views(get_the_ID()); ?> izlenim</span></li>
				<li class="d-inline-block small text-secondary ml-2 mr-2"><i class="fas fa-calendar-alt"></i><span class="text-secondary d-inline-block ml-2"></span><?php the_modified_time('d M');  ?><span></li>
				<li class="d-inline-block small"><?php echo '<a href="' . get_category_link($c[0]->term_id) . '" class="d-inline-block mb-2 text-' . kat_ikon()[2] .'">' . kat_ikon()[0] . '</a>'; ?></li>
			</ul>
		</div>
		<?php // ( has_post_thumbnail() ? the_post_thumbnail('small', array('class'=>'card-img-right flex-auto d-none d-lg-block rounded-right')) : '' ) ?>
		</div>
	</div>
<?php endwhile;
else : ?>
<div class="col-md-12 mb-4">
	<div class="card shadow-sm flex-md-row">
		<p><?php __('No News'); ?></p>
	</div>
</div>
<?php endif; ?>
	</div>
</div>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect('localhost','tf2turkiye','1Q2w3a4s++kerem');
$db = mysqli_select_db($conn, 'tf2turkiye_cron');
$q = mysqli_query($conn,'SELECT * FROM sunucular');
$t = 0;
while ($w=mysqli_fetch_array($q)) {
  $t += $w['players'];
}
$toplam_sunucu = mysqli_num_rows($q);
$q = mysqli_query($conn,'SELECT * FROM istatistik');
while ($w=mysqli_fetch_array($q)) {
  $oyuncu = $w['kayitli_oyuncu'];
  $kayitli_yetkili = $w['kayitli_yetkili'];
}
?>


	<div class="container">
        <div class="jumbotron mt-0 mb-4 p-4 ounded">
            <div class="row text-center">
                <div class="col-sm">
                    <span class="font-weight-bold d-block"><?php echo $toplam_sunucu; ?></span>
                    <span class="small text-muted">Açık Sunucu</span>
                </div>
                <div class="col-sm">
                    <span class="font-weight-bold d-block mt-1"><?php echo $kayitli_yetkili ?></span>
                    <span class="small text-muted">Aktif Yetkili</span>
                </div>
                <div class="col-sm h5 m-0">
                    <span class="font-weight-bold d-block mt-1 text-primary"><?php echo $t; ?></span>
                    <span class="small text-muted">Aktif Oyuncu</span>
                </div>
                <div class="col-sm">
                    <span class="font-weight-bold d-block mt-1">
                      <?php if ($oyuncu > 999) {
                        echo number_format($oyuncu, 0, 0, '.' ) , '<span class="font-weight-normal small text-muted">bin</span>';
                      }
                      else {
                          echo $oyuncu;
                      }
                      ?></span></span>
                    <span class="small text-muted">Toplam Oyuncu</span>
                </div>
                <div class="col-sm">
                    <span class="font-weight-bold d-block mt-1">9<span class="font-weight-normal small text-muted">bin</span></span>
                    <span class="small text-muted">Ort. Oyuncu / Ay</span>
                </div>
            </div>
        </div>
	</div>

	<div class="container">
        <div class="card-deck my-4">
<?php
query_posts( array(
    'post_type' => 'post',
    'orderby'   => 'rand',
	'posts_per_page' => 3,
	'category_name'		=> 'webtasarim'
    ));

if( have_posts() ): while ( have_posts() ) : the_post(); ?>
			<div class="card shadow-sm">
				<a href="<?php the_permalink() ?>" class="linkdegil">
					<?php the_post_thumbnail('large', ['class' => 'card-img-top maksimumgorsel']); ?>
					<a href="<?php the_permalink() ?>" class="linkdegil">
						<div class="card-body">
							<h5 class="card-title"><?php echo kat_ikon()[1]; ?><?php the_title(); ?></h5>
							<p class="card-text small"><?php echo mb_strimwidth( get_the_excerpt(), 0,100, '...' ); ?></p>
							<p class="card-text"><small class="text-muted">Son güncelleme <?php the_modified_time('F j, Y');  ?></small></p>
						</div>
					</a>
				</a>
			</div>
<?php endwhile;
else : ?>
<div class="col-md-12 mb-4">
	<div class="card shadow-sm flex-md-row">
		<p><?php __('No News'); ?></p>
	</div>
</div>
<?php endif; ?>

		</div>
	</div>

    <div class="container masonry">
        <div class="row my-4">

<?php
query_posts( array(
    'post_type' => 'post',
    'orderby'   => 'rand',
	'posts_per_page' => 3,
	'category_name'		=> 'blog'
    ));

if( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="col-md-4 mb-4">
		<div class="card shadow-sm flex-md-row">
			<a href="<?php the_permalink() ?>" class="linkdegil">
				<div class="card-body pb-0">
					<h6 class="card-title"><?php echo kat_ikon()[1]; ?><?php echo mb_strimwidth( get_the_title(), 0, 35, '...' ); ?></h6>
					<p class="card-text small"><?php echo mb_strimwidth( get_the_excerpt(), 0,75, '...' ); ?></p>
					<ul class="list-unstyled">
						<li class="d-inline-block small mr-3"><i class="fas fa-eye text-muted"></i><span class="text-secondary d-inline-block ml-2"><?php echo wpb_get_post_views(get_the_ID()); ?> izlenim</span></li>
						<li class="d-inline-block small text-secondary"><i class="fas fa-calendar-alt"></i><span class="text-secondary d-inline-block ml-2"></span><?php the_modified_time('F j, Y');  ?><span></li>
					</ul>
				</div>
			</a>
		</div>
	</div>
<?php endwhile;
else : ?>
<div class="col-md-12 mb-4">
	<div class="card shadow-sm flex-md-row">
		<p><?php __('No News'); ?></p>
	</div>
</div>
<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>

<script type="text/javascript">
$('.masonry').masonry({
itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
percentPosition: true
});
</script>

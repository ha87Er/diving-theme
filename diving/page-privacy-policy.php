<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-other_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-other_sp.jpg" alt="海の中で泳ぐ魚たち">
  </picture>
  <h1 class="sub-mv__title">Privacy Policy</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<?php if (have_posts()) : // 記事があれば表示 ?>
<?php while(have_posts()) : // 記事数分ループ ?>
<?php the_post(); ?>
<section class="privacy-policy layout-privacy-policy">
  <div class="privacy-policy__inner lower-inner inner">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
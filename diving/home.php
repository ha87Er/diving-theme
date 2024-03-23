<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog_pc.jpg" media="(min-width: 768px)" type="image/png">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog_sp.jpg" alt="魚の群れ">
    </picture>
    <h1 class="sub-mv__title">Blog</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <div class="two-column layout-two-column">
    <div class="two-column__inner lower-inner inner">
      <div class="two-column__wrap">
        <div class="two-column__main">
            <div class="two-column__cards blog-items blog-items--lower-blog">
                <?php if (have_posts()) : // 記事があれば表示 ?>
                <?php while(have_posts()) : // 記事数分ループ ?>
                <?php the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="lower-blog__card blog-item">
                        <div class="blog-item__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img1.jpg" alt="赤色の珊瑚礁">
                        </div>
                        <div class="blog-item__body">
                            <time class="blog-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <h3 class="blog-item__text-title"><?php the_title(); ?></h3>
                            <p class="blog-item__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                            </p>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
          <!-- ページネーション -->
          <div class="layout-pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
        <!-- サイドバー -->
        <?php get_template_part('./parts/sidebar') ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
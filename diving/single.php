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
        <div class="two-column__main article">
            <?php if (have_posts()) : // 記事があれば表示 ?>
            <?php while(have_posts()) : // 記事数分ループ ?>
            <?php the_post(); ?>
            <time class="article__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            <div class="article__title">
              <h1 class="article-main-title"><?php the_title(); ?></h1>
            </div>

            <div class="article__content">
              <?php if(get_the_post_thumbnail()): ?>
                <!-- アイキャッチ画像があればアイキャッチ画像を表示させる -->
                <figure>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
                </figure>
                <?php else: ?>
                <!-- アイキャッチ画像がなければNO IMAGEを表示させる -->
                <figure>
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.png'); ?>" alt="noimage">
                </figure>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <div class="article__link article-link">
              <div class="article-link__wrap">
                  <?php
                  $prev = get_previous_post(); //前の記事を取得
                  $prev_url = esc_url(get_permalink($prev->ID)); //取得した情報から前の記事に飛ぶリンクを取得する
                  $next = get_next_post(); //次の記事を取得
                  $next_url = esc_url(get_permalink($next->ID)); //取得した情報から次の記事に飛ぶリンクを取得する
                  ?>
                  <div class="article-link__prev">
                      <?php if ($prev): ?>
                          <a href="<?php echo $prev_url; ?>"></a>
                      <?php endif; ?>
                  </div>
                  <div class="article-link__next">
                      <?php if ($next): ?>
                          <a href="<?php echo $next_url; ?>"></a>
                      <?php endif; ?>
                  </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- サイドバー -->
        <?php get_template_part('./parts/sidebar') ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
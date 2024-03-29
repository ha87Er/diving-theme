  <?php get_header(); ?>

<!-- ローディング -->
  <div id="loading" class="loading">
    <div class="loading__title main-title">
      <div class="main-title__title main-title__title--green">DIVING</div>
      <p class="main-title__sub-title main-title__sub-title--green">into the ocean</p>
    </div>
    <div class="loading__cover">
      <picture class="loading__cover-left">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-left.jpg" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-left_sp.jpg" alt="左半分：海で泳ぐかめ">
      </picture>
      <picture class="loading__cover-right">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-right.jpg" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-right_sp.jpg" alt="右半分：海で泳ぐかめ">
      </picture>
    </div>
  </div>

 <section class="mv">
  <div class="mv__inner">
    <div class="mv__title main-title">
      <h1 class="main-title__title">DIVING</h1>
      <p class="main-title__sub-title">into the ocean</p>
    </div>
    <?php
      $top_slider = SCF::get_option_meta('top_slider');
      $top_slider_group = $top_slider['top_slider_group'];
      if (!empty($top_slider_group)) :
      ?>
    <div class="swiper mv__swiper js-mv-swiper">
      <div class="swiper-wrapper">

        <?php foreach ($top_slider_group as $item) :
        //画像
        $top_img_pc_id = $item['top_slider_img_pc'];
        $top_img_pc_src = wp_get_attachment_url($top_img_pc_id);
        $top_img_sp_id = $item['top_slider_img_sp'];
        $top_img_sp_src = wp_get_attachment_url($top_img_sp_id);

        //alt
        $alt_pc = get_post_meta($top_img_pc_id, '_wp_attachment_image_alt', true);

        //テキスト
        $top_slider_text = $item['top_slider_text'];

        //ボタンリンク
        $top_slider_link = $item['top_slider_link'];
      ?>
      <div class="swiper-slide">
          <div class="mv__image">
            <picture>
              <source srcset="<?php echo $top_img_pc_src;?>" media="(min-width: 768px)" type="image/png">
              <img src="<?php echo $top_img_sp_src;?>" alt="<?php echo $alt_pc;?>">
            </picture>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

    <?php endif; ?>
  </div>
 </section>

<section class="campaign layout-campaign">
  <div class="campaign__inner inner">
    <div class="campaign__title title">
      <div class="title__en">Campaign</div>
      <h2 class="title__ja">キャンペーン</h2>
    </div>
    <div class="campaign__arrow-wrap">
      <div class="swiper-button-prev campaign-prev js-campaign-prev"></div>
      <div class="swiper-button-next campaign-next js-campaign-next"></div>
    </div>
    <div class="swiper campaign__swiper js-campaign-swiper">
      <div class="swiper-wrapper campaign__cards">
      <?php
      $args = array(
          'post_type'      => 'campaign', // カスタム投稿タイプのスラッグを指定
          'posts_per_page' => 5, // 表示する投稿の数
          'orderby'        => 'date', // 日付で並び替える
          'order'          => 'DESC', // 降順で並び替える
      );

      $custom_query = new WP_Query( $args );

      while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <div class="swiper-slide campaign__card campaign-card">
          <?php if(get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
          <?php endif; ?>
          <div class="campaign-card__body">
            <div><p class="campaign-card__tag"><?php echo esc_html(get_the_terms(get_the_ID(), 'campaign_category')[0]->name); ?></p></div>
            <div class="campaign-card__title"><?php the_title(); ?></div>
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
              <p class="campaign-card__price-after"><?php the_field('campaign_2'); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile;
      wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="campaign__button">
      <a href="<?php echo esc_url(home_url('/campaign/')) ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
</section>

<section class="about layout-about">
  <div class="about__inner inner">
    <div class="about__title title">
      <div class="title__en">About us</div>
      <h2 class="title__ja">私たちについて</h2>
    </div>
    <div class="about__image-wrap">
      <div class="about__image1">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-shisa.jpg" alt="屋根の上に乗っていいるシーサー">
      </div>
      <div class="about__image2">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-fish.jpg" alt="海の中を泳ぐ黄色い熱帯魚">
      </div>
    </div>
    <div class="about__content">
      <h3 class="about__content-title">Dive into<br>the Ocean</h3>
      <div class="about__text-block">
        <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
        <div class="about__button">
          <a href="<?php echo esc_url(home_url('/about/')) ?>" class="button">
            <span>View more</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="information layout-information">
  <div class="information__inner inner">
    <div class="information__title title">
      <div class="title__en">Information</div>
      <h2 class="title__ja">ダイビング情報</h2>
    </div>
    <div class="information__wrap">
      <div class="information__image colorbox inview">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/imformation_img.jpg" alt="黄色い熱帯魚が海の中を泳ぐ姿">
      </div>
      <div class="information__text-block">
        <h3 class="information__text-title">ライセンス講習</h3>
        <p class="information__text">
          当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
          正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
        </p>
        <div class="information__button">
          <a href="<?php echo esc_url(home_url('/information/')) ?>" class="button">
            <span>View more</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog layout-blog">
  <div class="blog__inner inner">
    <div class="blog__title title">
      <div class="title__en title__en--white">Blog</div>
      <h2 class="title__ja title__ja--white">ブログ</h2>
    </div>
    <div class="blog__items blog-items">
      <?php
        $args = array(
            'post_type'      => 'post', // ポストタイプを指定
            'posts_per_page' => 3, // 表示する投稿の数
            'orderby'        => 'date', // 日付で並び替える
            'order'          => 'DESC', // 降順で並び替える
        );

        $custom_query = new WP_Query( $args );

        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="blog-items__item blog-item">
        <div class="blog-item__image">
            <?php if (has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
            <?php else: ?>
              <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.png'); ?>" alt="noimage">
            <?php endif; ?>
        </div>
        <div class="blog-item__body">
          <time class="blog-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
          <h3 class="blog-item__text-title"><?php the_title(); ?></h3>
          <p class="blog-item__text">
            <?php the_excerpt(); ?>
          </p>
        </div>
      </a>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
    <div class="blog__button">
      <a href="<?php echo esc_url(home_url('/blog/')) ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
</section>

<section class="voice layout-voice">
  <div class="voice__inner inner">
    <div class="voice__title title">
      <div class="title__en">Voice</div>
      <h2 class="title__ja">お客様の声</h2>
    </div>
    <div class="voice__items voice-items">

    <?php
      $args = array(
          'post_type'      => 'voice', // カスタム投稿タイプのスラッグを指定
          'posts_per_page' => 2, // 表示する投稿の数
          'orderby'        => 'date', // 日付で並び替える
          'order'          => 'DESC', // 降順で並び替える
      );

      $custom_query = new WP_Query( $args );

      while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <div class="voice-items__item voice-item">
        <div class="voice-item__head">
          <div class="voice-item__content">
            <div class="voice-item__meta">
              <p class="voice-item__age"><?php the_field('voice_1'); ?></p>
              <div class="voice-item__tag"><?php echo esc_html(get_the_terms(get_the_ID(), 'voice_category')[0]->name); ?></div>
            </div>
            <h3 class="voice-item__title"><?php the_title(); ?></h3>
          </div>
          <div class="voice-item__image colorbox inview">
          <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
                <?php endif; ?>
          </div>
        </div>
        <div class="voice-item__body">
          <p class="voice-item__text">
            <?php
              $text = mb_substr(get_field('voice_2'),0,80,'utf-8');
              echo $text.'...';
            ?>
         </p>
        </div>
      </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
    <div class="voice__button">
      <a href="<?php echo esc_url(home_url('/voice/')) ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
</section>

<section class="price layout-price">
  <div class="price__inner inner">
    <div class="price__title title">
      <div class="title__en">Price</div>
      <h2 class="title__ja">料金一覧</h2>
    </div>
    <div class="price__content">
      <div class="price__image-wrap colorbox inview">
      <picture class="price__image">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img_pc.jpg" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img_sp.jpg" alt="sp:海の中を泳ぐカメ pc:珊瑚礁に集まる赤い魚の群れ">
      </picture>
      </div>
      <div class="price__list price-list">
        <div class="price-list__item">
          <h3 class="price-list__title">ライセンス講習</h3>
          <dl class="price-list__description">
          <?php
              $license = SCF::get('license', 12);
              if (!empty($license)) {
                  foreach ($license as $fields) { ?>
                      <div class="price-list__wrap">
                          <dt class="price-list__menu"><?php echo $fields['menu']; ?></dt>
                          <dd class="price-list__price"><?php echo $fields['price']; ?></dd>
                      </div>
          <?php
                  }
              }
          ?>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">体験ダイビング</h3>
          <dl class="price-list__description">
          <?php
              $trial = SCF::get('trail-diving', 12);
              if (!empty($trial)) {
                  foreach ($trial as $fields) { ?>
                      <div class="price-list__wrap">
                          <dt class="price-list__menu"><?php echo $fields['menu2']; ?></dt>
                          <dd class="price-list__price"><?php echo $fields['price2']; ?></dd>
                      </div>
          <?php
                  }
              }
          ?>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">ファンダイビング</h3>
          <dl class="price-list__description">
          <?php
              $fan = SCF::get('fan-diving', 12);
              if (!empty($fan)) {
                  foreach ($fan as $fields) { ?>
                      <div class="price-list__wrap">
                          <dt class="price-list__menu"><?php echo $fields['menu3']; ?></dt>
                          <dd class="price-list__price"><?php echo $fields['price3']; ?></dd>
                      </div>
          <?php
                  }
              }
          ?>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">スペシャルダイビング</h3>
          <dl class="price-list__description">
          <?php
              $special = SCF::get('special', 12);
              if (!empty($special)) {
                  foreach ($special as $fields) { ?>
                      <div class="price-list__wrap">
                          <dt class="price-list__menu"><?php echo $fields['menu4']; ?></dt>
                          <dd class="price-list__price"><?php echo $fields['price4']; ?></dd>
                      </div>
          <?php
                  }
              }
          ?>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button">
      <a href="<?php echo esc_url(home_url('/price/')) ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
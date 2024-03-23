<aside class="two-column__side side">
  <!-- 人気記事 -->
  <div class="side__popular-article popular-article">
    <div class="popular-article__side-title">
      <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> 人気記事</h2>
    </div>

    <?php
    if ( function_exists('wpp_get_mostpopular') ) {
        wpp_get_mostpopular(array(
          'limit' => 3,   //人気記事を3件表示させる
          'range' => 'last24hours', //24時間以内でランキングを集計して表示させる
          'thumbnail_width' => 121, //画像サイズは横幅121px
          'thumbnail_height' => 90, //高さは90px
          'stats_views' => 0,  //記事のビュー数を表示しない
          'stats_date' => 1, //記事の投稿日時を表示するか
          'stats_date_format' => 'Y/m/d',  //2023/5/8のような形式で日付を表示
          'wpp_start' => '<div class="popular-article__cards">',
          'wpp_end' => '</div>',
          'post_html' => '<a href="{url}" class="popular-article__card article-card">
            <div class="article-card__image">{thumb_img}</div>
            <div class="article-card__body">
              <time class="article-card__date" datetime="{date}">{date}</time>
              <div class="article-card__title">{text_title}</div>
            </div>
          </a>',
        ));
    }
    ?>
  </div>

  <!-- 口コミ -->
  <div class="side__review review">
    <div class="review__side-title">
      <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> 口コミ</h2>
    </div>

    <?php
    $args = array(
        'post_type' => 'voice', // カスタム投稿タイプのスラッグを指定
        'posts_per_page' => 1, // 表示する投稿数を指定
        'orderby' => 'date', // 日付で並び替え
        'order' => 'DESC', // 降順で並び替え（最新の投稿を先頭に）
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            // カスタム投稿の内容を表示する部分を記述します
    ?>

    <div class="review__item review-item">
      <div class="review-item__image">
      <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
          <?php endif; ?>
      </div>
      <div class="review-item__body">
        <p class="review-item__age"><?php the_field('voice_1'); ?></p>
        <div class="review-item__title"><?php the_title(); ?></div>
      </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata(); // カスタムクエリのリセット
    endif;
    ?>
    <div class="review__button">
      <a href="<?php echo get_post_type_archive_link( 'voice' ); ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>

  <!-- キャンペーン -->
  <div class="side__campaign side-campaign">
    <div class="side-campaign__title">
      <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> キャンペーン</h2>
    </div>

    <div class="side-campaign__cards">
      <?php
      $args = array(
          'post_type' => 'campaign', // カスタム投稿タイプのスラッグを指定
          'posts_per_page' => 2, // 表示する投稿数を指定
          'orderby' => 'date', // 日付で並び替え
          'order' => 'DESC', // 降順で並び替え（最新の投稿を先頭に）
      );

      $custom_query = new WP_Query($args);

      if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post();
              // カスタム投稿の内容を表示する部分を記述します
      ?>
      <div class="side-campaign__card campaign-card">
        <div class="campaign-card__image campaign-card__image--side">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img1.jpg" alt="水槽に黄色と黒の縞模様の熱帯魚がたくさん泳いでいる">
        </div>
        <div class="campaign-card__body campaign-card__body--side">
          <div class="campaign-card__title campaign-card__title--center">ライセンス取得</div>
          <p class="campaign-card__text">全部コミコミ(お一人様)</p>
          <div class="campaign-card__price campaign-card__price--side">
            <p class="campaign-card__price-before campaign-card__price-before--side"><?php the_field('campaign_1'); ?></p>
            <p class="campaign-card__price-after campaign-card__price-after--side"><?php the_field('campaign_2'); ?></p>
          </div>
        </div>
      </div>

      <?php
    endwhile;
    wp_reset_postdata(); // カスタムクエリのリセット
    endif;
    ?>
    </div>
    <div class="side-campaign__button">
      <a href="<?php echo get_post_type_archive_link( 'campaign' ); ?>" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
  <!-- アーカイブ -->
  <div class="side__archive archive">
    <div class="archive__title">
        <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> アーカイブ</h2>
    </div>
    <div class="archive__date-wrap">
      <div class="archive__data">
          <?php
          $year_prev = null;
          $current_year = date('Y'); // 現在の年を取得

          $months = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS year,
              MONTH(post_date) AS month,
              COUNT(id) AS post_count FROM $wpdb->posts
              WHERE post_status = 'publish' AND YEAR(post_date) <= $current_year
              AND post_type = 'post'
              GROUP BY YEAR(post_date), MONTH(post_date)
              ORDER BY post_date DESC");

          foreach ($months as $month) :
              $year_current = $month->year;
              if ($year_current != $year_prev) {
                  if ($year_prev != null) {
                      echo '</ul>'; // Close archive__month-wrap
                  }
                  ?>
                  <div class="archive__year"><?php echo $month->year; ?></div>
                  <ul class="archive__month-wrap">
              <?php } ?>
              <li class="archive__month">
                  <a href="<?php echo get_month_link($month->year, $month->month); ?>">
                      <?php echo date("n", mktime(0, 0, 0, $month->month, 5, $month->year)) ?>月
                  </a>
              </li>
              <?php $year_prev = $year_current;
          endforeach; ?>
          </ul> <!-- Close archive__month-wrap -->
      </div>
    </div>
  </div>

</aside>

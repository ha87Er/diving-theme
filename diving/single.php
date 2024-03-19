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
  <?php get_template_part('./parts/breadcrumb') ?>

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

        <aside class="two-column__side side">
          <!-- 人気記事 -->
          <div class="side__popular-article popular-article">
            <div class="popular-article__side-title">
              <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> 人気記事</h2>
            </div>
            <div class="popular-article__cards">
              <a href="./single.html" class="popular-article__card article-card">
                <div class="article-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img4.jpg" alt="黄色い魚" width="121" height="90" loading="lazy">
                </div>
                <div class="article-card__body">
                  <time class="article-card__date" datetime="2023-11-17">2023.11/17</time>
                  <div class="article-card__title">ライセンス取得</div>
                </div>
              </a>
              <a href="./single.html" class="popular-article__card article-card">
                <div class="article-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img2.jpg" alt="ウミガメ" width="121" height="90" loading="lazy">
                </div>
                <div class="article-card__body">
                  <time class="article-card__date" datetime="2023-11-17">2023.11/17</time>
                  <div class="article-card__title">ウミガメと泳ぐ</div>
                </div>
              </a>
              <a href="./single.html" class="popular-article__card article-card">
                <div class="article-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img3.jpg" alt="カクレクマノミ" width="121" height="90" loading="lazy">
                </div>
                <div class="article-card__body">
                  <time class="article-card__date" datetime="2023-11-17">2023.11/17</time>
                  <div class="article-card__title">カクレクマノミ</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 口コミ -->
          <div class="side__review review">
            <div class="review__side-title">
              <h2 class="side-title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_bk.svg" alt="クジラのアイコン" width="50" height="50" loading="lazy"> 口コミ</h2>
            </div>
            <div class="review__item review-item">
              <div class="review-item__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/review.jpg" alt="腕を組む男女カップル" width="294" height="218" loading="lazy">
              </div>
              <div class="review-item__body">
                <p class="review-item__age">30代(カップル)</p>
                <div class="review-item__title">ここにタイトルが入ります。ここにタイトル</div>
              </div>
            </div>
            <div class="review__button">
              <a href="./archive-voice.html" class="button">
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
              <div class="side-campaign__card campaign-card">
                <div class="campaign-card__image campaign-card__image--side">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img1.jpg" alt="水槽に黄色と黒の縞模様の熱帯魚がたくさん泳いでいる">
                </div>
                <div class="campaign-card__body campaign-card__body--side">
                  <div class="campaign-card__title campaign-card__title--center">ライセンス取得</div>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--side">
                    <p class="campaign-card__price-before campaign-card__price-before--side">¥56,000</p>
                    <p class="campaign-card__price-after campaign-card__price-after--side">¥46,000</p>
                  </div>
                </div>
              </div>
              <div class="side-campaign__card campaign-card">
                <div class="campaign-card__image campaign-card__image--side">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img2.jpg" alt="山が見える透明度が高い綺麗な海に船が２隻浮かんでいる">
                </div>
                <div class="campaign-card__body campaign-card__body--side">
                  <div class="campaign-card__title campaign-card__title--center">貸切体験ダイビング</div>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--side">
                    <p class="campaign-card__price-before campaign-card__price-before--side">¥24,000</p>
                    <p class="campaign-card__price-after campaign-card__price-after--side">¥18,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="side-campaign__button">
              <a href="./archive-campaign.html" class="button">
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
                <div class="archive__year">2023</div>
                <ul class="archive__month-wrap">
                  <li class="archive__month"><a href="">3月</a></li>
                  <li class="archive__month"><a href="">2月</a></li>
                  <li class="archive__month"><a href="">1月</a></li>
                </ul>
              </div>
              <div class="archive__data">
                <div class="archive__year">2022</div>
                <ul class="archive__month-wrap">
                  <li class="archive__month"><a href="">3月</a></li>
                  <li class="archive__month"><a href="">2月</a></li>
                  <li class="archive__month"><a href="">1月</a></li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <section class="contact layout-contact layout-contact--lower">
    <div class="contact__inner inner">
      <div class="contact__block">
        <div class="contact__information">
          <div class="contact__information-title">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="CodeUps">
          </div>
          <div class="contact__row-wrap">
            <div class="contact__description">
              <p class="contact__address">沖縄県那覇市1-1</p>
              <p class="contact__tel"><a href="tel:0120-000-0000">TEL:0120-000-0000</a></p>
              <p class="contact__sales">営業時間:8:30-19:00</p>
              <p class="contact__holiday">定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.3799814610384!2d127.71739497508827!3d26.216840277068698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bfe6cf4db67%3A0xc0899fbab29e4f8b!2z6aaW6YeM5Z-O!5e0!3m2!1sja!2sjp!4v1705631042528!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__content">
          <div class="contact__content-wrap">
            <div class="contact__title">
              <div class="title__en title__en--large">Contact</div>
              <h2 class="title__ja title__ja--large">お問い合わせ</h2>
            </div>
            <p class="contact__text">ご予約・お問い合わせはコチラ</p>
            <div class="contact__button">
              <a href="./single.html" class="button">
                <span>Contact us</span>
              </a>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
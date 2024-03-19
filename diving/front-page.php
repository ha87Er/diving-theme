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
    <div class="swiper mv__swiper js-mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_pc1.jpg" media="(min-width: 768px)" type="image/png">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_sp1.jpg" alt="海で泳ぐ２人ダイバーがウミガメと遭遇">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_pc2.jpg" media="(min-width: 768px)" type="image/png">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_sp2.jpg" alt="山のが見える海外沿いで運行する船">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_pc3.jpg" media="(min-width: 768px)" type="image/png">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view_sp3.jpg" alt="透明度が高い美しい海">
            </picture>
          </div>
        </div>
      </div>
    </div>
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
        <div class="swiper-slide campaign__card campaign-card">
          <div class="campaign-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img1.jpg" alt="水槽に黄色と黒の縞模様の熱帯魚がたくさん泳いでいる">
          </div>
          <div class="campaign-card__body">
            <div><p class="campaign-card__tag">ライセンス講習</p></div>
            <div class="campaign-card__title">ライセンス取得</div>
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-before">¥56,000</p>
              <p class="campaign-card__price-after">¥46,000</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide campaign__card campaign-card">
          <div class="campaign-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img2.jpg" alt="山が見える透明度が高い綺麗な海に船が２隻浮かんでいる">
          </div>
          <div class="campaign-card__body">
            <div><p class="campaign-card__tag">体験ダイビング</p></div>
            <div class="campaign-card__title">貸切体験ダイビング</div>
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-before">¥24,000</p>
              <p class="campaign-card__price-after">¥18,000</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide campaign__card campaign-card">
          <div class="campaign-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img3.jpg" alt="たくさんのクラゲが照明の暗い水槽を泳いでいる">
          </div>
          <div class="campaign-card__body">
            <div><p class="campaign-card__tag">体験ダイビング</p></div>
            <div class="campaign-card__title">ナイトダイビング</div>
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-before">¥10,000</p>
              <p class="campaign-card__price-after">¥8,000</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide campaign__card campaign-card">
          <div class="campaign-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img4.jpg" alt="仲間たちとダイビングをする姿">
          </div>
          <div class="campaign-card__body">
            <div><p class="campaign-card__tag">ファンダイビング</p></div>
            <div class="campaign-card__title">貸切ファンダイビング</div>
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-before">¥20,000</p>
              <p class="campaign-card__price-after">¥16,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="campaign__button">
      <a href="./archive-campaign.html" class="button">
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
          <a href="./page-about.html" class="button">
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
          <a href="./page-information.html" class="button">
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
      <a href="./single.html" class="blog-items__item blog-item">
        <div class="blog-item__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img1.jpg" alt="赤色の珊瑚礁">
        </div>
        <div class="blog-item__body">
          <time class="blog-item__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-item__text-title">ライセンス取得</h3>
          <p class="blog-item__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </div>
      </a>
      <a href="./single.html" class="blog-items__item blog-item">
        <div class="blog-item__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img2.jpg" alt="海の中を泳ぐウミガメ">
        </div>
        <div class="blog-item__body">
          <time class="blog-item__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-item__text-title">ウミガメと泳ぐ</h3>
          <p class="blog-item__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </div>
      </a>
      <a href="./single.html" class="blog-items__item blog-item">
        <div class="blog-item__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img3.jpg" alt="珊瑚礁に隠れるカクレクマノミ">
        </div>
        <div class="blog-item__body">
          <time class="blog-item__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="blog-item__text-title">カクレクマノミ</h3>
          <p class="blog-item__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </div>
      </a>
    </div>
    <div class="blog__button">
      <a href="./home.html" class="button">
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
      <div class="voice-items__item voice-item">
        <div class="voice-item__head">
          <div class="voice-item__content">
            <div class="voice-item__meta">
              <p class="voice-item__age">20代(女性)</p>
              <div class="voice-item__tag">ライセンス講習</div>
            </div>
            <h3 class="voice-item__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-item__image colorbox inview">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_img1.jpg" alt="麦わら帽子を被った女性">
          </div>
        </div>
        <div class="voice-item__body">
          <p class="voice-item__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
      <div class="voice-items__item voice-item">
        <div class="voice-item__head">
          <div class="voice-item__content">
            <div class="voice-item__meta">
              <p class="voice-item__age">20代(女性)</p>
              <div class="voice-item__tag">ファンダイビング</div>
            </div>
            <h3 class="voice-item__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-item__image colorbox inview">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_img2.jpg" alt="麦わら帽子をグッドのポーズをする男性被った女性">
          </div>
        </div>
        <div class="voice-item__body">
          <p class="voice-item__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
    </div>
    <div class="voice__button">
      <a href="./archive-voice.html" class="button">
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
            <div class="price-list__wrap">
              <dt class="price-list__menu">オープンウォーターダイバーコース</dt>
              <dd class="price-list__price">¥50,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">アドバンスドオープンウォーターコース</dt>
              <dd class="price-list__price">¥60,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">レスキュー＋EFRコース</dt>
              <dd class="price-list__price">¥70,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">体験ダイビング</h3>
          <dl class="price-list__description">
            <div class="price-list__wrap">
              <dt class="price-list__menu">ビーチ体験ダイビング(半日)</dt>
              <dd class="price-list__price">¥7,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">ビーチ体験ダイビング(1日)</dt>
              <dd class="price-list__price">¥14,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">ボート体験ダイビング(半日)</dt>
              <dd class="price-list__price">¥10,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">ボート体験ダイビング(1日)</dt>
              <dd class="price-list__price">¥18,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">ファンダイビング</h3>
          <dl class="price-list__description">
            <div class="price-list__wrap">
              <dt class="price-list__menu">ビーチダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥14,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">ボートダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥18,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">スペシャルダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥24,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">ナイトダイビング(1ダイブ)</dt>
              <dd class="price-list__price">¥10,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-list__item">
          <h3 class="price-list__title">スペシャルダイビング</h3>
          <dl class="price-list__description">
            <div class="price-list__wrap">
              <dt class="price-list__menu">貸切ダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥24,000</dd>
            </div>
            <div class="price-list__wrap">
              <dt class="price-list__menu">1日ダイビング(3ダイブ)</dt>
              <dd class="price-list__price">¥32,000</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button">
      <a href="./page-price.html" class="button">
        <span>View more</span>
      </a>
    </div>
  </div>
</section>

<section class="contact layout-contact">
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
            <a href="./page-contact.html" class="button">
              <span>Contact us</span>
            </a>
          </div>
       </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
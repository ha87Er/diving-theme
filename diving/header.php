<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>(仮)DIVING</title>
  <meta name="description" content="(仮)DIVINGでは、初心者から上級者まで、幅広いレベルのダイバーに対応したプログラムをご用意しています。プロのインストラクターが丁寧にサポートし、安心してダイビングの世界を楽しんでいただけます。透明度抜群の海で、カラフルな海洋生物たちとの出会いをお楽しみください。" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="(仮)DIVING" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://hana-coco.net" />
  <meta property="og:image" content="https://hana-coco.net/assets/images/common/main-visual.jpg" />
  <meta property="og:site_name" content="(仮)DIVING" />
  <meta property="og:description" content="(仮)DIVINGでは、初心者から上級者まで、幅広いレベルのダイバーに対応したプログラムをご用意しています。プロのインストラクターが丁寧にサポートし、安心してダイビングの世界を楽しんでいただけます。透明度抜群の海で、カラフルな海洋生物たちとの出会いをお楽しみください。" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.ico" />
  <?php wp_head(); ?>
</head>
<body>

<header class="header layout-header js-header">
    <div class="header__inner">
    <?php
      $home = esc_url(home_url('/'));
      $campaign = esc_url(home_url('/campaign/'));
      $campaign1 = esc_url(home_url('/campaign_category/fan-diving'));
      $campaign2 = esc_url(home_url('/campaign_category/license/'));
      $campaign3 = esc_url(home_url('/campaign_category/trial-diving'));
      $about = esc_url(home_url('/about/'));
      $information = esc_url(home_url('/information/'));
      $blog = esc_url(home_url('/blog/'));
      $voice = esc_url(home_url('/voice/'));
      $price = esc_url(home_url('/price/'));
      $price1 = esc_url(home_url('/price#license'));
      $price2 = esc_url(home_url('/price#experience'));
      $price3 = esc_url(home_url('/price#fan'));
      $price4 = esc_url(home_url('/price#special'));
      $faq = esc_url(home_url('/faq/'));
      $contact = esc_url(home_url('/contact/'));
      $privacy = esc_url(home_url('/privacy-policy/'));
      $terms = esc_url(home_url('/terms-of-service/'));
      ?>

      <a class="header__logo-link" href="<?php echo $home; ?>">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps">
      </a>

      <nav class="header__nav">
       <ul class="header__nav-items">
          <li class="header__nav-item"><a href="<?php echo $campaign; ?>">Campaign<span>キャンペーン</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $about; ?>">About us<span>私たちについて</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $information; ?>">Information<span>ダイビング情報</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $blog; ?>">Blog<span>ブログ</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $voice; ?>">Voice<span>お客様の声</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $price; ?>">Price<span>料金一覧</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $faq; ?>">FAQ<span>よくある質問</span></a></li>
          <li class="header__nav-item"><a href="<?php echo $contact; ?>">Contact<span>おい問わ合せ</span></a></li>
        </ul>
      </nav>
      <button class="header__bars js-hamburger">
        <span class="header__bar"></span>
        <span class="header__bar"></span>
        <span class="header__bar"></span>
      </button>

      <div class="header__drawer  drawer js-drawer">
        <div class="drawer__inner inner">
          <nav class="drawer__nav nav">
            <div class="nav__left">
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                  <li class="nav__item"><a href="<?php echo $campaign2; ?>">ライセンス取得</a></li>
                  <li class="nav__item"><a href="<?php echo $campaign3; ?>">体験ダイビング</a></li>
                  <li class="nav__item"><a href="<?php echo $campaign1; ?>">ファンダイビング</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $about; ?>">私たちについて</a></li>
                </ul>
              </div>
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item  nav__item--bold"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                  <li class="nav__item"><a href="<?php echo $information; ?>?active-tab=tab1">ライセンス講習</a></li>
                  <li class="nav__item"><a href="<?php echo $information; ?>?active-tab=tab3">体験ダイビング</a></li>
                  <li class="nav__item"><a href="<?php echo $information; ?>?active-tab=tab2">ファンダイビング</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $blog; ?>">ブログ</a></li>
                </ul>
              </div>
            </div>
            <div class="nav__right">
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $voice; ?>">お客様の声</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $price; ?>">料金一覧</a></li>
                  <li class="nav__item"><a href="<?php echo $price1; ?>">ライセンス講習</a></li>
                  <li class="nav__item"><a href="<?php echo $price2; ?>">体験ダイビング</a></li>
                  <li class="nav__item"><a href="<?php echo $price3; ?>">ファンダイビング</a></li>
                  <li class="nav__item"><a href="<?php echo $price4; ?>">スペシャルダイビング</a></li>
                </ul>
              </div>
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $faq; ?>">よくある質問</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile">ポリシー</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $terms; ?>">利用規約</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
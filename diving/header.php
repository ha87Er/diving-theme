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
      <a class="header__logo-link" href="/">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps">
      </a>
      <nav class="header__nav">
       <ul class="header__nav-items">
          <li class="header__nav-item"><a href="./archive-campaign.html">Campaign<span>キャンペーン</span></a></li>
          <li class="header__nav-item"><a href="./page-about.html">About us<span>私たちについて</span></a></li>
          <li class="header__nav-item"><a href="./page-information.html">Information<span>ダイビング情報</span></a></li>
          <li class="header__nav-item"><a href="./home.html">Blog<span>ブログ</span></a></li>
          <li class="header__nav-item"><a href="./archive-voice.html?active-tab=ALL">Voice<span>お客様の声</span></a></li>
          <li class="header__nav-item"><a href="./page-price.html">Price<span>料金一覧</span></a></li>
          <li class="header__nav-item"><a href="./page-faq.html">FAQ<span>よくある質問</span></a></li>
          <li class="header__nav-item"><a href="./page-contact.html">Contact<span>おい問わ合せ</span></a></li>
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
                  <li class="nav__item nav__item--bold"><a href="./archive-campaign.html">キャンペーン</a></li>
                  <li class="nav__item"><a href="./archive-campaign.html">ライセンス取得</a></li>
                  <li class="nav__item"><a href="./archive-campaign.html">体験ダイビング</a></li>
                  <li class="nav__item"><a href="./archive-campaign.html">ファンダイビング</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-about.html">私たちについて</a></li>
                </ul>
              </div>
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item  nav__item--bold"><a href="./page-information.html">ダイビング情報</a></li>
                  <li class="nav__item"><a href="./page-information.html?active-tab=tab1">ライセンス講習</a></li>
                  <li class="nav__item"><a href="./page-information.html?active-tab=tab3">体験ダイビング</a></li>
                  <li class="nav__item"><a href="./page-information.html?active-tab=tab2">ファンダイビング</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./home.html">ブログ</a></li>
                </ul>
              </div>
            </div>
            <div class="nav__right">
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./archive-voice.html">お客様の声</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-price.html">料金一覧</a></li>
                  <li class="nav__item"><a href="./page-price.html#licence">ライセンス講習</a></li>
                  <li class="nav__item"><a href="./page-price.html#experience">体験ダイビング</a></li>
                  <li class="nav__item"><a href="./page-price.html#fan">ファンダイビング</a></li>
                  <li class="nav__item"><a href="./page-price.html#special">スペシャルダイビング</a></li>
                </ul>
              </div>
              <div class="nav__wrap">
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-faq.html">よくある質問</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-term.html">利用規約</a></li>
                </ul>
                <ul class="nav__items">
                  <li class="nav__item nav__item--bold"><a href="./page-contact.html">お問い合わせ</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
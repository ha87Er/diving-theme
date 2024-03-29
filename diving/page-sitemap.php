<?php get_header(); ?>

  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-other_pc.jpg" media="(min-width: 768px)" type="image/png">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-other_sp.jpg" alt="魚の群れ">
    </picture>
    <h1 class="sub-mv__title">Site MAP</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <?php
      $home = esc_url(home_url('/'));
      $campaign = esc_url(home_url('/campaign/'));
      $campaign1 = esc_url(home_url('/campaign_category/fan-diving'));
      $campaign2 = esc_url(home_url('/campaign_category/license'));
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
      $sitemap = esc_url(home_url('/sitemap/'));
      ?>

  <div class="sitemap layout-sitemap">
    <div class="sitemap__inner lower-inner inner">
      <nav class="sitemap__nav nav nav--sitemap">
        <div class="nav__left nav__left--sitemap">
          <div class="nav__wrap">
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $campaign2; ?>">ライセンス取得</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $campaign3; ?>">貸切体験ダイビング</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $campaign1; ?>">ナイトダイビング</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $about; ?>">私たちについて</a></li>
            </ul>
          </div>
          <div class="nav__wrap">
            <ul class="nav__items">
              <li class="nav__item  nav__item--black nav__item--bold"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $information; ?>?active-tab=tab1">ライセンス講習</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $information; ?>?active-tab=tab3">体験ダイビング</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $information; ?>?active-tab=tab2">ファンダイビング</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $blog; ?>">ブログ</a></li>
            </ul>
          </div>
        </div>
        <div class="nav__right nav__right--sitemap">
          <div class="nav__wrap">
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $voice; ?>">お客様の声</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $price; ?>">料金一覧</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $price1; ?>">ライセンス講習</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $price2; ?>">体験ダイビング</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $price3; ?>">ファンダイビング</a></li>
              <li class="nav__item nav__item--black"><a href="<?php echo $price4; ?>">スペシャルダイビング</a></li>
            </ul>
          </div>
          <div class="nav__wrap">
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $faq; ?>">よくある質問</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile">ポリシー</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $terms; ?>">利用規約</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item nav__item--black nav__item--bold"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

<?php get_footer(); ?>
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

<?php if(!is_page('contact') && !is_404()): ?>
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
            <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="button">
              <span>Contact us</span>
            </a>
          </div>
       </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer layout-footer<?php if(is_404()) echo ' layout-footer--mt0'; ?>">
  <div class="footer__inner inner">
    <div class="footer__content">
      <div class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="CodeUps">
      </div>
      <div class="footer__sns">
        <a href="https://www.facebook.com/nitori.jp/?locale=ja_JP" target="_blank" rel="noopener" class="footer__facebook">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.png" alt="facebookアイコン">
        </a>
        <a href="https://www.instagram.com/nitori_official/?hl=ja" class="footer__instagram" target="_blank" rel="noopener">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.png" alt="instagramアイコン">
        </a>
      </div>
    </div>
     <nav class="footer__nav nav">
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
          <?php if (is_page('page-price')) : ?>
            <li class="nav__item nav__item--bold"><a href="<?php echo $price; ?>">料金一覧</a></li>
            <li class="nav__item"><a href="#license">ライセンス講習</a></li>
            <li class="nav__item"><a href="#experience">体験ダイビング</a></li>
            <li class="nav__item"><a href="#fan">ファンダイビング</a></li>
            <li class="nav__item"><a href="#special">スペシャルダイビング</a></li>
            <?php else : ?>
              <li class="nav__item nav__item--bold"><a href="<?php echo $price; ?>">料金一覧</a></li>
              <li class="nav__item"><a href="<?php echo $price1; ?>">ライセンス講習</a></li>
              <li class="nav__item"><a href="<?php echo $price2; ?>">体験ダイビング</a></li>
              <li class="nav__item"><a href="<?php echo $price3; ?>">ファンダイビング</a></li>
              <li class="nav__item"><a href="<?php echo $price4; ?>">スペシャルダイビング</a></li>
            <?php endif; ?>
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
          <ul class="nav__items">
            <li class="nav__item nav__item--bold"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <p class="footer__copy">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
  </div>
</footer>
<!-- topへ戻るボタン -->
<a href="#" class="pagetop" id="js-pagetop">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.svg" alt="to-topボタン"/>
</a>

<?php wp_footer(); ?>
</body>
</html>

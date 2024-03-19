<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price_sp.jpg" alt="シュノーケリングをして頭を少し出している姿">
  </picture>
  <h1 class="sub-mv__title">Price</h1>
</div>

<!-- パンくず -->
<?php get_template_part('./parts/breadcrumb') ?>

<div class="lower-price layout-lower-price">
  <div class="lower-price__inner lower-inner inner">
    <div class="lower-price__items">
      <!-- ライセンス講習 -->
      <table data-id="#licence" id="licence" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ライセンス講習</p>
            </th>
          </tr>
          <tr>
            <td class="table__menu">オープンウォーター<br class="u-mobile">ダイバーコース</td>
            <td class="table__price">¥50,000</td>
          </tr>
          <tr>
            <td class="table__menu">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
            <td class="table__price">¥60,000</td>
          </tr>
          <tr>
            <td class="table__menu">レスキュー＋EFRコース</td>
            <td class="table__price">¥70,000</td>
          </tr>
        </tbody>
      </table>
      <!-- 体験ダイビング -->
      <table data-id="#experience" id="experience" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">体験ダイビング</p>
            </th>
          </tr>
          <tr>
            <td class="table__menu">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
            <td class="table__price">¥7,000</td>
          </tr>
          <tr>
            <td class="table__menu">ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
            <td class="table__price">¥14,000</td>
          </tr>
          <tr>
            <td class="table__menu">ボート体験ダイビング<br class="u-mobile">(半日)</td>
            <td class="table__price">¥10,000</td>
          </tr>
          <tr>
            <td class="table__menu">ボート体験ダイビング<br class="u-mobile">(1日)</td>
            <td class="table__price">¥18,000</td>
          </tr>
        </tbody>
      </table>
      <!-- ファンダイビング -->
      <table data-id="#fan" id="fan" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ファンダイビング</p>
            </th>
          </tr>
          <tr>
            <td class="table__menu">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="table__price">¥14,000</td>
          </tr>
          <tr>
            <td class="table__menu">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="table__price">¥18,000</td>
          </tr>
          <tr>
            <td class="table__menu">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="table__price">¥24,000</td>
          </tr>
          <tr>
            <td class="table__menu">ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
            <td class="table__price">¥10,000</td>
          </tr>
        </tbody>
      </table>
      <!-- スペシャルダイビング -->
      <table data-id="#special" id="special" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">スペシャルダイビング</p>
            </th>
          </tr>
          <tr>
            <td class="table__menu">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="table__price">¥24,000</td>
          </tr>
          <tr>
            <td class="table__menu">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
            <td class="table__price">¥32,000</td>
          </tr>
          <tr>
            <td class="table__menu">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
            <td class="table__price">¥14,000</td>
          </tr>
        </tbody>
      </table>
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
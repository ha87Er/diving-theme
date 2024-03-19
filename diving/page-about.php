 <?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about_sp.jpg" alt="２匹の黄色い熱帯魚">
  </picture>
  <h1 class="sub-mv__title">About us</h1>
</div>

<!-- パンくず -->
<?php get_template_part('./parts/breadcrumb') ?>

<div class="page-about layout-page-about">
  <div class="page-about__inner lower-inner inner">
    <div class="page-about__image-wrap">
      <div class="page-about__image1">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-shisa.jpg" alt="屋根の上に乗っていいるシーサー">
      </div>
      <div class="page-about__image2">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-fish.jpg" alt="海の中を泳ぐ黄色い熱帯魚">
      </div>
    </div>
    <div class="page-about__content">
      <h3 class="page-about__content-title">Dive into<br>the Ocean</h3>
      <div class="page-about__text-block">
        <p class="page-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
      </div>
    </div>
  </div>
</div>

<section class="gallery layout-gallery">
  <div class="gallery__inner inner">
    <div class="gallery__title title">
      <div class="title__en"> Gallery</div>
      <h2 class="title__ja">フォト</h2>
    </div>
    <div class="gallery__image-warp">
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image1.jpg" alt="珊瑚礁に集まる赤い魚の群れ" width="345" height="523" loading="lazy">
      </div>
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image2.jpg" alt="綺麗な海に浮かぶ船" width="345" height="219" loading="lazy">
      </div>
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image3.jpg" alt="黄色い２匹の魚" width="345" height="219" loading="lazy">
      </div>
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image4.jpg" alt="ぷくっとした黄色い魚" width="345" height="219" loading="lazy">
      </div>
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image5.jpg" alt="海で泳ぐ魚の群れ" width="345" height="523" loading="lazy">
      </div>
      <div class="gallery__image js-modal-open">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image6.jpg" alt="珊瑚礁の上で泳ぐ２匹の黄色い魚" width="345" height="523" loading="lazy">
      </div>
    </div>
    <!-- モーダル  -->
    <div class="gallery__modal modal js-modal" id="1">
      <div class="modal__img-wrap">
        <div class="modal__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_image1.jpg" alt="珊瑚礁に集まる赤い魚の群れ" width="345" height="523" loading="lazy">
        </div>
      </div>
      <div class="modal__bg js-modal-close"></div>
    </div>
  </div>
</section>

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


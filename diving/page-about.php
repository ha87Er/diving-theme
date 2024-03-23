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
<?php get_template_part('parts/breadcrumb') ?>

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
        <?php
        $gallery = SCF::get('gallery');
        foreach ($gallery as $fields) {
        ?>
        <div class="gallery__image js-modal-open">
            <img src="<?php echo wp_get_attachment_url($fields['gallery_img']); ?>" alt="">
        </div>
        <?php } ?>
    </div>

    <!-- モーダル  -->
    <div class="gallery__modal modal js-modal" id="1">
      <div class="modal__img-wrap">
        <div class="modal__img">
          <?php
            // 最初のギャラリー画像のURLを取得
            $first_gallery_img_url = wp_get_attachment_url($gallery[0]['gallery_img']);
            ?>
            <img src="<?php echo $first_gallery_img_url; ?>" alt="">
        </div>
      </div>
      <div class="modal__bg js-modal-close"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>


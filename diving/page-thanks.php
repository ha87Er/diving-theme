<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact_sp.jpg" alt="上空から見た海と砂浜">
  </picture>
  <h1 class="sub-mv__title">Contact</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="contact-thanks layout-contact-thanks">
  <div class="contact-thanks__inner lower-inner inner">
    <div class="contact-thanks__content">
    <h2 class="contact-thanks__title">お問い合わせ内容を送信完了しました。</h2>
      <p class="contact-thanks__text">
        このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
      </p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
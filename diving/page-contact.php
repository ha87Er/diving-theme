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

<div class="lower-contact layout-lower-contact">
  <div class="lower-contact__inner lower-inner inner">
      <div class="lower-contact__form contact-form">
        <?php echo do_shortcode('[contact-form-7 id="de1dbad" title="お問い合わせ html_id="form""]'); ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>
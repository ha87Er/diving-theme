<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq_sp.jpg" alt="浜辺が見える綺麗な海">
  </picture>
  <h1 class="sub-mv__title">FAQ</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="faq layout-faq">
  <div class="faq__inner lower-inner inner">
    <div class="faq__items faq-items">
      <?php
      if(get_field('faq-switch',14)):
      ?>
      <div class="article-nothing">
        <p class="article-nothing__text">ただいま準備中です。</p>
      </div>
      <?php else : ?>
      <?php $fields = SCF::get('faq'); ?>
        <?php if($fields): ?>
          <?php foreach($fields as $field): ?>
            <?php if($field['question'] && $field['answer']): ?>
              <div class="faq-items__item faq-item is-open">
                <div class="faq-item__head js-accordion">
                  <p class="faq-item__head-text">
                    <?php echo $field['question']; ?>
                  </p>
                  <button class="faq-item__toggle">
                    <span></span>
                    <span></span>
                  </button>
                </div>
                <div class="faq-item__body" style="display:block;">
                  <p class="faq-item__text"><?php echo nl2br($field['answer']); ?></p>
                </div>
              </div>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>
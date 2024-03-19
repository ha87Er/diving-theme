<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign_sp.jpg" alt="２匹の黄色い熱帯魚">
  </picture>
  <h1 class="sub-mv__title">Campaign</h1>
</div>

<!-- パンくず -->
<?php get_template_part('./parts/breadcrumb') ?>

<div class="lower-campaign layout-lower-campaign">
  <div class="lower-campaign__inner lower-inner inner">
    <div class="lower-campaign__tab-wrap tab-items">
     <a href="<?php echo esc_url(get_post_type_archive_link('campaign'))?>" class="tab-items__tab <?php if(is_post_type_archive('campaign')) { echo 'is-active'; } ?>">ALL</a>
      <?php
        $campaign_terms = get_terms('campaign_category', array('hide_empty' => false ));
        foreach ($campaign_terms as $campaign_term):
      ?>
      <a href="<?php echo esc_url(get_term_link($campaign_term, 'campaign_category')); ?>" class="tab-items__tab"><?php echo esc_html($campaign_term->name); ?></a>
      <?php
        endforeach;
      ?>
    </div>
    <div class="lower-campaign__cards">
        <?php if (have_posts()) : // 記事があれば表示 ?>
        <?php while(have_posts()) : // 記事数分ループ ?>
        <?php the_post(); ?>
            <div class="lower-campaign__card campaign-card">
                <div class="campaign-card__image">
                <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
                <?php endif; ?>
                </div>
                <div class="campaign-card__body campaign-card__body--lower">
                <div>
                    <p class="campaign-card__tag campaign-card__tag--lower">
                    <?php echo esc_html(get_the_terms(get_the_ID(), 'campaign_category')[0]->name); ?>
                    </p>
                </div>
                <div class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></div>
                <p class="campaign-card__text campaign-card__text--lower">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--lower">
                    <p class="campaign-card__price-before campaign-card__price-before--lower"><?php the_field('campaign_1'); ?></p>
                    <p class="campaign-card__price-after campaign-card__price-after--lower"><?php the_field('campaign_2'); ?></p>
                </div>
                <div class="campaign-card__description u-desktop">
                    <p class="campaign-card__description-text">
                    <?php the_field('campaign_3'); ?>
                    </p>
                    <p class="campaign-card__date"><?php the_field('campaign_4'); ?></p>
                    <p class="campaign-card__info">ご予約・お問い合わせはコチラ</p>
                    <div class="campaign-card__button">
                    <a href="<?php esc_url(the_field('campaign_5')); ?>" class="button">
                        <span>Contact us</span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- ページネーション -->
    <div class="layout-pagenavi">
        <?php wp_pagenavi(); ?>
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
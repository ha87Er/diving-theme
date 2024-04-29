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
<?php get_template_part('parts/breadcrumb') ?>

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
    <?php if (have_posts()) : // 記事があれば表示 ?>
    <div class="lower-campaign__cards">
        <?php while(have_posts()) : // 記事数分ループ ?>
          <?php the_post(); ?>
          <div class="lower-campaign__card campaign-card">
                <div class="campaign-card__image">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('full', ['alt' => get_the_title() . 'のアイキャッチ']); ?>
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.png'); ?>" alt="noimage">
                    <?php endif; ?>
                </div>
                <div class="campaign-card__body campaign-card__body--lower">
                <div>
                    <p class="campaign-card__tag campaign-card__tag--lower">
                    <?php echo esc_html(get_the_terms(get_the_ID(), 'campaign_category')[0]->name); ?>
                    </p>
                </div>
                <!-- 価格 -->
                <div class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></div>
                <?php $priceInfo = get_field('price-group'); ?>
                <?php if($priceInfo['price-title']): ?>
                  <p class="campaign-card__text campaign-card__text--lower"><?php echo $priceInfo['price-title']; ?></p>
                <?php endif; ?>
                <div class="campaign-card__price campaign-card__price--lower">
                  <?php if($priceInfo['price1']): ?>
                    <p class="campaign-card__price-before campaign-card__price-before--lower">¥<?php echo $priceInfo['price1']; ?></p>
                  <?php endif; ?>
                  <?php if($priceInfo['price2']): ?>
                    <p class="campaign-card__price-after campaign-card__price-after--lower">¥<?php echo $priceInfo['price2']; ?></p>
                  <?php endif; ?>
                </div>
                <!-- 詳細 -->
                <div class="campaign-card__description u-desktop">
                  <?php $priceDsc = get_field('description'); ?>
                   <?php if($priceDsc['campaign-text']): ?>
                    <p class="campaign-card__description-text">
                      <?php echo $priceDsc['campaign-text']; ?>
                    </p>
                    <?php endif; ?>
                    <?php $campaignWeek = $priceDsc['campaign-week']; ?>
                    <?php if($campaignWeek['date-start'] && $campaignWeek['date-end']): ?>
                    <p class="campaign-card__date"><?php echo $campaignWeek['date-start']; ?> - <?php echo $campaignWeek['date-end']; ?></p>
                    <?php endif; ?>
                    <p class="campaign-card__info">ご予約・お問い合わせはコチラ</p>
                    <div class="campaign-card__button">
                    <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="button">
                        <span>Contact us</span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
          </div>
      <?php else : ?>
        <div class="article-nothing">
          <p class="article-nothing__text">該当する記事はありません。</p>
        </div>
      <?php endif; ?>
      <!-- ページネーション -->
    <div class="layout-pagenavi">
        <?php wp_pagenavi(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
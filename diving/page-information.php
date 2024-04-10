<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info_sp.jpg" alt="魚に囲まれて泳ぐダイバー">
  </picture>
  <h1 class="sub-mv__title">Information</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="lower-information layout-lower-information">
  <div class="lower-information__inner lower-inner inner">
    <div class="lower-information__wrap">
      <div class="lower-information__tabs information-tabs">
        <button class="information-tabs__tab js-tab-switch is-active" data-tab="tab1">
          <span>
              <div class="information-tabs__tab-icon1"></div>
              ライセンス<br class="u-mobile">講習
          </span>
        </button>
        <button class="information-tabs__tab js-tab-switch" data-tab="tab2">
            <span>
              <div class="information-tabs__tab-icon2"></div>
              ファン<br class="u-mobile">ダイビング
            </span>
        </button>
        <button class="information-tabs__tab js-tab-switch" data-tab="tab3">
            <span>
              <div class="information-tabs__tab-icon3"></div>
              体験<br class="u-mobile">ダイビング
            </span>
        </button>
      </div>
      <div class="lower-information__cards information-cards">
        <div class="information-cards__card information-card  js-tab-cts is-active" data-tab="tab1">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">ライセンス講習</div>
              <div class="information-card__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image1.jpg" alt="集団で泳ぐダイバー" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
        <div class="lower-information__card information-card js-tab-cts" data-tab="tab2">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">ファンダイビング</div>
              <div class="information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image2.jpg" alt="魚の大群" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
        <div class="lower-information__card information-card js-tab-cts" data-tab="tab3">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">体験ダイビング</div>
              <div class="information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image3.jpg" alt="尾びれが黄色い体が白黒の縞模様の魚" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
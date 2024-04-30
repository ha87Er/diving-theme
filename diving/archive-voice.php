<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice_pc.jpg" media="(min-width: 768px)" type="image/png">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice_sp.jpg" alt="ダイビングする人たち">
    </picture>
    <h1 class="sub-mv__title">Voice</h1>
  </div>

  <!-- パンくず -->
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
  </div>

  <div class="lower-voice layout-lower-voice">
    <div class="lower-voice__inner lower-inner inner">
      <div class="lower-voice__tab-wrap tab-items">
        <a href="<?php echo esc_url(get_post_type_archive_link('voice'))?>" class="tab-items__tab <?php if(is_post_type_archive('voice')) { echo 'is-active'; } ?>">ALL</a>
        <?php
        $voice_terms = get_terms('voice_category', array('hide_empty' => false ));
        foreach ($voice_terms as $voice_term):
        ?>
        <a href="<?php echo esc_url(get_term_link($voice_term, 'voice_category')); ?>" class="tab-items__tab"><?php echo esc_html($voice_term->name); ?></a>
        <?php
        endforeach;
        ?>
      </div>
      <?php if (have_posts()) : // 記事があれば表示 ?>
      <div class="lower-voice__cards voice-items voice-items--lower-voice">
        <?php while(have_posts()) : // 記事数分ループ ?>
        <?php the_post(); ?>
        <div class="voice-items__item voice-item">
          <div class="voice-item__head">
            <div class="voice-item__content">
              <div class="voice-item__meta">
                <?php $voiceInfo = get_field('voice-group'); ?>
                <?php if(!empty($voiceInfo['age'])||!empty($voiceInfo['gender'])): ?>
                <p class="voice-item__age voice-item__age--lower">
                  <?php echo $voiceInfo['age'].' '.'('.$voiceInfo['gender'].')'; ?>
                </p>
                <?php endif; ?>
                <div class="voice-item__tag voice-item__tag--lower">
                    <?php echo esc_html(get_the_terms(get_the_ID(), 'voice_category')[0]->name); ?>
                </div>
              </div>
              <h3 class="voice-item__title voice-item__title--lower"><?php the_title(); ?></h3>
            </div>
            <div class="voice-item__image colorbox inview">
                <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ">
                <?php else: ?>
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.png'); ?>" alt="noimage">
                <?php endif; ?>
            </div>
          </div>
          <div class="voice-item__body">
            <?php if($voiceInfo['voice-text']): ?>
            <p class="voice-item__text">
              <?php echo $voiceInfo['voice-text']; ?>
            </p>
            <?php endif; ?>
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
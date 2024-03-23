<?php get_header(); ?>

<div class="not-found layout__not-found">
  <div class="not-found__content">
    <!-- パンくず -->
    <div class="breadcrumb breadcrumb--white layout-breadcrumb layout-breadcrumb--white">
      <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
      </div>
    </div>
    <h2 class="not-found__title">404</h2>
    <p class="not-found__text">
      申し訳ありません。<br>
      お探しのページが見つかりません。
    </p>
    <div class="not-found__button">
      <a href="<?php echo home_url(); ?>" class="button button--white">
        <span>Page TOP</span>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>

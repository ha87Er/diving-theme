<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price_sp.jpg" alt="シュノーケリングをして頭を少し出している姿">
  </picture>
  <h1 class="sub-mv__title">Price</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="lower-price layout-lower-price">
  <div class="lower-price__inner lower-inner inner">
    <div class="lower-price__items">
    <?php
    if(get_field('price-switch',12)):
    ?>
    <div class="article-nothing">
      <p class="article-nothing__text">ただいま準備中です。</p>
    </div>
    <?php else : ?>
      <?php
      $menu = get_post_meta($post->ID, 'menu', true);
      $price = get_post_meta($post->ID, 'price', true);

      // menuとpriceの両方が入力されている場合にのみテーブルを表示
      if (!empty($menu) && !empty($price)):
      ?>
      <table data-id="#license" id="license" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ライセンス講習</p>
            </th>
          </tr>
          <?php $price1 = SCF::get('license'); ?>
          <?php foreach ($price1 as $fields): ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price']); ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>

      <!-- 体験ダイビング -->
      <?php
      $menu = get_post_meta($post->ID, 'menu2', true);
      $price = get_post_meta($post->ID, 'price2', true);

      // menuとpriceの両方が入力されている場合にのみテーブルを表示
      if (!empty($menu) && !empty($price)):
      ?>
      <table data-id="#experience" id="experience" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">体験ダイビング</p>
            </th>
          </tr>
          <?php $price2 = SCF::get('trail-diving'); ?>
          <?php foreach ($price2 as $fields): ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu2']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price2']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
      <!-- ファンダイビング -->
      <?php
      $menu = get_post_meta($post->ID, 'menu3', true);
      $price = get_post_meta($post->ID, 'price3', true);

      // menuとpriceの両方が入力されている場合にのみテーブルを表示
      if (!empty($menu) && !empty($price)):
      ?>
      <table data-id="#fan" id="fan" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ファンダイビング</p>
            </th>
          </tr>
          <?php $price3 = SCF::get('fan-diving'); ?>
          <?php foreach ($price3 as $fields): ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu3']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price3']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
      <!-- スペシャルダイビング -->
      <?php
      $menu = get_post_meta($post->ID, 'menu4', true);
      $price = get_post_meta($post->ID, 'price4', true);

      // menuとpriceの両方が入力されている場合にのみテーブルを表示
      if (!empty($menu) && !empty($price)):
      ?>
      <table data-id="#special" id="special" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">スペシャルダイビング</p>
            </th>
          </tr>
          <?php $special = SCF::get('special'); ?>
          <?php foreach ($special as $fields): ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu4']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price4']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif ?>
    </div>
  <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
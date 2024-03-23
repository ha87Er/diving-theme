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
      <!-- ライセンス講習 -->
      <table data-id="#licence" id="licence" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ライセンス講習</p>
            </th>
          </tr>
          <?php
          $price = SCF::get('license');
          foreach ($price as $fields) {
          ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price']); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- 体験ダイビング -->
      <table data-id="#experience" id="experience" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">体験ダイビング</p>
            </th>
          </tr>
          <?php
          $price = SCF::get('trail-diving');
          foreach ($price as $fields) {
          ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price']); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- ファンダイビング -->
      <table data-id="#fan" id="fan" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">ファンダイビング</p>
            </th>
          </tr>
          <?php
          $price = SCF::get('trail-diving');
          foreach ($price as $fields) {
          ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price']); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- スペシャルダイビング -->
      <table data-id="#special" id="special" class="lower-price__table table">
        <tbody class="table__body">
          <tr>
            <th class="table__title">
              <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-whale_white.svg" alt="クジラのアイコン" width="24" height="24" loading="lazy">スペシャルダイビング</p>
            </th>
          </tr>
          <?php
          $price = SCF::get('special-diving');
          foreach ($price as $fields) {
          ?>
          <tr>
            <td class="table__menu"><?php echo $fields['menu']; ?></td>
            <td class="table__price"><?php echo nl2br($fields['price']); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php get_footer(); ?>
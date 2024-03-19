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
<?php get_template_part('./parts/breadcrumb') ?>

<div class="lower-contact layout-lower-contact">
  <div class="lower-contact__inner lower-inner inner">
      <div class="lower-contact__form contact-form">
        <form action="#" method="POST" >
          <dl class="contact-form__item">
            <dt>
              <label for="your-name">お名前<span>必須</span></label>
            </dt>
            <dd>
              <input type="text" name="your-name" id="your-name" placeholder="沖縄　太郎" />
            </dd>
          </dl>
          <dl class="contact-form__item">
            <dt>
              <label for="your-email">メールアドレス<span>必須</span></label>
            </dt>
            <dd>
              <input type="email" name="emailAddress" id="your-email" placeholder="aaa000@ggmail.com"/>
            </dd>
          </dl>
          <dl class="contact-form__item">
          <dt>
            <label for="your-tel">電話番号<span>必須</span></label>
          </dt>
          <dd>
            <input type="tel" name="your-tel" id="your-tel" placeholder="aaa000@ggmail.com"/>
          </dd>
        </dl>
        <dl class="contact-form__item">
          <dt>
            お問合せ項目<span>必須</span>
          </dt>
          <dd class="contact-form__checkbox">
            <label class="form-checkbox">
              <input type="checkbox" class="form-checkbox__input" name="your-check">
              <span class="form-checkbox__check">ダイビング講習について</span>
            </label>
            <label class="form-checkbox">
              <input type="checkbox" class="form-checkbox__input" name="your-check">
              <span class="form-checkbox__check">ファンダイビングについて</span>
            </label>
            <label class="form-checkbox">
              <input type="checkbox" class="form-checkbox__input" name="your-check">
              <span class="form-checkbox__check">体験ダイビングについて</span>
            </label>
          </dd>
        </dl>
        <dl class="contact-form__item">
            <dt>
              <label>キャンペーン</label>
            </dt>
            <dd>
              <select name="select">
                <option value="">キャンペーン内容を選択</option>
                <option value="キャンペーン1">キャンペーン1</option>
                <option value="キャンペーン2">キャンペーン2</option>
                <option value="キャンペーン3">キャンペーン3</option>
              </select>
            </dd>
          </dl>
          <dl class="contact-form__item">
            <dt class="js-form-input">
              <label for="your-message">お問合せ内容<span>必須</span></label>
            </dt>
            <dd>
              <textarea name="your-message" id="your-message" placeholder=""></textarea>
            </dd>
          </dl>
          <div class="contact-form__privacy">
            <label class="contact-form__privacy-label">
              <input type="checkbox" name="your-privacy">
              <span>個人情報の取り扱いについて同意のうえ送信します。</span>
            </label>
          </div>
          <div class="contact-form__btn">
          <button class="button button--form" type="submit" value="">
            <span>Send</span>
          </button>
          </div>
        </form>
      </div>
  </div>
</div>

<?php get_footer(); ?>
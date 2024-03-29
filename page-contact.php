<?php get_header(); ?>

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Contact</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-contact.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-contact-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-contact -->
  <div class="page-contact top-page-contact">
    <div class="page-contact__inner inner">

      <div class="contact">
        <div class="contact__pageinner">
        <?php echo do_shortcode('[contact-form-7 id="2758909" title="お問い合わせ"]'); ?>
          <!-- <form action="mail.php" method="POST" class="contact__form form">
            <dl class="form__wrap">
              <dt class="form__label"><label for="your-name" class="is-required">お名前<span>必須</span></label></dt>
              <dd class="form__input form-input"><input id="your-name" type="text" placeholder="沖縄　太郎"></dd>
            </dl>
            <dl class="form__wrap">
              <dt class="form__label"><label for="your-email" class="is-required">メールアドレス<span>必須</span></label></dt>
              <dd class="form__input form-input"><input id="your-email" type="email" placeholder="aaa000@ggmail.com">
              </dd>
            </dl>
            <dl class="form__wrap">
              <dt class="form__label"><label for="phone" class="is-required">電話番号<span>必須</span></label></dt>
              <dd class="form__input form-input"><input id="phone" type="tel" placeholder="000-0000-0000"></dd>
            </dl>
            <dl class="form__wrap">
              <dt class="form__label">お問合せ項目<span>必須</span></dt>
              <dd class="form__radio form-radio">
                <label><input type="radio" name="category" value="ダイビング講習について"><span>ダイビング講習について</span></label>
                <label><input type="radio" name="category" value="ファンデイビングについて"><span>ファンデイビングについて</span></label>
                <label><input type="radio" name="category" value="体験ダイビングについて"><span>体験ダイビングについて</span></label>
              </dd>
            </dl>
            <dl class="form__wrap">
              <dt class="form__label">キャンペーン</dt>
              <dd class="form__select form-select">
                <select>
                  <option hidden>キャンペーン内容を選択</option>
                  <option value="キャンペーン1">キャンペーン1</option>
                  <option value="キャンペーン2">キャンペーン2</option>
                  <option value="キャンペーン3">キャンペーン3</option>
                  <option value="キャンペーン4">キャンペーン4</option>
                  <option value="キャンペーン5">キャンペーン5</option>
                </select>
              </dd>
            </dl>
            <dl class="form__wrap form__wrap--textarea">
              <dt class="form__label"><label for="your-message" class="is-required">お問合せ内容<span>必須</span></label></dt>
              <dd class="form__textarea form-textarea"><textarea id="your-message" placeholder=""></textarea></dd>
            </dl>

            <div class="form__privacy form-checkbox form-checkbox--consent form-checkbox-bg">
              <label><input type="checkbox" name="privacy" value="個人情報の取り扱いについて同意のうえ送信します。"><span>個人情報の取り扱いについて同意のうえ<br
                    class="u-mobile">送信します。</span></label>
            </div>

            <div class="form__submit form-submit">
              <div class="btn btn--contact">
                <input type="submit" value="send" class="btn__submit">
                <span></span>
              </div>
            </div>

          </form> -->
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
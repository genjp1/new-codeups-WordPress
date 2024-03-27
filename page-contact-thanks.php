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
  <?php get_template_part('breadcrumb'); ?>

  <!-- page-contact-complete -->
  <section class="page-contact-complete top-page-contact-complete">
    <div class="page-contact-complete__inner inner">

      <h2 class="page-contact-complete__title">お問い合わせ内容を送信完了しました。</h2>
      <div class="page-contact-complete__textBlock">
        <p class="page-contact-complete__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。</p>
        <p class="page-contact-complete__textCenter">お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。</p>
        <p class="page-contact-complete__textBttom">また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
      </div>

    </div>
  </section>

<?php get_footer(); ?>
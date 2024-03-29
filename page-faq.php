<?php get_header(); ?>

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">FAQ</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-faq.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-faq-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-faq -->
  <div class="page-faq top-page-faq">
    <div class="page-faq__inner inner">

      <div class="faq">
        <div class="faq__inner">
          <div class="faq__content">
            <?php
              $fields = SCF::get_option_meta( 'theme-options', 'faq-list' );
              foreach ( $fields as $field_name => $fields_value ) {
            ?>
            <ul class="faq__list faq-list">
              <li class="faq-list__item">
                <p class="faq-list__item-question js-faq-question"><?php echo $fields_value['question']; ?></p>
                <p class="faq-list__item-answer">
                <?php echo $fields_value['answers']; ?>
                </p>
              </li>
            </ul>
            <?php } ?>

          </div>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
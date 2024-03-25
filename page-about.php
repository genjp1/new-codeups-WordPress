<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">About us</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-about.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-about-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php get_template_part('breadcrumb'); ?>

  <!-- page-aboutUs -->
  <section class="page-about top-page-about">
    <div class="page-about__inner inner">
      <div class="page-about__about about">
        <div class="about__img-wrap">
          <div class="about__img-small u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us1.jpg" alt="水中にいるダイバーの様子">
          </div>
          <div class="about__img-big about__img-big--page-about">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us2.jpg" alt="水中にいるダイバーの様子">
          </div>
        </div>
        <div class="about__content-wrap about__content-wrap--page-about ">
          <h2 class="about__title about__title--page-about">Dive into<br>the Ocean</h2>
          <div class="about__text-wrap about__text-wrap--page-about">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- gallery -->
  <section class="gallery top-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title title">
        <p class="title__main">Gallery</p>
        <h2 class="title__sub">フォト</h2>
      </div>

      <!-- <div class="modal-open-button js-modal-open">モーダルを開く</div> -->

      <div class="gallery__modal modal js-modal">
        <div class="modal__body">
          <!-- <span class="modal__close-button js-modal__close">閉じる</span> -->
          <div class="modal__content js-modal__content">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery1.jpg" alt="水中のサンゴと複数の小魚の様子">
          </div>
        </div>
      </div>

      <ul class="gallery__list gallery-list">
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery1.jpg" alt="水中のサンゴと複数の小魚の様子">
        </li>
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery2.jpg" alt="水面にボートが浮かんでいる様子">
        </li>
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery3.jpg" alt="水中で２匹の魚が泳いでいる様子">
        </li>
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery4.jpg" alt="水中で1匹の魚が泳いでいる様子">
        </li>
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery5.jpg" alt="複数の魚が海底で泳いでいる様子">
        </li>
        <li class="gallery-list__item js-modal-open">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery6.jpg" alt="複数の魚が水中でサンゴの近くを泳いでいる様子">
        </li>
      </ul>


    </div>
  </section>

<?php get_footer(); ?>
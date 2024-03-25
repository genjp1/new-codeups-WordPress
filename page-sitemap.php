<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$privacypolicy = esc_url( home_url( '/privacypolicy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Site MAP</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-others.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-others-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php get_template_part('breadcrumb'); ?>

  <!-- page-sitemap -->
  <div class="page-sitemap top-page-sitemap">
    <div class="page-sitemap__inner inner">

      <div class="page-sitemap__nav footer-nav">
        <div class="footer-nav__contents footer-nav__contents--sitemap">

          <div class="footer-nav__content footer-nav__content--sitemap">

            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $campaign; ?>">キャンペーン</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $about; ?>">私たちについて</a></span>
              </li>
            </ul>
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $information; ?>">ダイビング情報</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $blog; ?>">ブログ</a></span>
              </li>
            </ul>
          </div>
          <div class="footer-nav__content footer-nav__content--sitemap">
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $voice; ?>">お客様の声</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $price; ?>">料金一覧</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-column footer-nav__items-column--end">
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $faq; ?>">よくある質問</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $privacypolicy; ?>"><span>プライバシー<br
                        class="u-mobile">ポリシー</span></a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $terms; ?>">利用規約</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--sitemap"><span><a href="<?php echo $contact; ?>">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
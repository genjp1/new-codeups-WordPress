<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="index.html" class="logo">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo.svg" alt="CodeUps">
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- ul.global-nav__items>li.global-nav__item*6>a -->

      <!-- スマホメニュー -->
      <!-- .sp-nav>ul.sp-nav__items>li.sp-nav__item*6>a -->
      <div class="header__sp-nav sp-nav js-drawer-menu">
        <nav class="sp-nav__items">
          <div class="sp-nav__scroll-container">
            <ul class="sp-nav__items-column">
              <li class="sp-nav__item"><span><a href="page-campaign.html">キャンペーン</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-about.html">私たちについて</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-information.html">ダイビング情報</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-blog.html">ブログ</a></span>
              </li>
            </ul>
            <ul class="sp-nav__items-column">
              <li class="sp-nav__item"><span><a href="page-voice.html">お客様の声</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-price.html">料金一覧</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="">ライセンス講習</a></li>
                  <li class="sp-nav__item-child"><a href="">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-faq.html">よくある質問</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-policy.html">プライバシー<br>ポリシー</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-terms.html">利用規約</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-contact.html">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- pcメニュー -->
      <nav class="header__pc-nav pc-nav js-drawer-menu">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="page-campaign.html">Campaign<span>キャンペーン</span></a></li>
          <li class="pc-nav__item"><a href="page-about.html">About us<span>私たちについて</span></a></li>
          <li class="pc-nav__item"><a href="page-information.html">Information<span>ダイビング情報</span></a></li>
          <li class="pc-nav__item"><a href="page-blog.html">Blog<span>ブログ</span></a></li>
          <li class="pc-nav__item"><a href="page-voice.html">Voice<span>お客様の声</span></a></li>
          <li class="pc-nav__item"><a href="page-price.html">Price<span>料金一覧</span></a></li>
          <li class="pc-nav__item"><a href="page-faq.html">FAQ<span>よくある質問</span></a></li>
          <li class="pc-nav__item"><a href="page-contact.html">Contact<span>お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
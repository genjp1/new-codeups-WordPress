<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$policy = esc_url( home_url( '/policy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <header class="header">
    <div class="header__inner">


    <!-- logoのh1,div切り替え -->
      <?php if(is_front_page()): ?>
        <h1 class="p-header__logo">
      <?php else :?>
        <div class="p-header__logo">
      <?php endif; ?>
      <a href="<?php echo $home; ?>" class="logo">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo.svg" alt="CodeUps">
        </a>
      <?php if(is_front_page()): ?>
        </h1>
      <?php else :?>
        </div>
      <?php endif; ?>


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
              <li class="sp-nav__item"><span><a href="<?php echo $campaign; ?>">キャンペーン</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $about; ?>">私たちについて</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $information; ?>">ダイビング情報</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $blog; ?>">ブログ</a></span>
              </li>
            </ul>
            <ul class="sp-nav__items-column">
              <li class="sp-nav__item"><span><a href="<?php echo $voice; ?>">お客様の声</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $price; ?>">料金一覧</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="">ライセンス講習</a></li>
                  <li class="sp-nav__item-child"><a href="">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $faq; ?>">よくある質問</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $policy; ?>">プライバシー<br>ポリシー</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $terms; ?>">利用規約</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="<?php echo $contact; ?>">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- pcメニュー -->
      <nav class="header__pc-nav pc-nav js-drawer-menu">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="<?php echo $campaign; ?>">Campaign<span>キャンペーン</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $about; ?>">About us<span>私たちについて</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $information; ?>">Information<span>ダイビング情報</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $blog; ?>">Blog<span>ブログ</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $voice; ?>">Voice<span>お客様の声</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $price; ?>">Price<span>料金一覧</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $faq; ?>">FAQ<span>よくある質問</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo $contact; ?>">Contact<span>お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
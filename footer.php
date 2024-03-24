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
 
 <div class="pagetop-block">
    <!--   トップに戻るボタン -->
    <a class="pagetop" href="#">
      <div class="pagetop__arrow"></div>
    </a>
  </div>

<footer class="footer  top-footer">
    <div class="footer__inner inner">
      <div class="footer__icon">
        <div class="footer__logo">
          <a href="<?php echo $home; ?>" class="logo logo--footer">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-logo.svg" alt="CodeUps">
          </a>
        </div>
        <div class="footer__sns footer-sns">
          <ul class="footer-sns__items">
            <li class="footer-sns__item"><a href="https://www.facebook.com/"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-facebook.svg" alt="facebook"></a></li>
            <li class="footer-sns__item"><a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-instagram.svg" alt="instagram"></a></li>
          </ul>
        </div>
      </div>

      <!-- footerメニュー -->
      <div class="footer__nav footer-nav">
        <div class="footer-nav__contents">

          <div class="footer-nav__content">

            <ul class="footer-nav__items-column">
              <li class="footer-nav__item"><span><a href="<?php echo $campaign; ?>">キャンペーン</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $about; ?>">私たちについて</a></span>
              </li>
            </ul>
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item"><span><a href="<?php echo $information; ?>">ダイビング情報</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $blog; ?>">ブログ</a></span>
              </li>
            </ul>
          </div>
          <div class="footer-nav__content">
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item"><span><a href="<?php echo $voice; ?>">お客様の声</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $price; ?>">料金一覧</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-column footer-nav__items-column--end">
              <li class="footer-nav__item"><span><a href="<?php echo $faq; ?>">よくある質問</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $policy; ?>"><span>プライバシー<br
                        class="u-mobile">ポリシー</span></a></span>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $terms; ?>">利用規約</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $contact; ?>">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__copyright"> Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
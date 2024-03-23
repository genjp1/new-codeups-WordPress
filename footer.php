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
          <a href="index.html" class="logo logo--footer">
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
              <li class="footer-nav__item"><span><a href="page-campaign.html">キャンペーン</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item"><span><a href="page-about.html">私たちについて</a></span>
              </li>
            </ul>
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item"><span><a href="page-information.html">ダイビング情報</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item"><span><a href="page-blog.html">ブログ</a></span>
              </li>
            </ul>
          </div>
          <div class="footer-nav__content">
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item"><span><a href="page-voice.html">お客様の声</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="page-price.html">料金一覧</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-column footer-nav__items-column--end">
              <li class="footer-nav__item"><span><a href="page-faq.html">よくある質問</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="page-policy.html"><span>プライバシー<br
                        class="u-mobile">ポリシー</span></a></span>
              </li>
              <li class="footer-nav__item"><span><a href="page-terms.html">利用規約</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="page-contact.html">お問い合わせ</a></span>
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
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
$c_licence = esc_url( home_url( '/campaign_category/licence/' ) );
$c_fundiving = esc_url( home_url( '/campaign_category/fundiving/' ) );
$c_trial_diving = esc_url( home_url( '/campaign_category/trial-diving/' ) );
$p_licence = esc_url( home_url( '/price#licence' ) );
$p_fundiving = esc_url( home_url( '/price#fundiving' ) );
$p_trial_diving = esc_url( home_url( '/price#trial-diving' ) );
?> 
 

<?php if(!is_404()): ?>
 <div class="pagetop-block">
    <!--   トップに戻るボタン -->
    <a class="pagetop" href="#">
      <div class="pagetop__arrow"></div>
    </a>
  </div>

  
  <!-- contact -->
  <section id="contact" class="contact top-contact">
    <div class="contact__inner inner">
      <div class="contact__content">
        <div class="contact__left">
          <div class="contact__imgTop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-logo.svg" alt="CodeUps">
          </div>
          <hr class="contact__line">
          <address class="contact__address-content">
            <div class="contact__info">
              <p class="contact__address">沖縄県那覇市1-1</p>
              <p class="contact__tel">TEL:0120-000-0000</p>
              <p class="contact__time">営業時間:8:30-19:00</p>
              <p class="contact__holiday">定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3578.99218715572!2d127.6908583!3d26.2294434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1706150336565!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </address>
        </div>
        <div class="contact__right">
          <div class="contact__title title">
            <p class="title__main title__main--big">Contact</p>
            <h2 class="title__sub title__sub--contact">お問い合せ</h2>
            <p class="title__subText">ご予約・お問い合わせはコチラ</p>
          </div>
          <div class="contact__btn">
            <a href="page-contact.html" class="btn"><span>Contact us</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

<footer class="footer  top-footer <?php if(is_404()){ echo 'top-footer--mt0';} ?> ">
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
                  <li class="footer-nav__item-child"><a href="<?php echo $c_licence; ?>">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $c_fundiving; ?>">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $c_trial_diving; ?>">ナイトダイビング</a></li>
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
                  <li class="footer-nav__item-child"><a href="<?php echo $p_licence; ?>">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $p_trial_diving;?>">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $p_fundiving; ?>">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-column footer-nav__items-column--end">
              <li class="footer-nav__item"><span><a href="<?php echo $faq; ?>">よくある質問</a></span>
              </li>
              <li class="footer-nav__item"><span><a href="<?php echo $privacypolicy; ?>"><span>プライバシー<br
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
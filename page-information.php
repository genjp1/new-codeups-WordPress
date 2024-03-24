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
$policy = esc_url( home_url( '/policy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?> 

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Information</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-information.jpg" class="sub-m__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-information-sp.jpg" class="sub-m__img-sp" alt="水中でダイバーが崖沿い魚と泳いでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <div class="breadcrumb">
    <div class="inner">
      <div><a href="index.html">TOP</a> > ダイビング情報</div>
    </div>
  </div>

  <!-- page-information -->
  <section class="page-information top-page-information">
    <div class="page-information__inner inner">

      <div class="page-information__tab tab">
        <div class="tab__list tab__list--page-information">
          <button
            class="tab__button tab__button--page-information tab__button--page-information-license js-tab-button is-active">ライセンス<br
              class="u-mobile">講習</button>
          <button
            class="tab__button tab__button--page-information tab__button--page-information-fun js-tab-button">ファン<br
              class="u-mobile">ダイビング</button>
          <button
            class="tab__button tab__button--page-information tab__button--page-information-experience js-tab-button">体験<br
              class="u-mobile">ダイビング</button>
        </div>

        <div class="tab__contents tab__contents--page-information">
          <div class="tab__content js-tab-content is-active">
            <!-- ライセンス講習 -->
            <ul class="tab__cards tab__cards--page-information information-cards">
              <li class="information-cards__card information-card">
                <div class="information-card__content">
                  <div class="information-card__info">
                    <h3 class="information-card__title">ライセンス講習</h3>
                    <hr class="information-card__line">
                    <p class="information-card__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！ス<br
                        class="u-desktop">キューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                    </p>
                  </div>
                  <div class="information-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/page-information1.jpg" alt="5人のダイバーが水面に浮かんでいる様子"
                      class="information-card__img-img">
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- ファンダイビング -->
          <div class="tab__content js-tab-content">
            <ul class="tab__cards tab__cards--page-information information-cards">
              <li class="information-cards__card information-card">
                <div class="information-card__content">
                  <div class="information-card__info">
                    <h3 class="information-card__title">ファンダイビング</h3>
                    <hr class="information-card__line">
                    <p class="information-card__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                    </p>
                  </div>
                  <div class="information-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/page-information2.jpg" alt="水中で多くの魚が泳いている様子"
                      class="information-card__img-img">
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- 体験ダイビング -->
          <div class="tab__content js-tab-content">
            <ul class="tab__cards tab__cards--page-information information-cards">
              <li class="information-cards__card information-card">
                <div class="information-card__content">
                  <div class="information-card__info">
                    <h3 class="information-card__title">体験ダイビング</h3>
                    <hr class="information-card__line">
                    <p class="information-card__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                    </p>
                  </div>
                  <div class="information-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/page-information3.jpg" alt="水中で2匹の魚が寄り添って泳いでいる様子"
                      class="information-card__img-img">
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- contact -->
  <section id="contact" class="contact top-contact top-page-information-contact">
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
            <a href="<?php echo $contact; ?>" class="btn"><span>Contact us</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
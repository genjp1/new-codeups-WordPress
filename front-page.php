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


  <!-- ローディングアニメーション -->
  <!-- <div class="loading js-loading">
    <div class="loading__inner">
      <div class="loading__img-wrap">
        <div class="loading__img js-loading-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/loading-left.jpg" class="mv">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/loading-left-sp.jpg" class="mv" alt="水中のウミガメの様子">
          </picture>
        </div>
        <div class="loading__img js-loading-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/loading-right.jpg" class="mv">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/loading-right-sp.jpg" class="mv" alt="水中のウミガメの様子">
          </picture>
        </div>
      </div>
      <div class="loading__title-wrap js-loading-title">
        <p class="loading__title">diving</p>
        <p class="loading__subtitle">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
  </div> -->

 <!-- mv -->
 <!-- <section class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__main-title">DIVING</h2>
        <p class="mv__sub-title">into the ocean</p>
      </div>
      <div class="mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="mv__swiper-img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv1.jpg" class="mv">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv1-sp.jpg" class="mv" alt="水中のウミガメの様子">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="mv__swiper-img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv2.jpg" class="mv">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv2-sp.jpg" class="mv" alt="水中にウミガメと2人のダイバーいる様子">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="mv__swiper-img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv3.jpg" class="mv">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv3-sp.jpg" class="mv" alt="ボートと海の様子">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


 <section class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__main-title">DIVING</h2>
        <p class="mv__sub-title">into the ocean</p>
      </div>
      <div class="mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">

          <?php
          $mvPC = get_field('mvPC', 244); // PCの画像配列
          $mvSP = get_field('mvSP', 244); // SPの画像491配列
          $i = 1;
          foreach($mvPC as $image):
            // echo ($mvPC['mvPC'.$i].$i);
            if ($mvPC['mvPC'.$i] && $mvSP['mvSP'.$i]) :
          ?>

          <div class="swiper-slide">
            <div class="mv__swiper-img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($mvPC['mvPC'.$i]); ?>" class="mv">
                <img src="<?php echo esc_url($mvSP['mvSP'.$i]); ?>" class="mv" alt="水中のウミガメの様子">
              </picture>
            </div>
          </div>
        
          <?php endif; $i += 1; endforeach; ?>
        </div>
      </div>
    </div>
  </section>

    <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
    <?php
    $args = array( 
      //カスタム投稿のスラッグ名を記述
      'post_type' => 'campaign',
      //表示する記事の件数を指定
      'posts_per_page' => 4,
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- campaign -->
  <section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__content">

        <div class="campaign-swiper__button-wrap">
          <div class="swiper-button-prev js-campaign-arrow"></div>
          <div class="swiper-button-next js-campaign-arrow"></div>
        </div>
        <div class="campaign__title title">
          <p class="title__main">Campaign</p>
          <h2 class="title__sub">キャンペーン</h2>
        </div>
        <div class="campaign__swiper campaign-swiper">
          <div class="swiper js-campaign-swiper">
            <ul class="swiper-wrapper">

            <!-- ループ処理開始の場所に持っていく -->
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <li class="campaign-swiper__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__item">
                    <div class="campaign-card__img">
                    <?php if (has_post_thumbnail()): ?>
                        <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="">
                    <?php endif; ?>
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__head">

                        <!-- タクソノミー取得 -->
                        <?php $terms = get_the_terms( get_the_ID(), 'campaign_category' ); ?>
                        <p class="campaign-card__tag campaign-card__tag--page-campaign">
                          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                              $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                              echo $term->name;}?>
                          </p>
                        <!-- タイトル取得 -->
                        <h3 class="campaign-card__title"><?php the_title();?></h3>
                      </div>

                      <!-- ACF変数化 -->
                      <?php 
                       $campaignPrice = get_field('campaign_price');
                       $campaignDetail= get_field('campaign_detail');
                       $campaignPeriod = $campaignDetail['campaign-period'];
                      ?>

                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line">
                        <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__price">
                          <p class="campaign-card__price-before">¥56,000</p>
                          <p class="campaign-card__price-discount">¥46,000</p>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </li>
              <!-- ループ終了の場所に持っていく -->
              <?php endwhile; wp_reset_postdata(); ?>
            
              </ul>
              <?php else : ?>
                  <p>記事が投稿されていません</p>
              <?php endif; ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="campaign__btn">
          <a href="<?php echo $campaign; ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- aboutUs -->
  <section id="about" class="about top-about">
    <div class="about__inner inner">
      <div class="about__title title">
        <p class="title__main">About us</p>
        <h2 class="title__sub">私たちについて</h2>
      </div>
      <div class="about__img-wrap">
        <div class="about__img-small">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us1.jpg" alt="水中にいるダイバーの様子">
        </div>
        <div class="about__img-big">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us2.jpg" alt="水中にいるダイバーの様子">
        </div>
      </div>
      <div class="about__content-wrap">
        <h3 class="about__title">Dive into<br>the Ocean</h3>
        <div class="about__text-wrap">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__button">
            <a href="<?php echo $about; ?>" class="btn"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section id="information" class="information top-information">
    <div class="information__inner inner">
      <div class="information__title title">
        <p class="title__main">Information</p>
        <h2 class="title__sub">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__img colorbox">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information.jpg" class="information__img-img" alt="複数の魚が水中でサンゴの近くを泳いでいる様子">
        </div>
        <div class="information__course">
          <h3 class="information__course-title">ライセンス講習</h3>
          <hr class="information__line">
          <p class="information__course-text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__btn">
            <a href="<?php echo $information; ?>" class="btn"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section id="blog" class="blog blog-bg top-blog">
    <div class="blog__inner inner">
      <div class="blog__title title">
        <p class="title__main title__main--white">Blog</p>
        <h2 class="title__sub title__sub--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <a href="#" class="blog-cards__card card">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog1.jpg" alt="水中のイソギンチャクの様子" class="card__img">
          <div class="card__body">
            <time class="card__date" datetime="2023-11-17">2023.11/17</time>
            <h3 class="card__title">ライセンス取得</h3>
            <hr class="card__line">
            <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
        <a href="#" class="blog-cards__card card">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog2.jpg" alt="水中でウミガメが泳いでいる様子" class="card__img">
          <div class="card__body">
            <time class="card__date" datetime="2023-11-17">2023.11/17</time>
            <h3 class="card__title">ウミガメと泳ぐ</h3>
            <hr class="card__line">
            <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
        <a href="#" class="blog-cards__card card">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog3.jpg" alt="水中のカクレクマノミがイソギンチャクの中にいる様子" class="card__img">
          <div class="card__body">
            <time class="card__date" datetime="2023-11-17">2023.11/17</time>
            <h3 class="card__title">カクレクマノミ</h3>
            <hr class="card__line">
            <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
      </div>
      <div class="blog__btn">
        <a href="<?php echo $blog; ?>" class="btn"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section id="voice" class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__title title">
        <p class="title__main">Voice</p>
        <h2 class="title__sub">お客様の声</h2>
      </div>
      <ul class="voice__voice-cards voice-cards">
        <li class="voice-cards__card voice-card">
          <div class="voice-card__content">
            <div class="voice-card__info">
              <div class="voice-card__meta">
                <p class="voice-card__age">20代(女性)</p>
                <p class="voice-card__tag">ライセンス講習</p>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              <hr class="voice-card__line">
            </div>
            <div class="voice-card__img colorbox">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice1.jpg" alt="麦わら帽子を被った女性の様子" class="voice-card__img-img">
            </div>
          </div>
          <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </li>
        <li class="voice-cards__card voice-card">
          <div class="voice-card__content">
            <div class="voice-card__info">
              <div class="voice-card__meta">
                <p class="voice-card__age">20代(男性)</p>
                <p class="voice-card__tag">ファンダイビング</p>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              <hr class="voice-card__line">
            </div>
            <div class="voice-card__img colorbox">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice2.jpg" alt="男性がグッドサインをしている様子" class="voice-card__img-img">
            </div>
          </div>
          <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </li>
      </ul>
      <div class="voice__btn">
        <a href="<?php echo $voice; ?>" class="btn"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section id="price" class="price top-price">
    <div class="price__inner inner">
      <div class="price__title title">
        <p class="title__main">Price</p>
        <h2 class="title__sub">料金一覧</h2>
      </div>
      <div class="price__imgTop">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price1.jpg" alt="水中のウミガメの様子">
      </div>

      <div class="price__content">
        <div class="price__items">
          <h3 class="price__title">ライセンス講習</h3>
          <hr class="price__line">
          <dl class="price__item">
            <div class="price__course">
              <dt class="price__name">オープンウォーターダイバーコース</dt>
              <dd class="price__cost">¥50,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">アドバンスドオープンウォーターコース</dt>
              <dd class="price__cost">¥60,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">レスキュー＋EFRコース</dt>
              <dd class="price__cost">¥70,000</dd>
            </div>
          </dl>

          <h3 class="price__title">体験ダイビング</h3>
          <hr class="price__line">
          <dl class="price__item">
            <div class="price__course">
              <dt class="price__name">ビーチ体験ダイビング(半日)</dt>
              <dd class="price__cost">¥7,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">ビーチ体験ダイビング(1日)</dt>
              <dd class="price__cost">¥14,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">ボート体験ダイビング(半日)</dt>
              <dd class="price__cost">¥10,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">ボート体験ダイビング(1日)</dt>
              <dd class="price__cost">¥18,000</dd>
            </div>
          </dl>

          <h3 class="price__title">ファンダイビング</h3>
          <hr class="price__line">
          <dl class="price__item">
            <div class="price__course">
              <dt class="price__name">ビーチダイビング(2ダイブ)</dt>
              <dd class="price__cost">¥14,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">ボートダイビング(2ダイブ)</dt>
              <dd class="price__cost">¥18,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">スペシャルダイビング(2ダイブ)</dt>
              <dd class="price__cost">¥24,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">ナイトダイビング(1ダイブ)</dt>
              <dd class="price__cost">¥10,000</dd>
            </div>
          </dl>

          <h3 class="price__title">スペシャルダイビング</h3>
          <hr class="price__line">
          <dl class="price__item">
            <div class="price__course">
              <dt class="price__name">貸切ダイビング(2ダイブ)</dt>
              <dd class="price__cost">¥24,000</dd>
            </div>
            <div class="price__course">
              <dt class="price__name">1日ダイビング(3ダイブ)</dt>
              <dd class="price__cost">¥32,000</dd>
            </div>
          </dl>
        </div> <!-- price__items -->
        <div class="price__imageCenter colorbox">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price2.jpg" class="price__imageCenter-img" alt="水中のサンゴと複数の小魚の様子">
        </div>
      </div><!-- price__content -->
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn"><span>View more</span></a>
      </div>
    </div> <!-- price__head inner -->
  </section>

<?php get_footer(); ?>
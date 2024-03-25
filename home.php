<?php get_header(); ?>

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Blog</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-blog.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-blog-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php get_template_part('breadcrumb'); ?>

  <!-- page-blog -->
  <section class="page-blog top-page-blog">
    <div class="page-blog__inner inner">

      <div class="page-blog__content">
        <div class="page-blog__cards blog-cards blog-cards--page-blog">

          <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>

          <a href="page-blogDetail.html" class="blog-cards__card card">
            <?php if (has_post_thumbnail()): ?>
                <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                <div class="card__img">
                  <?php the_post_thumbnail(); ?>
                </div>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="card__img">
            <?php endif; ?>

            <div class="card__body card__body--page-blog">
              <time class="card__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m/d')?></time>
              <h3 class="card__title"><?php the_title();?></h3>
              <hr class="card__line card__line--page-blog">
              <p class="card__text"><?php the_content();?></p>
            </div>
          </a>

          <?php endwhile; endif; ?>

        </div>


        <div class="page-blog__pagenavi pagenavi top-pagenavi top-pagenavi--page-blog">
          <div class="pagenavi__inner">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <div class='wp-pagenavi' role='navigation'>
              <a class="previouspostslink" rel="prev" href="#"></a>
              <span class='current'>1</span>
              <a class="page larger" href="#">2</a>
              <a class="page larger" href="#">3</a>
              <a class="page larger" href="#">4</a>
              <a class="page larger u-pc" href="#">5</a>
              <a class="page larger u-pc" href="#">6</a>
              <a class="nextpostslink" rel="next" href="#"></a>
            </div>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>

      </div>

      <!-- page-blog__sidebar -->
      <div class="page-blog__sidebar sidebar">
        <div class="sidebar__inner">
          <div class="sidebar__popular">
            <h2 class="sidebar__title">人気記事</h2>
            <div class="sidebar__cards popular-cards">
              <a href="page-blogDetail.html" class="popular-cards__card popular-card">
                <div class="popular-card__content">
                  <div class="popular-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog4.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
                  </div>
                  <div class="popular-card__info">
                    <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
                    <p class="popular-card__title">ライセンス取得</p>
                  </div>
                </div>
              </a>
              <a href="page-blogDetail.html" class="sidebar-cards__card popular-card">
                <div class="popular-card__content">
                  <div class="popular-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog2.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
                  </div>
                  <div class="popular-card__info">
                    <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
                    <p class="popular-card__title">ウミガメと泳ぐ</p>
                  </div>
                </div>
              </a>
              <a href="page-blogDetail.html" class="sidebar-cards__card popular-card">
                <div class="popular-card__content">
                  <div class="popular-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog3.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
                  </div>
                  <div class="popular-card__info">
                    <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
                    <p class="popular-card__title">カクレクマノミ</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="sidebar__review">
            <h2 class="sidebar__title">口コミ</h2>
            <ul class="sidebar__cards review-cards">
              <li class="review-cards__card review-card">
                <div class="review-card__content">
                  <div class="review-card__img colorbox">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog7.jpg" alt="カップルが笑顔で寄り添ってソファに座っている様子"
                      class="review-card__img-img">
                  </div>
                  <div class="review-card__info">
                    <p class="review-card__age">30代(カップル)</p>
                    <p class="review-card__title">ここにタイトルが入ります。ここにタイトル</p>
                  </div>
                </div>
              </li>
            </ul>
            <div class="sidebar__review-cardBtn">
              <a href="page-voice.html" class="btn"><span>View more</span></a>
            </div>
          </div>
          <div class="sidebar__campaign">
            <h2 class="sidebar__title">キャンペーン</h2>
            <ul class="sidebar__cards campaign-page-blogCards">
              <li class="campaign-page-blogCards__card">
                <div class="campaign-card">
                  <div class="campaign-card__item">
                    <div class="campaign-card__img campaign-card__img--page-blog">
                      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="水中に複数の魚がいる様子">
                    </div>
                    <div class="campaign-card__body campaign-card__body--page-blog">
                      <div class="campaign-card__head">
                        <p class="campaign-card__title campaign-card__title--blog">ライセンス取得</p>
                      </div>
                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line card__line--page-blog">
                        <p class="campaign-card__text campaign-card__text--page-blog">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__price campaign-card__price--page-blog">
                          <p class="campaign-card__price-before campaign-card__price-before--page-blog ">¥56,000</p>
                          <p class="campaign-card__price-discount campaign-card__price-discoun--page-blog">¥46,000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="sidebar-cards__card">
                <div class="campaign-card">
                  <div class="campaign-card__item">
                    <div class="campaign-card__img campaign-card__img--page-blog">
                      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign2.jpg" alt="水面にボートが浮かんでいる様子">
                    </div>
                    <div class="campaign-card__body campaign-card__body--page-blog">
                      <div class="campaign-card__head">
                        <p class="campaign-card__title campaign-card__title--blog">貸切体験ダイビング</p>
                      </div>
                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line card__line--page-blog">
                        <p class="campaign-card__text campaign-card__text--page-blog">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__price campaign-card__price--page-blog">
                          <p class="campaign-card__price-before campaign-card__price-before--page-blog ">¥24,000</p>
                          <p class="campaign-card__price-discount campaign-card__price-discoun--page-blog">¥18,000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="sidebar__campaign-cardBtn">
              <a href="page-campaign.html" class="btn"><span>View more</span></a>
            </div>
          </div>
          <div class="sidebar__archive">
            <h2 class="sidebar__title">アーカイブ</h2>

            <div class="sidebar__container toggl">
              <div class="toggl__container">

                <details open="open">
                  <summary><span class="toggl__age">2023</span></summary>
                  <div class="folder">
                    <details>
                      <summary><span class="toggl__month">3月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                    <details>
                      <summary><span class="toggl__month">2月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                    <details>
                      <summary><span class="toggl__month">1月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                  </div>
                </details>
                <details>
                  <summary><span class="toggl__age">2022</span></summary>
                  <div class="folder">
                    <details>
                      <summary><span class="toggl__month">3月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                    <details>
                      <summary><span class="toggl__month">2月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                    <details>
                      <summary><span class="toggl__month">1月</span></summary>
                      <div class="folder">
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ライセンス取得</p>
                        </a>
                        <a href="page-blogDetail.html">
                          <p>2023.11/17 ウミガメと泳ぐ</p>
                        </a>
                      </div>
                    </details>
                  </div>
                </details>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

  </section>


  <!-- contact -->
  <section id="contact" class="contact top-contact top-page-blog-contact">
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

<?php get_footer(); ?>
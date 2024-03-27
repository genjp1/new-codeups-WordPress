<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$service = esc_url( home_url( '/service/' ) );
$works = esc_url( home_url( '/works/' ) );
$company = esc_url( home_url( '/company/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Campaign</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" 
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-campaign.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-campaign-sp.jpg" class="sub-m__img-sp" 
          alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

<!-- パンくず あとでプラグイン化する。-->
<?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-campaign -->
  <section class="page-campaign top-page-campaign">
    <div class="page-campaign__inner inner">


      <div class="page-campaign__tab tab">
        <div class="tab__list">
          <button class="tab__button  is-active">ALL</button>
          <button class="tab__button ">ライセンス講習</button>
          <button class="tab__button ">ファンダイビング</button>
          <button class="tab__button ">体験ダイビング</button>
        </div>


        <div class="tab__contents tab__contents--page-campaign">
          <div class="tab__content js-tab-content is-active">
            <!-- ALL -->
            <ul class="tab__cards campaign-cards">

<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>


              <li class="campaign-cards__card">
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
                    <div class="campaign-card__body campaign-card__body--page-campaign">
                      <div class="campaign-card__head">

                        <!-- タクソノミー取得 -->
                        <?php $terms = get_the_terms( get_the_ID(), 'campaign_category' ); ?>
                        <p class="campaign-card__tag campaign-card__tag--page-campaign">
                          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                              $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                              echo $term->name;}?>
                          </p>

                          <!-- タイトル取得 -->
                        <h3 class="campaign-card__title campaign-card__title--page-campaign"><?php the_title();?></h3>
                      </div>


                      <!-- ACF変数化 -->
                      <?php 
                       $campaignPrice = get_field('campaign_price');
                       $campaignDetail= get_field('campaign_detail');
                       $campaignPeriod = $campaignDetail['campaign-period'];
                      ?>


                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line campaign-card__line--page-campaign">

                        <?php if( !empty($campaignPrice['text']) ): ?>
                          <p class="campaign-card__text campaign-card__text--page-campaign"><?php echo esc_html($campaignPrice['text']); ?></p>
                        <?php endif; ?>

                        <div class="campaign-card__price campaign-card__price--page-campaign">
                          <?php if( !empty($campaignPrice['list-price']) ): ?>
                            <p class="campaign-card__price-before campaign-card__price-before--page-campaign">&yen;<?php echo number_format($campaignPrice['list-price']); ?></p>
                          <?php endif; ?>

                          <?php if( !empty($campaignPrice['discount-price']) ): ?>
                            <p class="campaign-card__price-discount campaign-card__price-discount--page-campaign">&yen;<?php echo number_format($campaignPrice['discount-price']); ?></p>
                          <?php endif; ?>

                        </div>
                      </div>

                      <?php if( !empty($campaignDetail['campaign-main-text']) ): ?>
                      <p class="campaign-card__description u-desktop">
                        <?php echo esc_html($campaignDetail['campaign-main-text']); ?>
                      </p>
                      <?php endif; ?>

                      <?php if( !empty($campaignPeriod['campaign-period-start']) ): ?>
                      <p class="campaign-card__schedule u-desktop"><?php echo $campaignPeriod['campaign-period-start']; ?>&thinsp;-&thinsp;<?php echo $campaignPeriod['campaign-period-done']; ?></p>
                      <?php endif; ?>

                      <?php if( !empty($campaignDetail['campaign-sub-text']) ): ?>
                      <p class="campaign-card__reserve u-desktop"><?php echo esc_html($campaignDetail['campaign-sub-text']); ?></p>
                      <?php endif; ?>

                      <div class="campaign-card__button u-desktop">
                        <a href="<?php echo $contact; ?>" class="btn"><span>Contact us</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              

<?php endwhile; endif; ?>
            </ul>
          </div>
          
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="pagenavi top-pagenavi top-pagenavi--page-campaign">
    <div class="pagenavi__inner inner">
      <!-- WP-PageNaviで出力される部分 ここから -->
        <?php wp_pagenavi(); ?>
      <!-- WP-PageNaviで出力される部分 ここまで -->
    </div>
  </div>
<?php get_footer(); ?>
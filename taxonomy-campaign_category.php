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
<?php get_template_part('breadcrumb'); ?>

  <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
  <?php
    // タクソノミーのスラッグを指定
    $campaign_category_slug = get_query_var('campaign_category');
    $args = array(
        // カスタム投稿のスラッグを指定
        "post_type" => "campaign",
        'tax_query' => array(
            array(
                // タクソノミーのスラッグを指定
                'taxonomy' => 'campaign_category',
                'field'    => 'slug',
                'terms'    => $campaign_category_slug,
            ),
        ),
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- page-campaign -->
  <section class="page-campaign top-page-campaign">
    <div class="page-campaign__inner inner">

      <!-- <div class="page-campaign__tab tab">
        <div class="tab__list">
          <button class="tab__button  is-active">ALL</button>
          <button class="tab__button ">ライセンス講習</button>
          <button class="tab__button ">ファンダイビング</button>
          <button class="tab__button ">体験ダイビング</button>
        </div> -->

      <div class="page-campaign__tab tab">
        <div class="tab__list">
            <?php
              // カレントタームIDを取得（taxonomy-campaign_category.php用）
              $current_term_id = get_queried_object()->term_id;
              //ここまで（カレントタームIDを取得）

              $terms = get_terms(array(
                  // 表示するタクソノミースラッグを記述
                  'taxonomy' => 'campaign_category',
                  'orderby' => 'ID',
                  'order'   => 'ASC',
                  // 表示するタームの数を指定
                  'number'  => 5
              ));

              // カスタム投稿一覧ページへのURL
              $home_class = (is_post_type_archive()) ? 'is-active' : '';
              $home_link = sprintf(
                  //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                  '<a class="tab__button %s" href="%s" alt="%s">ALL</a>',
                  $home_class,
                  // カスタム投稿一覧ページのスラッグを指定
                  esc_url(home_url('/campaign')),
                  esc_attr(__('View all posts', 'textdomain'))
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

              // タームのリンク
              if ($terms) {
                  foreach ($terms as $term) {
                      // カレントクラスに付与するクラスを指定できる
                      $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                      $term_link = sprintf(
                          // 各タームに付与するクラスを指定できる
                          '<a class="tab__button %s" href="%s" alt="%s">%s</a>',
                          $term_class,
                          esc_url(get_term_link($term->term_id)),
                          esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                          esc_html($term->name)
                      );
                      echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                  }
              }
              ?>
          </div>
        </div>


        <div class="tab__contents tab__contents--page-campaign">
          <div class="tab__content js-tab-content is-active">
            <!-- ALL -->
            <ul class="tab__cards campaign-cards">

            <!-- ループ処理開始の場所に持っていく -->
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

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
            <!-- ループ終了の場所に持っていく -->
            <?php endwhile; wp_reset_postdata(); ?>
          
            </ul>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
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
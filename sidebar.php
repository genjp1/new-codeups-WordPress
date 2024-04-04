
<!-- <?php if( !is_user_logged_in() && !is_bot() ) { set_post_views( get_the_ID() ); } ?> -->

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




<div class="sidebar__inner">
          <div class="sidebar__popular">
            <h2 class="sidebar__title">人気記事</h2>

            <?php
            setPostViews( get_the_ID() ); //記事のアクセス数を取得する関数
            $args = array(
                'post_type' => 'post',// 投稿タイプ（postは通常の投稿）
                'posts_per_page' => 3, //表示数
                'meta_key' => 'post_views_count', //カスタムフィールド名
                'orderby' => 'meta_value_num', //カスタムフィールドの値
                'order' => 'DESC' //降順で表示する
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <div class="sidebar__cards popular-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                  <a href="<?php the_permalink(); ?>" class="popular-cards__card popular-card">
                    <div class="popular-card__content">
                      <div class="popular-card__img colorbox">

                      <?php if (has_post_thumbnail()): ?>
                        <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                      <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="review-card__img-img">
                      <?php endif; ?>

                      </div>
                      <div class="popular-card__info">
                        <time class="popular-card__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
                        <p class="popular-card__title"><?php the_title();?></p>
                      </div>
                    </div>
                    <!-- 記事のアクセス数を表示する関数 -->
                    <?php echo getPostViews( get_the_ID() ); ?>
                  </a>
                  <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </div>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
          </div>

          <div class="sidebar__review">
            <h2 class="sidebar__title">口コミ</h2>

            <?php
            $args = array(
                "post_type" => "voice",
                "posts_per_page" => 1,
                "orderby" => "date",
                "order" => "DESC",
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
              <ul class="sidebar__cards review-cards">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

              <li class="review-cards__card review-card">
                <a href="<?php the_permalink(); ?>" class="review-card__content">
                  <div class="review-card__img colorbox">
                    <?php if (has_post_thumbnail()): ?>
                        <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="review-card__img-img">
                    <?php endif; ?>
                  </div>
                  <div class="review-card__info">
                    <p class="review-card__age">

                    <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                        if ( ! empty( $taxonomy_terms ) ) {
                            foreach( $taxonomy_terms as $taxonomy_term ) {
                                echo '<span class="news__category">' . esc_html( $taxonomy_term->name ) . '</span>';
                            }
                        }
                    ?>

                    </p>
                    <p class="review-card__title"><?php the_title(); ?></p>
                  </div>
                </a>
              </li>

              <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="sidebar__review-cardBtn">
              <a href="<?php echo $voice; ?>" class="btn"><span>View more</span></a>
            </div>
          </div>



          <div class="sidebar__campaign">
            <h2 class="sidebar__title">キャンペーン</h2>

            <!--例：タイトルの下に配置する -->
 	          <?php
            $args = array(
                "post_type" => "campaign",
                "posts_per_page" => 2,
                "orderby" => "date",
                "order" => "DESC",
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
              <ul class="sidebar__cards campaign-page-blogCards">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="campaign-page-blogCards__card">
                <a href="<?php the_permalink(); ?>" class="campaign-card">
                  <div class="campaign-card__item">
                    <div class="campaign-card__img campaign-card__img--page-blog">

                    <?php if (has_post_thumbnail()): ?>
                        <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="review-card__img-img">
                    <?php endif; ?>

                    </div>
                    <div class="campaign-card__body campaign-card__body--page-blog">
                      <div class="campaign-card__head">

                        <!-- タクソノミー取得 -->
                        <?php $terms = get_the_terms( get_the_ID(), 'campaign_category' ); ?>
                        <p class="campaign-card__tag campaign-card__tag--page-campaign">
                          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                              $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                              echo $term->name;}?>
                          </p>
                        <!-- タイトル取得 -->
                        <p class="campaign-card__title campaign-card__title--blog"><?php the_title(); ?></p>
                      </div>

                      <!-- ACF変数化 -->
                      <?php 
                       $campaignPrice = get_field('campaign_price');
                       $campaignDetail= get_field('campaign_detail');
                       $campaignPeriod = $campaignDetail['campaign-period'];
                      ?>

                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line card__line--page-blog">

                        <?php if( !empty($campaignPrice['text']) ): ?>
                        <p class="campaign-card__text campaign-card__text--page-blog"><?php echo esc_html($campaignPrice['text']); ?></p>
                        <?php endif; ?>

                        <div class="campaign-card__price campaign-card__price--page-blog">
                          <?php if( !empty($campaignPrice['list-price']) ): ?>
                            <p class="campaign-card__price-before campaign-card__price-before--page-blog ">&yen;<?php echo number_format($campaignPrice['list-price']); ?></p>
                          <?php endif; ?>

                          <?php if( !empty($campaignPrice['discount-price']) ): ?>
                            <p class="campaign-card__price-discount campaign-card__price-discoun--page-blog">&yen;<?php echo number_format($campaignPrice['discount-price']); ?></p>
                          <?php endif; ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>

              <!-- ループ終了の場所に持っていく -->
              <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </ul>
              <?php else : ?>
                  <p>記事が投稿されていません</p>
              <?php endif; ?>

            <div class="sidebar__campaign-cardBtn">
              <a href="<?php echo $campaign; ?>" class="btn"><span>View more</span></a>
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
                <ul>
	<?php wp_get_archives(); ?>
</ul>
              </div>

            </div>
          </div>
        </div>
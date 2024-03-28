<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Voice</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-voice.jpg" class="sub-m__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-voice-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-voice -->
  <section class="page-voice top-page-voice">
    <div class="page-voice__inner inner">

      <div class="page-voice__tab tab">
        <div class="tab__list">
          <button class="tab__button is-active">ALL</button>
          <button class="tab__button">ライセンス講習</button>
          <button class="tab__button">ファンダイビング</button>
          <button class="tab__button">体験ダイビング</button>
        </div>


        <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
        <?php
          $args = array( 
            //カスタム投稿のスラッグ名を記述
            'post_type' => 'voice',
            //表示する記事の件数を指定
            'posts_per_page' => 6,
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>


        <div class="tab__contents tab__contents--page-voice">
          <div class="tab__content js-tab-content is-active">
            <!-- ALL -->
            <ul class="tab__cards voice-cards">

        <!-- ループ処理開始の場所に持っていく -->
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>


              <li class="voice-cards__card voice-card">
                <div class="voice-card__content">
                  <div class="voice-card__info">
                    <div class="voice-card__meta">

                    <!-- ACF条件分岐 -->
                    <?php if (get_field('age')) : ?>
                      <p class="voice-card__age"><?php the_field('age'); ?></p>
                    <?php endif; ?>

                    <!-- タクソノミー取得 -->
                    <?php $terms = get_the_terms( get_the_ID(), 'voice_category' ); ?>
                    <p class="voice-card__tag">
                    <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                    echo $term->name;}?>
                    </p>

                    </div>
                    <h3 class="voice-card__title"><?php the_title();?></h3>
                    <hr class="voice-card__line">
                  </div>
                  <div class="voice-card__img colorbox">

                  <?php if (has_post_thumbnail()): ?>
                  <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                  <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="">
                  <?php endif; ?>

                  </div>
                </div>
                <p class="voice-card__text"><?php the_content();?></p>
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

  <div class="page-voice__pagenavi pagenavi top-pagenavi">
    <div class="pagenavi__inner inner">
      <!-- WP-PageNaviで出力される部分 ここから -->
        <?php wp_pagenavi(); ?>
      <!-- WP-PageNaviで出力される部分 ここまで -->
    </div>
  </div>

<?php get_footer(); ?>
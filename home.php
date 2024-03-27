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

          <a href="<?php the_permalink(); ?>" class="blog-cards__card card">
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
              <p class="card__text"><?php the_excerpt();?></p>
            </div>
          </a>

          <?php endwhile; endif; ?>

        </div>


        <div class="page-blog__pagenavi pagenavi top-pagenavi top-pagenavi--page-blog">
          <div class="pagenavi__inner">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <?php wp_pagenavi(); ?>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>

      </div>

      <!-- page-blog__sidebar -->
      <aside class="page-blog__sidebar sidebar">
        <?php get_sidebar(); ?>
      </aside>

    </div>

  </section>

<?php get_footer(); ?>
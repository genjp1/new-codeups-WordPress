<?php get_header(); ?>

<!-- sub-mv -->
<section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Price</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-price.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-price-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php get_template_part('breadcrumb'); ?>

  <!-- page-price -->
  <div class="page-price top-page-price">
    <div class="page-price__inner inner">

      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">ライセンス講習</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="3" class="price-list__titlePc u-desktopTable-cell">ライセンス講習</td>
              <td class="price-list__data ">オープンウォーター<br class="u-mobile">ダイバーコース</td>
              <td class="price-list__cost">¥50,000</td>
            </tr>
            <tr>
              <td class="price-list__data">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
              <td class="price-list__cost">¥60,000</td>
            </tr>
            <tr>
              <td class="price-list__data">レスキュー＋EFRコース</td>
              <td class="price-list__cost">¥70,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">体験ダイビング</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="4" class="price-list__titlePc price-list__titlePc--4row u-desktopTable-cell">体験ダイビング</td>
              <td class="price-list__data">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
              <td class="price-list__cost">¥7,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
              <td class="price-list__cost">¥14,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ボート体験ダイビング<br class="u-mobile">(半日)</td>
              <td class="price-list__cost">¥10,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ボート体験ダイビング<br class="u-mobile">(1日)</td>
              <td class="price-list__cost">¥18,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp price-list__titleSp--medium">ファンダイビング</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="4" class="price-list__titlePc price-list__titlePc--4row u-desktopTable-cell">ファンダイビング</td>
              <td class="price-list__data">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
              <td class="price-list__cost">¥14,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
              <td class="price-list__cost">¥18,000</td>
            </tr>
            <tr>
              <td class="price-list__data">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
              <td class="price-list__cost">¥24,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
              <td class="price-list__cost">¥10,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp price-list__titleSp--long">スペシャルダイビング</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="3" class="price-list__titlePc u-desktopTable-cell">スペシャルダイビング</td>
              <td class="price-list__data">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
              <td class="price-list__cost">¥24,000</td>
            </tr>
            <tr>
              <td class="price-list__data">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
              <td class="price-list__cost">¥32,000</td>
            </tr>
            <tr>
              <td class="price-list__data">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
              <td class="price-list__cost">¥14,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
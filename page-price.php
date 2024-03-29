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
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-price -->
  <div class="page-price top-page-price">
    <div class="page-price__inner inner">

    <!-- ライセンス講習 -->
      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">ライセンス講習</th>
              <!-- <th class="price-list__data u-desktopTable-cell">詳細</th>
              <th class="price-list__cost u-desktopTable-cell">料金</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $license_fields = SCF::get_option_meta('price_options', 'license_lists');
            $first = true; // 最初の行で「ライセンス講習」を表示するためのフラグ
            foreach ($license_fields as $license_field_name => $license_value) {
              $license_content = esc_html($license_value['license_content']);
              $license_subContent = esc_html($license_value['license_subContent']);
              $license_price = esc_html($license_value['license_price']);
              if ($license_content && $license_subContent && $license_price) {
                if ($first) {
                  // 最初の行に「ライセンス講習」を表示し、3行分の高さを持たせる
                  echo '<tr><td rowspan="3" class="price-list__titlePc u-desktopTable-cell">ライセンス講習</td>';
                  $first = false;
                } else {
                  // 最初の行以外では、ライセンス講習のセルを挿入しない
                  echo '<tr>';
                }
            ?>
                  <td class="price-list__data"><?php echo $license_content; ?><br class="u-mobile"><?php echo $license_subContent; ?></td>
                  <td class="price-list__cost">&yen;<?php echo number_format($license_price); ?></td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
       <!-- end of ライセンス講習 -->

      <!-- 体験ダイビング -->
      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">体験ダイビング</th>
              <!-- <th class="price-list__data u-desktopTable-cell">詳細</th>
              <th class="price-list__cost u-desktopTable-cell">料金</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $experience_fields = SCF::get_option_meta('price_options', 'experience_lists');
            $first = true; // 最初の行で「体験ダイビング」を表示するためのフラグ
            foreach ($experience_fields as $experience_field) {
              $experience_content = esc_html($experience_field['experience_content']);
              $experience_subContent = esc_html($experience_field['experience_subContent']);
              $experience_price = esc_html($experience_field['experience_price']);
              if ($experience_content && $experience_subContent && $experience_price) {
                if ($first) {
                  // 最初の行に「体験ダイビング」を表示し、3行分の高さを持たせる
                  echo '<tr><td rowspan="4" class="price-list__titlePc u-desktopTable-cell">体験ダイビング</td>';
                  $first = false;
                } else {
                  // 最初の行以外では、体験ダイビングのセルを挿入しない
                  echo '<tr>';
                }
            ?>
                  <td class="price-list__data"><?php echo $experience_content; ?><br class="u-mobile"><?php echo $experience_subContent; ?></td>
                  <td class="price-list__cost">&yen;<?php echo number_format($experience_price); ?></td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- end of 体験ダイビング -->

      <!-- ファンダイビング -->
      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">ファンダイビング</th>
              <!-- <th class="price-list__data u-desktopTable-cell">詳細</th>
              <th class="price-list__cost u-desktopTable-cell">料金</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $fun_fields = SCF::get_option_meta('price_options', 'fun_lists');
            $first = true; // 最初の行で「ファンダイビング」を表示するためのフラグ
            foreach ($fun_fields as $fun_field) {
              $fun_content = esc_html($fun_field['fun_content']);
              $fun_subContent = esc_html($fun_field['fun_subContent']);
              $fun_price = esc_html($fun_field['fun_price']);
              if ($fun_content && $fun_subContent && $fun_price) {
                if ($first) {
                  // 最初の行に「ファンダイビング」を表示し、3行分の高さを持たせる
                  echo '<tr><td rowspan="4" class="price-list__titlePc u-desktopTable-cell">ファンダイビング</td>';
                  $first = false;
                } else {
                  // 最初の行以外では、ファンダイビングのセルを挿入しない
                  echo '<tr>';
                }
            ?>
                  <td class="price-list__data"><?php echo $fun_content; ?><br class="u-mobile"><?php echo $fun_subContent; ?></td>
                  <td class="price-list__cost">&yen;<?php echo number_format($fun_price); ?></td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <!--  end of ファンダイビング -->

      <!-- スペシャルダイビング -->
      <div class="page-price__table">
        <table class="price-list">
          <thead class="price-list__head u-mobile">
            <tr>
              <th colspan="3" class="price-list__titleSp">スペシャルダイビング</th>
              <!-- <th class="price-list__data u-desktopTable-cell">詳細</th>
              <th class="price-list__cost u-desktopTable-cell">料金</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $special_fields = SCF::get_option_meta('price_options', 'special_lists');
            $first = true; // 最初の行で「スペシャルダイビング」を表示するためのフラグ
            foreach ($special_fields as $special_field) {
              $special_content = esc_html($special_field['special_content']);
              $special_subContent = esc_html($special_field['special_subContent']);
              $special_price = esc_html($special_field['special_price']);
              if ($special_content && $special_subContent && $special_price) {
                if ($first) {
                  // 最初の行に「スペシャルダイビング」を表示し、3行分の高さを持たせる
                  echo '<tr><td rowspan="3" class="price-list__titlePc u-desktopTable-cell">スペシャルダイビング</td>';
                  $first = false;
                } else {
                  // 最初の行以外では、スペシャルダイビングのセルを挿入しない
                  echo '<tr>';
                }
            ?>
                  <td class="price-list__data"><?php echo $special_content; ?><br class="u-mobile"><?php echo $special_subContent; ?></td>
                  <td class="price-list__cost">&yen;<?php echo number_format($special_price); ?></td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- end of スペシャルダイビング -->

    </div>
  </div>

<?php get_footer(); ?>
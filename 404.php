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

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

    <!-- page-404 -->
    <section class="page-404 top-page-404">
        <div class="page-404__inner inner">

        <h2 class="page-404__title">404</h2>
        <div class="page-404__textBlock">
            <p class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
        </div>
        <div class="page-404__button">
            <a href="<?php echo $home; ?>" class="btn btn--white"><span>Page TOP</span></a>
        </div>

        </div>
    </section>


<?php get_footer(); ?>
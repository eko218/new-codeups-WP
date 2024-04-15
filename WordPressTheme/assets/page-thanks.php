<?php get_header(); ?>
<?php
    $top = esc_url( home_url( '/' ) );
    $campaign = esc_url( home_url( '/campaign/' ) );
    $about = esc_url( home_url( '/about/' ) );
    $information = esc_url( home_url( '/information/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $voice = esc_url( home_url( '/voice/' ) );
    $price = esc_url( home_url( '/price/' ) );
    $faq = esc_url( home_url( '/faq/' ) );
    $privacy = esc_url( home_url( '/privacy/' ) );
    $termsofservice = esc_url( home_url( '/terms-of-service/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
    $sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<!-- sub-mv -->
<div class="sub-mv">
    <div class="sub-mv__inner">
        <picture class="sub-mv__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/thanks-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/thanks-mv-sp.jpg" alt="浜辺と海と空">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Contact</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- page-thanks -->
<div class="page-thanks sub-page-thanks">
    <div class="page-thanks__inner inner common-fish">
        <div class="page-thanks__container">
            <div class="page-thanks__title">
                お問い合わせ内容を送信完了しました。
            </div>
            <p class="page-thanks__text">
                このたびは、お問い合わせ頂き<br class="u-mobile">
                誠にありがとうございます。<br>
                お送り頂きました内容を確認の上、<br class="u-mobile">
                3営業日以内に折り返しご連絡させて頂きます。<br>
                また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
                自動返信の確認メールをお送りしております。
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
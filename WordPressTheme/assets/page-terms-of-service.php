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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/terms-of-service-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/terms-of-service-mv-sp.jpg" alt="珊瑚礁と沢山の魚たち">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Terms of Service</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<iv id="page-terms-of-service" class="page-terms-of-service sub-page-terms-of-service">
    <div class="page-terms-of-service__inner inner common-fish">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="page-terms-of-service__container">
            <h2 class="page-terms-of-service__title">
                <?php the_title(); ?>
            </h2>
            <div class="page-terms-of-service__text">
                <p>以下は、Webサイトで使用する一般的な利用規約の例です。</p>
                <div class="page-terms-of-service__content">
                    <?php the_content(); ?>
                </div>
                <p class="page-terms-of-service__text2">
                    以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div>

        <?php get_footer(); ?>
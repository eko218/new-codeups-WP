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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/privacypolicy-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/privacypolicy-mv-sp.jpg" alt="珊瑚礁と沢山の魚たち">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Privacy Policy</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- page-privacypolicy -->
<div class="page-privacypolicy sub-page-privacypolicy">
    <div class="page-privacypolicy__inner inner common-fish">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="page-privacypolicy__container">
            <h2 class="page-privacypolicy__title"><?php the_title(); ?>
            </h2>
            <div class="page-privacypolicy__text">
                <p>以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
                <div class="page-privacypolicy__content">
                    <?php the_content(); ?>
                </div>
                <p>以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
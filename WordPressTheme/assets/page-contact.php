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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-sp.jpg" alt="浜辺と海と空">
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

<!-- page-contact-form -->
<div class="page-contact-form sub-page-contact-form">
    <div class="page-contact-form__inner inner common-fish">
        <?php echo do_shortcode('[contact-form-7 id="b325061" title="お問い合わせ"]'); ?>
    </div>
</div>
<?php get_footer(); ?>
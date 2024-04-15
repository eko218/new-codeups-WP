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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-mv-sp.jpg" alt="空とシーサーの画像">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">About&nbsp;us</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- page-aboutus -->
<section id="page-aboutus" class="page-aboutus sub-page-aboutus">
    <div class="page-aboutus__inner inner common-fish">
        <div class="page-aboutus__img">
            <picture class="page-aboutus__img-left">
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-left-pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-left-sp.jpg"
                    alt="オレンジ色の屋根に乗っているシーサー">
            </picture>
            <picture class="page-aboutus__img-right">
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-right-pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-right-sp.jpg" alt="海と黄色い熱帯魚2匹">
            </picture>
        </div>
        <div class="page-aboutus__content">
            <div class="page-aboutus__title">
                <h3 class="page-aboutus__title-main">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</h3>
            </div>
            <div class="page-aboutus__text">
                <p class="page-aboutus__text-sub">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- page-aboutus-gallery -->
<section class="page-aboutus-gallery sub-page-aboutus-gallery">
    <div class="page-aboutus-gallery__inner inner">
        <div class="page-aboutus-gallery__title section-header">
            <div class="section-header__engtitle">Gallery</div>
            <h2 class="section-header__jatitle">フォト</h2>
        </div>
        <div class="page-aboutus-gallery__container">
            <ul class="page-aboutus-gallery__img-items">
                <?php
        $repeat_item = SCF::get_option_meta('aboutus_options', 'aboutus');
        foreach ($repeat_item as $field):
        $image_url = wp_get_attachment_image_src($field['gallery'] , 'full');
      ?>

                <li class="page-aboutus-gallery__img-item js-modal">
                    <img src="<?php echo $image_url[0]; ?>" width="<?php echo $image_url[1]; ?>"
                        height="<?php echo $image_url[2]; ?>" alt="" />
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div id="grayDisplay" class="page-aboutus-gallery__modal grayDisplay"></div>
</section>

<?php get_footer(); ?>
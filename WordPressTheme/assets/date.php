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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-sp.jpg" alt="海底を泳いている沢山の白い魚">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Blog</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- two-colums -->
<section id="two-colums" class="single two-colums sub-two-colums">
    <div class="two-colums__inner inner common-fish">
        <div class="two-colums__contents">
            <div class="two-colums__main single-main">
                <div class="single-main__body">
                    <div class="single-main__info">
                        <time class="single-main__date" datetime="2023-11-17">2023.11.17</time>
                        <h3 class="single-main__title">ライセンス取得</h3>
                    </div>
                    <figure class="single-main__img">
                        <img src="./assets/images/common/blog-detail.jpg" alt="珊瑚礁の画像">
                    </figure>
                </div>
                <div class="single-main__bottom">
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                    <figure>
                        <img src="./assets/images/common/blog-detail.jpg" alt="珊瑚礁の画像">
                    </figure>
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                    <ul>
                        <li>リスト1</li>
                        <li>リスト2</li>
                        <li>リスト3</li>
                    </ul>
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
                <!-- pagenavi -->
                <div class="two-colums__wp-pagenavi wp-pagenavi wp-pagenavi--single">
                    <?php wp_pagenavi(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
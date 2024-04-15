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


<div class="page-404 sub-page-404">
    <!-- パンくず -->
    <div class="breadcrumb breadcrumb--404 sub-breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </div>


    <div class="page-404__inner inner">
        <div class="page-404__container">
            <div class="page-404__title">
                404
            </div>
            <p class="page-404__text">
                申し訳ありません。<br>
                お探しのページが見つかりません。
            </p>
            <div class="page-404__btn">
                <a href="#" class="common-btn common-btn--reverse"><span
                        class="common-btn__arrow common-btn__arrow--reverse">Page&nbsp;TOP</span></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
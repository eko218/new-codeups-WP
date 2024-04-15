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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-sp.jpg" alt="珊瑚礁と沢山の魚たち">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">SiteMAP</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- site-map-footer -->
<div class="page-sitemap sub-page-sitemap">
    <div class="page-sitemap__inner inner common-fish">
        <div class="page-sitemap__footer footer footer--sitemap">
            <nav class="footer__nav footer-nav footer-nav--sitemap">
                <div class="footer-nav__body">
                    <div class="footer-nav__left footer-nav__left--sitemap">
                        <div class="footer-nav__container">
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $campaign ?>">キャンペーン</a></li>
                                    <li class="footer-nav__item footer-nav__item--sitemap">
                                        <?php
                                        $terms = get_terms('campaign_category');
                                        foreach ( $terms as $term ) {
                                        echo '<a href="'.get_term_link($term).'">'.esc_html($term->name).'</a>';
                                        }
                                    ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $about ?>">私たちについて</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-nav__container">
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $information ?>">ダイビング情報</a></li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/information?tab=tab01' ) ); ?>">ライセンス講習</a>
                                    </li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/information?tab=tab03' ) ); ?>">体験ダイビング</a>
                                    </li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/information?tab=tab02' ) ); ?>">ファンダイビング</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $blog ?>">ブログ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-nav__right footer-nav__right--sitemap">
                        <div class="footer-nav__container">
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $voice ?>">お客様の声</a></li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $price ?>">料金一覧</a></li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/price?price1' ) ); ?>">ライセンス講習</a>
                                    </li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/price?price2' ) ); ?>">体験ダイビング</a>
                                    </li>
                                    <li class="footer-nav__item"><a
                                            href="<?php echo esc_url( home_url( '/price?price3' ) ); ?>">ファンダイビング</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-nav__container">
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $faq ?>">よくある質問</a></li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $privacy ?>">プライバシー<br
                                                class="footer-nav__item-indent">ポリシー</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $termsofservice ?>">利用規約</a></li>
                                </ul>
                            </div>
                            <div class="footer-nav__wrap">
                                <ul class="footer-nav__items">
                                    <li class="footer-nav__item footer-nav__item--sitemap"><a
                                            href="<?php echo $contact ?>">お問い合わせ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <?php wp_head(); ?>
</head>

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




<body>
    <header class="header js-header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="<?php echo $top ?>" class="header-logo">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/common/header-logo.svg" alt="CodeUps">
                </a>
            </h1>
            <!-- ハンバーガー -->
            <button class="header__drawer hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- ドロワー左側 -->
            <div class="header__sp-nav sp-nav js-drawer-menu">
                <nav class="sp-nav__scroll-container">
                    <div class="sp-nav__body">
                        <div class="sp-nav__left">
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $campaign ?>">キャンペーン</a></li>
                                    <li class="sp-nav__item"><a href="#">ライセンス取得</a></li>
                                    <li class="sp-nav__item"><a href="#">貸切体験ダイビング</a></li>
                                    <li class="sp-nav__item"><a href="#">ナイトダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $about ?>">私たちについて</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $information ?>">ダイビング情報</a></li>
                                    <li class="sp-nav__item"><a href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a>
                                    </li>
                                    <li class="sp-nav__item"><a href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a>
                                    </li>
                                    <li class="sp-nav__item"><a
                                            href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo $blog ?>">ブログ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ドロワー右側 -->
                        <div class="sp-nav__right">
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $voice ?>">お客様の声</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo $price ?>">料金一覧</a>
                                    </li>
                                    <li class="sp-nav__item">
                                        <a href="#">ライセンス講習</a>
                                    </li>
                                    <li class="sp-nav__item"><a href="#">体験ダイビング</a></li>
                                    <li class="sp-nav__item"><a href="#">ファンダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a href="<?php echo $faq ?>">よくある質問</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $privacy ?>">プライバシー<br class="sp-nav__item-indent">ポリシー</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $termsofservice ?>">利用規約</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp-nav__wrap">
                                <ul class="sp-nav__items">
                                    <li class="sp-nav__item sp-nav__item--title"><a
                                            href="<?php echo $contact ?>">お問い合わせ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <nav class="header__pc-nav pc-nav js-pc-nav">
                <ul class="pc-nav__items">
                    <li class="pc-nav__item"><a href="<?php echo $campaign ?>">Campaign<span>キャンペーン</span></a></li>
                    <li class="pc-nav__item"><a href="<?php echo $about ?>">About us<span>私たちについて</span></a></li>
                    <li class="pc-nav__item"><a href="<?php echo $information ?>">Information<span>ダイビング情報</span></a>
                    </li>
                    <li class="pc-nav__item"><a href="<?php echo $blog ?>">Blog<span>ブログ</span></a></li>
                    <li class="pc-nav__item"><a href="<?php echo $voice ?>">Voice<span>お客様の声</span></a></li>
                    <li class="pc-nav__item"><a href="<?php echo $price ?>">Price<span>料金一覧</span></a></li>
                    <li class="pc-nav__item"><a href="<?php echo $faq ?>">
                            FAQ<span>よくある質問</span>
                        </a>
                    </li>
                    <li class="pc-nav__item"><a href="<?php echo $contact ?>">Contact<span>お問い合わせ</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
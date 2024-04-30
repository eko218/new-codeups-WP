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


<!-- mv -->
<div class="mv">
    <div class="mv__inner">
        <div class="mv__wrap">
            <div class="swiper js-mv-swiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <?php
                        // ページIDを取得する必要はありません
                        // PC用の画像を取得
                        $image_pc = get_field('mv_img_pc_' . $i); // フィールド名に $i を追加
                        $image_sp = get_field('mv_img_sp_' . $i); // 同様に SP 用の画像も取得

                        if ($image_pc) :
                            $url_pc = esc_url($image_pc['url']);
                            $alt_pc = esc_attr($image_pc['alt']); // $alt_pc を使用
                        ?>
                    <div class="swiper-slide">
                        <div class="mv__slide-img">
                            <source srcset="<?php echo $url_pc; ?>" media="(min-width:768px)" />
                            <!-- sourceタグでPC用画像を設定 -->
                            <img src="<?php echo $url_sp ? esc_url($image_sp['url']) : $url_pc; ?>"
                                alt="<?php echo $alt_pc; ?>" /> <!-- SP画像があればそれを、なければPC用画像を表示 -->
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mv__header">
    <h2 class="mv__maintitle">DIVING</h2>
    <p class="mv__subtitle">into&nbsp;the&nbsp;ocean</p>
</div>

<!-- campaign -->
<section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
        <div class="campaign__title section-header">
            <div class="section-header__engtitle">Campaign</div>
            <h2 class="section-header__jatitle">キャンペーン</h2>
        </div>
        <div class="campaign__button-wrap">
            <div class="campaign__button-prev js-top-campaign-arrow"></div>
            <div class="campaign__button-next js-top-campaign-arrow"></div>
        </div>
        <div class="campaign__swiper-container">
            <div class="campaign__slider swiper js-campaign-swiper">
                <ul class="swiper-wrapper campaign-cards">
                    <li class="swiper-slide campaign-cards__card">
                        <div class="campaign-card__item">
                            <figure class="campaign-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign1.jpg"
                                    alt="魚が沢山泳いでいる画像">
                            </figure>
                            <div class="campaign-card__body">
                                <p class="campaign-card__category">ライセンス講習</p>
                                <p class="campaign-card__title">ライセンス取得</p>
                                <p class="campaign-card__text">全部コミコミ&lpar;お一人様&rpar;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-sub">&yen;56&comma;000</p>
                                    <p class="campaign-card__price-main">&yen;46&comma;000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide campaign-cards__card">
                        <div class="campaign-card__item">
                            <figure class="campaign-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign2.jpg" alt="船と海の画像">
                            </figure>
                            <div class="campaign-card__body">
                                <p class="campaign-card__category">体験ダイビング</p>
                                <p class="campaign-card__title">貸切体験ダイビング</p>
                                <p class="campaign-card__text">全部コミコミ&lpar;お一人様&rpar;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-sub">&yen;24&comma;000</p>
                                    <p class="campaign-card__price-main">&yen;18&comma;000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide campaign-cards__card">
                        <div class="campaign-card__item">
                            <figure class="campaign-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign3.jpg"
                                    alt="クラゲが泳いでいる画像">
                            </figure>
                            <div class="campaign-card__body">
                                <p class="campaign-card__category">体験ダイビング</p>
                                <p class="campaign-card__title">ナイトダイビング</p>
                                <p class="campaign-card__text">全部コミコミ&lpar;お一人様&rpar;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-sub">&yen;10&comma;000</p>
                                    <p class="campaign-card__price-main">&yen;8&comma;000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide campaign-cards__card">
                        <div class="campaign-card__item">
                            <figure class="campaign-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-sp4.jpg"
                                    alt="男性がダイビングをする様子の画像">
                            </figure>
                            <div class="campaign-card__body">
                                <p class="campaign-card__category">ファンダイビング</p>
                                <p class="campaign-card__title">貸切ファンダイビング</p>
                                <p class="campaign-card__text">全部コミコミ&lpar;お一人様&rpar;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-sub">&yen;20&comma;000</p>
                                    <p class="campaign-card__price-main">&yen;16&comma;000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="campaign__btn">
            <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
        </div>
    </div>
</section>

<!-- aboutus -->
<section id="aboutus" class="aboutus top-aboutus">
    <div class="aboutus__inner inner">
        <div class="aboutus__title section-header">
            <div class="section-header__engtitle">About&nbsp;us</div>
            <h2 class="section-header__jatitle">私たちについて</h2>
        </div>
        <div class="aboutus__img">
            <picture class="aboutus__img-left">
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-left-pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-left-sp.jpg"
                    alt="オレンジ色の屋根に乗っているシーサー">
            </picture>
            <picture class="aboutus__img-right">
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-right-pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/aboutus-right-sp.jpg" alt="海と黄色い熱帯魚2匹">
            </picture>
        </div>
        <div class="aboutus__content">
            <div class="aboutus__title">
                <h3 class="aboutus__title-main">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</h3>
            </div>
            <div class="aboutus__text">
                <p class="aboutus__text-sub">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="aboutus__btn">
                    <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- information -->
<section id="information" class="information top-information">
    <div class="information__inner inner">
        <div class="information__title section-header">
            <div class="section-header__engtitle">Information</div>
            <h2 class="section-header__jatitle">ダイビング情報</h2>
        </div>
        <div class="information__container">
            <div class="information__img js-colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/info-sp.jpg" alt="珊瑚と熱帯魚の画像">
            </div>
            <div class="information__text-body">
                <div class="information__text-block">
                    <h3 class="information__category">ライセンス講習</h3>
                    <p class="information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                        正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                </div>
                <div class="information__btn">
                    <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section id="blog" class="blog top-blog">
    <div class="blog__inner inner">
        <div class="blog__title section-header section-header--blog">
            <div class="section-header__engtitle section-header__engtitle--blog">Blog</div>
            <h2 class="section-header__jatitle section-header__jatitle--blog">ブログ</h2>
        </div>
        <div class="blog__items blog-cards">
            <div class="blog-cards__item blog-card">
                <a href="#" class="blog-card__item">
                    <figure class="blog-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog1.jpg" alt="珊瑚礁の画像">
                    </figure>
                    <div class="blog-card__info">
                        <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                        <h3 class="blog-card__title">ライセンス取得</h3>
                    </div>
                    <div class="blog-card__body">
                        <div class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</div>
                    </div>
                </a>
            </div>
            <div class="blog-cards__item blog-card">
                <a href="#" class="blog-card__item">
                    <figure class="blog-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog2.jpg" alt="ウミガメの画像">
                    </figure>
                    <div class="blog-card__info">
                        <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                        <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                    </div>
                    <div class="blog-card__body">
                        <div class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </div>
                    </div>
                </a>
            </div>
            <div class="blog-cards__item blog-card">
                <a href="#" class="blog-card__item">
                    <figure class="blog-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog3.jpg" alt="カクレクマノミと珊瑚礁の画像">
                    </figure>
                    <div class="blog-card__info">
                        <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                        <h3 class="blog-card__title">カクレクマノミ</h3>
                    </div>
                    <div class="blog-card__body">
                        <div class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="blog__btn">
            <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
        </div>
    </div>
</section>

<!-- voice -->
<section id="voice" class="voice top-voice">
    <div class="voice__inner inner">
        <div class="voice__title section-header">
            <div class="section-header__engtitle">Voice</div>
            <h2 class="section-header__jatitle">お客様の声</h2>
        </div>
        <div class="voice__items voice-cards">
            <div class="voice-cards__item voice-card">
                <a href="#" class="voice-card__item">
                    <div class="voice-card__wrapper">
                        <div class="voice-card__top">
                            <div class="voice-card__content">
                                <div class="voice-card__info">
                                    <p class="voice-card__age">20代&lpar;女性&rpar;</p>
                                    <p class="voice-card__category">ライセンス講習</p>
                                </div>
                                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                            </div>
                            <picture class="voice-card__img js-colorbox">
                                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-pc1.jpg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-sp1.jpg"
                                    alt="麦わら帽子を被った笑顔の女性">
                            </picture>
                        </div>
                        <p class="voice-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </a>
            </div>
            <div class="voice-cards__item voice-card">
                <a href="#" class="voice-card__item">
                    <div class="voice-card__wrapper">
                        <div class="voice-card__top">
                            <div class="voice-card__content">
                                <div class="voice-card__info">
                                    <p class="voice-card__age">20代&lpar;男性&rpar;</p>
                                    <p class="voice-card__category">ファンダイビング</p>
                                </div>
                                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                            </div>
                            <picture class="voice-card__img js-colorbox">
                                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-pc2.jpg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-sp2.jpg"
                                    alt="グッドポーズをしている男性">
                            </picture>
                        </div>
                        <p class="voice-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 <br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            <br>
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="voice__btn">
            <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
        </div>
    </div>
</section>

<!-- price -->
<section id="price" class="price top-price">
    <div class="price__inner inner">
        <div class="price__title section-header">
            <div class="section-header__engtitle">Price</div>
            <h2 class="section-header__jatitle">料金一覧</h2>
        </div>
        <div class="price__body">
            <picture class="price__img js-colorbox">
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/price-sp.jpg" alt="ウミガメの画像" />
            </picture>
            <div class="price__list">
                <div class="price__item price-item">
                    <h3 class="price-item__title">ライセンス講習</h3>
                    <dl class="price-item__text">
                        <div class="price-item__text-box">
                            <dt>オープンウォーターダイバーコース</dt>
                            <dd>¥50,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>アドバンスドオープンウォーターコース</dt>
                            <dd>¥60,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>レスキュー＋EFRコース</dt>
                            <dd>¥70,000</dd>
                        </div>
                    </dl>
                </div>
                <div class="price__item price-item">
                    <h3 class="price-item__title">体験ダイビング</h3>
                    <dl class="price-item__text">
                        <div class="price-item__text-box">
                            <dt>ビーチ体験ダイビング(半日)</dt>
                            <dd>¥7,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>ビーチ体験ダイビング(1日)</dt>
                            <dd>¥14,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>ボート体験ダイビング(半日)</dt>
                            <dd>¥10,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>ボート体験ダイビング(1日)</dt>
                            <dd>¥18,000</dd>
                        </div>
                    </dl>
                </div>
                <div class="price__item price-item">
                    <h3 class="price-item__title">ファンダイビング</h3>
                    <dl class="price-item__text">
                        <div class="price-item__text-box">
                            <dt>ビーチダイビング(2ダイブ)</dt>
                            <dd>¥14,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>ボートダイビング(2ダイブ)</dt>
                            <dd>¥18,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>スペシャルダイビング(2ダイブ)</dt>
                            <dd>¥24,000</dd>
                            <div class="price-item__text-box">
                                <dt>ナイトダイビング(1ダイブ)</dt>
                                <dd>¥10,000</dd>
                            </div>
                    </dl>
                </div>
                <div class="price__item price-item">
                    <h3 class="price-item__title">スペシャルダイビング</h3>
                    <dl class="price-item__text">
                        <div class="price-item__text-box">
                            <dt>貸切ダイビング(2ダイブ)</dt>
                            <dd>¥24,000</dd>
                        </div>
                        <div class="price-item__text-box">
                            <dt>1日ダイビング(3ダイブ)</dt>
                            <dd>¥32,000</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div class="price__btn">
            <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
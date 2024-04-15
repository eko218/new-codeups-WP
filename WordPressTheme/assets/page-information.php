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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/information-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-mv-sp.jpg" alt="海底をダイビングしている様子">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Information</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- page-information -->
<section class="page-information sub-page-information">
    <div class="page-information__inner inner common-fish">
        <div class="page-information__tab tab">
            <ul class="tab__list tab-list">
                <li class="tab-list__item tab-button js-tab-list" date-number="tab01">ライセンス<br class="u-mobile">講習</li>
                <li class="tab-list__item tab-button js-tab-list" date-number="tab02">ファン<br class="u-mobile">ダイビング</li>
                <li class="tab-list__item tab-button js-tab-list" date-number="tab03">体験<br class="u-mobile">ダイビング</li>
            </ul>
            <div class="tab__content tab-content">
                <div id="tab01" class="tab-content__item js-tab-content is-active">
                    <div class="tab-content__box">
                        <div class="tab-content__body">
                            <h3 class="tab-content__title">ライセンス講習</h3>
                            <p class="tab-content__text">
                                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                            </p>
                        </div>
                        <div class="tab-content__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/info-sub1.jpg"
                                alt="5人でダイバーのライセンス講習をしている様子">
                        </div>
                    </div>
                </div>
                <div id="tab02" class="tab-content__item js-tab-content">
                    <div class="tab-content__box">
                        <div class="tab-content__body">
                            <h3 class="tab-content__title">ファンダイビング</h3>
                            <p class="tab-content__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="tab-content__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/info-sub2.jpg" alt="沢山の白い魚と珊瑚礁">
                        </div>
                    </div>
                </div>
                <div id="tab02" class="tab-content__item js-tab-content">
                    <div class="tab-content__box">
                        <div class="tab-content__body">
                            <h3 class="tab-content__title">体験ダイビング</h3>
                            <p class="tab-content__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="tab-content__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/images/common/info-sub3.jpg"
                                alt="海底にいる2匹の黄色い魚">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
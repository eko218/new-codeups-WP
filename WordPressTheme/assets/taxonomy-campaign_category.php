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


<!-- campaign-mv -->
<div class="sub-mv">
    <div class="sub-mv__inner">
        <picture class="sub-mv__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-sp.jpg" alt="海と黄色い熱帯魚2匹">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Campaign</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- タブ -->
<div class="archive-campaign sub-archive-campaign">
    <div class="archive-campaign__inner inner common-fish">
        <div class="archive-campaign__tab category-button">
            <ul class="category-button__list">
                <li class="category-button__list-item is-active"><a href="<?php echo $campaign; ?>">ALL</a></li>
                <?php
                        $terms = get_terms('campaign_category');
                        foreach ($terms as $term):
                            $term_link = get_term_link($term);
                            $term_name = esc_html($term->name);
                            $active_class = (is_tax('campaign_category', $term->slug)) ? 'current' : '';
                        ?>

                <li class="category-button__list-item <?= $active_class ?>">
                    <a href="<?= $term_link ?>"><?= $term_name ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- <div class="archive-campaign__items campaign-cards"> -->
        <ul class="campaign-cards__item campaign-card campaign-card--sub">
            <?php if (have_posts()):
             while (have_posts()):
                the_post(); ?>
            <li class="campaign-card__item">
                <div class="campaign-card__content">
                    <figure class="campaign-card__img campaign-card__img--sub">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    </figure>
                    <div class="campaign-card__body">
                        <?php
                                                $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                                                if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                    $term = array_shift($terms); // 最初のタームを取得
                                                    $cat_name = $term->name; // ターム名を取得
                                                    echo '<p class="campaign-card__category">' . $cat_name . '</p>'; // ターム名を表示
                                                }
                                                ?>
                        <p class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></p>
                        <p class=" campaign-card__text">全部コミコミ&lpar;お一人様&rpar;</p>
                        <div class="campaign-card__price">
                            <p class="campaign-card__price-sub"><?php the_field('campaign_price1'); ?>
                            </p>
                            <p class="campaign-card__price-main">
                                <?php the_field('campaign_price2'); ?>
                            </p>
                        </div>
                        <div class="campaign-card__text-wrap">
                            <p class="campaign-card__sub-text">
                                <?php the_content(); ?>
                            </p>
                            <p class="campaign-card__date"><?php the_field('campaign_period'); ?></p>
                            <p class="campaign-card__sub-text2">ご予約・お問い合わせはコチラ</p>
                            <div class="campaign-card__btn contact-common-btn">
                                <a href="<?php echo $contact ?>" class="common-btn"><span
                                        class="common-btn__arrow">Contact&nbsp;us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endwhile; endif; ?>
        </ul>
        <!-- </div> -->
        <div class="pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
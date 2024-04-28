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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-sp.jpg" alt="海に浮かんでいる5人のダイバー">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Voice</h2>
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
<section class="archive-voice sub-archive-voice">
    <div class="archive-voice__inner inner common-fish">
        <div class="archive-voice__tab category-button">
            <ul class="category-button__list">
                <li class="category-button__list-item is-active"><a href="<?php echo $voice; ?>">ALL</a></li>
                <?php
                        $terms = get_terms('voice_category');
                        foreach ($terms as $term):
                            $term_link = get_term_link($term);
                            $term_name = esc_html($term->name);
                            $active_class = (is_tax('voice_category', $term->slug)) ? 'current' : '';
                        ?>

                <li class="category-button__list-item <?= $active_class ?>">
                    <a href="<?= $term_link ?>"><?= $term_name ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- archive-voice -->
        <div class="archive-voice__items voice-cards">
            <?php if (have_posts()):
             while (have_posts()):
                the_post(); ?>

            <div class="voice-cards__item voice-card">
                <a href="#" class="voice-card__item">
                    <div class="voice-card__wrapper">
                        <div class="voice-card__top">
                            <div class="voice-card__content">
                                <div class="voice-card__info">
                                    <p class="voice-card__age">
                                        <?php the_field('voice_age'); ?><?php the_field('voice_gender'); ?></p>
                                    <?php
                    $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                    if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                        $term = array_shift($terms); // 最初のタームを取得
                        $cat_name = $term->name; // ターム名を取得
                        echo '<p class="voice-card__category">' . $cat_name . '</p>'; // ターム名を表示
                    }
                  ?>
                                </div>
                                <h3 class="voice-card__title"><?php the_title(); ?></h3>
                            </div>
                            <picture class="voice-card__img js-colorbox">
                                <source srcset="<?php the_post_thumbnail_url('full'); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="<?php the_title(); ?>のアイキャッチ画像">
                            </picture>
                        </div>
                        <p class="voice-card__text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <!-- ページネーション -->
    <div class="-pagenavi">
        <?php wp_pagenavi(); ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>
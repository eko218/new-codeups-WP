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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-pc.jpg"
                media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-sp.jpg" alt="海に浮かんでいるダイバー">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">Price</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- price-list -->
<section id="page-price" class="page-price sub-page-price">
    <div class="page-price__inner inner common-fish">
        <div class="page-price__item page-price-item">
            <div class="page-price-item__content page-price-item__header">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/tab-btn1.png" alt="">
                <h3 class="page-price-item__title">ライセンス講習</h3>
            </div>
            <?php
                            $price_item = SCF::get_option_meta('price_options' ,'license');
                            foreach ($price_item as $field):
                        ?>

            <div class="page-price-item__content page-price-item__content--left">
                <?php echo $field['license_course1']; ?><br class="u-mobile">
                <?php echo $field['license_course2']; ?>
            </div>
            <div class="page-price-item__content page-price-item__content--right">
                <?php echo $field['license_price']; ?></div>
            <?php endforeach; ?>
        </div>
        <div class="page-price__item page-price-item">
            <div class="page-price-item__content page-price-item__header">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/tab-btn1.png" alt="">
                <h3 class="page-price-item__title">体験ダイビング</h3>
            </div>
            <?php
                            $price_item = SCF::get_option_meta('price_options' ,'experience');
                            foreach ($price_item as $field):
                        ?>
            <div class="page-price-item__content page-price-item__content--left">
                <?php echo $field['experience_course1']; ?><br class="u-mobile">
                <?php echo $field['experience_course2']; ?>
            </div>
            <div class=" page-price-item__content page-price-item__content--right">
                <?php echo $field['experience_price']; ?></div>
            <?php endforeach; ?>
        </div>
        <div class="page-price__item page-price-item">
            <div class="page-price-item__content page-price-item__header">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/tab-btn1.png" alt="">
                <h3 class="page-price-item__title">ファンダイビング</h3>
            </div>
            <?php
                            $price_item = SCF::get_option_meta('price_options' ,'fun');
                            foreach ($price_item as $field):
                        ?>
            <div class="page-price-item__content page-price-item__content--left">
                <?php echo $field['fun_course1']; ?><br class="u-mobile">
                <?php echo $field['fun_course2']; ?>
            </div>
            <div class="page-price-item__content page-price-item__content--right">
                <?php echo $field['fun_price']; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="page-price__item page-price-item">
            <div class="page-price-item__content page-price-item__header">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/tab-btn1.png" alt="">
                <h3 class="page-price-item__title">スペシャルダイビング</h3>
            </div>
            <?php
                            $price_item = SCF::get_option_meta('price_options' ,'special');
                            foreach ($price_item as $field):
                        ?>
            <div class="page-price-item__content page-price-item__content--left">
                <?php echo $field['special_course1']; ?><br class="u-mobile">
                <?php echo $field['special_course2']; ?>
            </div>
            <div class="page-price-item__content page-price-item__content--right"><?php echo $field['special_price']; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
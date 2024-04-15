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
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-sp.jpg" alt="浜辺と海と空">
        </picture>
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">FAQ</h2>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="breadcrumb sub-breadcrumb">
    <div class="breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb') ?>
    </div>
</div>

<!-- page-faq -->
<div id="page-faq" class="page-faq sub-page-faq">
    <div class="page-faq__inner inner common-fish">
        <div class="page-faq__accordion-container faq-item">
            <?php
                    $repeat_item = SCF::get_option_meta('faq_options' ,'faq');
                    foreach ($repeat_item as $field):
                ?>
            <div class="faq-item__content faq-content">
                <div class="faq-content__title js-faq-title">
                    <p class="faq-content__title-text"><?php echo $field['question']; ?></p>
                </div>
                <div class="faq-content__text js-faq-text">
                    <p class="faq-content__text-sub">
                        <?php echo $field['answer']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
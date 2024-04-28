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

<!-- blog-mv -->
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
<section id="two-colums" class="home two-colums sub-two-colums">
    <div class="two-colums__inner inner common-fish">
        <div class="two-colums__contents">
            <div class="two-colums__main home-main">
                <div class="home-main__items blog-cards blog-cards--sub">
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="blog-cards__item blog-card">
                        <a href="<?php the_permalink(); ?>" class="blog-card__item">
                            <figure class="blog-card__img blog-card__img--sub">
                                <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="<?php the_title(); ?>のアイキャッチ画像">
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg"
                                    alt="">
                                <?php endif; ?>
                            </figure>
                            <div class="blog-card__info">
                                <time class="blog-card__date"
                                    datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                            </div>
                            <div class="blog-card__body">
                                <div class="blog-card__text"><?php the_excerpt(); ?></div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
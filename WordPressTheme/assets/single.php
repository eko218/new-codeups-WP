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
<section id="two-colums" class="single two-colums sub-two-colums">
    <div class="two-colums__inner inner common-fish">
        <div class="two-colums__contents">
            <div class="two-colums__main single-main">
                <div class="single-main__body">
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="single-main__info">
                        <time class="single-main__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?>
                        </time>
                        <h3 class="single-main__title"><?php the_title(); ?></h3>
                    </div>
                    <figure class="single-main__img">
                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
                        <?php endif; ?>
                    </figure>
                </div>
                <div class="single-main__bottom">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; ?>
                <!-- pagenavi -->
                <div class="pagenavi">
                    <div class="pagenavi__inner wp-pagenavi wp-pagenavi--single">
                        <div class="wp-pagenavi__page">
                            <?php // 現在の投稿に隣接している前後の投稿を取得する
                             $prev_post = get_previous_post(); // 前の投稿を取得
                             $next_post = get_next_post(); // 次の投稿を取得
                             if( $prev_post || $next_post ): // どちらか一方があれば表示
                             ?>

                            <?php if( $prev_post ): // 前の投稿があれば表示 ?>
                            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="previouspostslink">＜
                            </a>
                            <?php endif; ?>
                            <?php if( $next_post ): // 次の投稿があれば表示 ?>
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="nextpostslink">＞
                            </a>
                            <?php endif; ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
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


<aside class="two-colums__side sidebar">
    <div class="sidebar__inner">
        <div class="sidebar__contents">
            <div class="sidebar__popular sidebar-popular">
                <h2 class="sidebar-popular__title side-title-icon">人気記事</h2>
                <div class="sidebar-popular__items">
                    <?php
            setPostViews(get_the_ID());
            query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=3&order=DESC');
            while(have_posts()) : the_post();
          ?>
                    <div class="sidebar-popular__item">
                        <a href="<?php the_permalink(); ?>" class="sidebar-popular__link">
                            <div class="sidebar-popular__img">
                                <img src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="<?php the_title(); ?>のアイキャッチ画像">
                            </div>
                            <div class="sidebar-popular__body">
                                <time class="sidebar-popular__date" datetime="<?php the_time('c'); ?>">
                                    <?php the_time("Y.m.d"); ?> </time>
                                <h3 class=" sidebar-popular__text"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); wp_reset_query(); ?>
            </div>
            <div class="sidebar__review sidebar-review sub-sidebar">
                <h2 class="sidebar-review__title side-title-icon">口コミ</h2>

                <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'voice',
              'posts_per_page' => 1,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
                <?php if ($recent_query->have_posts()) : ?>
                <?php while($recent_query->have_posts()) : ?>
                <?php $recent_query->the_post(); ?>
                <div class="sidebar-review__item">
                    <a href="#" class="sidebar-review__link">
                        <div class="sidebar-review__img">
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        </div>
                        <div class="sidebar-review__body">
                            <p class="sidebar-review__age">
                                <?php the_field('voice_age'); ?><?php the_field('voice_gender'); ?></p>
                            <h3 class="sidebar-review__title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="sidebar-review__btn">
                    <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
                </div>
            </div>


            <div class="sidebar__campaign sidebar-campaign sub-sidebar">
                <h2 class="sidebar-campaign__title side-title-icon">キャンペーン</h2>
                <ul class="sidebar-campaign__items">
                    <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'campaign',
              'posts_per_page' => 2,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
                    <?php if ($recent_query->have_posts()) : ?>
                    <?php while($recent_query->have_posts()) : ?>
                    <?php $recent_query->the_post(); ?>


                    <li class="sidebar-campaign__card sidebar-campaign-card">
                        <div class="sidebar-campaign-card__item">
                            <figure class="sidebar-campaign-card__img">
                                <img src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="<?php the_title(); ?>のアイキャッチ画像">
                            </figure>
                            <div class="sidebar-campaign-card__body">
                                <p class="sidebar-campaign-card__title"><?php the_title(); ?></p>
                                <p class="sidebar-campaign-card__text">
                                    全部コミコミ&lpar;お一人様&rpar;</p>
                                <div class="sidebar-campaign-card__price">
                                    <p class="sidebar-campaign-card__price-sub">
                                        <?php the_field('campaign_price1'); ?></p>
                                    <p class="sidebar-campaign-card__price-main">
                                        <?php the_field('campaign_price2'); ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </ul>
                <div class="sidebar-campaign__btn">
                    <a href="#" class="common-btn"><span class="common-btn__arrow">View&nbsp;more</span></a>
                </div>
            </div>
            <div class="sideber-archive sidebar-archive sub-sidebar">
                <h2 class="sidebar-archive__title side-title-icon">アーカイブ</h2>
                <ul class="sidebar-archive__lists">
                    <?php
        $years = get_years_with_posts();
        foreach ($years as $year) {
            $months = get_months_with_posts($year);
            // その年に投稿がない場合はスキップ
            if (empty($months)) {
                continue;
            }
            echo '<li class="sidebar-archive__list">';
            echo "<span class='sidebar-archive__year js-archive-button'>$year</span>";
            echo '<ul class="sidebar-archive__months">';
            foreach ($months as $month) {
                echo "<li class='sidebar-archive__month'><a href='#'>$month</a></li>";
            }
            echo '</ul></li>';
        }
        ?>
                </ul>
            </div>
        </div>
    </div>
</aside>
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


<!-- contact -->
<section id="contact" class="contact top-contact">
    <div class="contact__inner inner">
        <div class="contact__container">
            <div class="contact__access">
                <div class="contact__logo">
                    <a href="" class="contact-logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-logo.svg" alt="コンタクトロゴ">
                    </a>
                </div>
                <div class="contact__info">
                    <div class="contact__address">
                        <p class="contact__address-text">沖縄県那覇市1-1</p>
                        <p class="contact__address-text"><a href="tel:0120-000-0000">TEL:0120-000-0000</a></p>
                        <p class="contact__address-text">営業時間:8:30-19:00</p>
                        <p class="contact__address-text">定休日:毎週火曜日</p>
                    </div>
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29742.2409384461!2d-157.85334081501577!3d21.280169682241162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006df4e5c129af%3A0x4633ddc52a688878!2z44Ki44Oh44Oq44Kr5ZCI6KGG5Zu9IOOAkjk2ODE1IOODj-ODr-OCpOW3niDjg5vjg47jg6vjg6sg44Ov44Kk44Kt44Kt!5e0!3m2!1sja!2sjp!4v1700851904771!5m2!1sja!2sjp"
                            width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact__content">
                <div class="contact__title section-header">
                    <div class="section-header__engtitle section-header__engtitle--contact">Contact</div>
                    <h2 class="section-header__jatitle section-header__jatitle--contact">お問い合わせ</h2>
                </div>
                <p class="contact__text ">ご予約・お問い合わせはコチラ</p>
                <div class="contact__btn contact-common-btn">
                    <a href="#" class="common-btn"><span class="common-btn__arrow">Contact&nbsp;us</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<!-- footer -->
<footer class="footer top-footer">
    <div class="footer__inner inner">
        <div class="footer__content">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="" class="footer-logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/footer-logolink.svg"
                            alt="フッターのロゴ画像">
                    </a>
                </div>
                <div class="footer__sns">
                    <a href="" class="footer__sns-icon" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/facebook-logo.svg" alt="フェイスブックロゴ">
                    </a>
                    <a href="" class="footer__sns-icon" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/common/instagram-logo.svg" alt="インスタグラムロゴ">
                    </a>
                </div>
            </div>
            <div class="footer__bottom">
                <nav class="footer__nav footer-nav">
                    <div class="footer-nav__body">
                        <div class="footer-nav__left">
                            <div class="footer-nav__container">
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $campaign ?>">キャンペーン</a></li>
                                        <li class="footer-nav__item"><a href="#">ライセンス取得</a></li>
                                        <li class="footer-nav__item"><a href="#">貸切体験ダイビング</a></li>
                                        <li class="footer-nav__item"><a href="#">ナイトダイビング</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $about ?>">私たちについて</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-nav__container">
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $information; ?>">ダイビング情報</a>
                                        </li>
                                        <li class="footer-nav__item"><a
                                                href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a></li>
                                        <li class="footer-nav__item"><a
                                                href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a></li>
                                        <li class="footer-nav__item"><a
                                                href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $blog ?>">ブログ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-nav__right">
                            <div class="footer-nav__container">
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $voice ?>">お客様の声</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $price ?>">料金一覧</a></li>
                                        <li class="footer-nav__item"><a href="#">ライセンス講習</a></li>
                                        <li class="footer-nav__item"><a href="#">体験ダイビング</a></li>
                                        <li class="footer-nav__item"><a href="#">ファンダイビング</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-nav__container">
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $faq ?>">よくある質問</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $privacy ?>">プライバシー<br
                                                    class="footer-nav__item-indent">ポリシー</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $termsofservice ?>">利用規約</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-nav__wrap">
                                    <ul class="footer-nav__items">
                                        <li class="footer-nav__item"><a href="<?php echo $contact ?>">お問い合わせ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.All&nbsp;Rights&nbsp;Reserved</small>
        </div>
    </div>
</footer>
<div class="page-top-button js-page-top"></div>
<?php wp_footer(); ?>
</body>


</html>
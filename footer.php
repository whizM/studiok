<footer class="c-footer">
        <div class="c-footer__container" id="store_info">
            <div class="c-footer__box">
                <div>
                    <figure class="c-footer__building">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/building.jpg" alt="building">
                    </figure>
                    <iframe class="c-footer__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11896.57981592333!2d140.41471634173925!3d36.37883967602213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602223e1276167df%3A0x80094325bbe158d9!2s1-ch%C5%8Dme-1844-2%20Kawawada%2C%20Mito%2C%20Ibaraki%20311-4152%2C%20Japan!5e0!3m2!1sen!2sus!4v1713948951450!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="c-footer__txt">
                    <h2 class="c-footer__ttl">店舗情報</h2>
                    <p class="c-footer__desc">
                        〒311-4152　茨城県水戸市河和田1-1844-2・505<br>
                        営業時間   平日10:00～21:30  土10:00～17:00<br>
                        日曜定休<br>
                        最寄JR常磐線「赤塚駅」徒歩5分、フレスポ赤塚店前<br>
                        <span>※駐車場はございませんので近隣の駐車場をご利用ください。</span>
                    </p>
                </div>
            </div>
            <a href="https://lin.ee/CGarCqb" class="c-footer__btn btn-line">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="44px" height="43px" viewBox="-5.5 0 32 32" version="1.1">
                    <title>line</title>
                    <path d="M10.656 5.938c5.938 0 10.719 3.875 10.719 8.688 0 2.344-1.156 4.406-2.969 6.031-2.938 2.906-8 5.844-8.531 5.625-0.875-0.344 0.656-2.219 0.031-3.031-0.094-0.125-0.438-0.094-1.063-0.188-5.156-0.688-8.844-4.094-8.844-8.469 0-4.813 4.75-8.656 10.656-8.656zM4.563 17.5h1.813c0.313 0 0.5-0.25 0.5-0.563 0-0.219-0.156-0.5-0.563-0.5h-1.469c-0.125 0-0.125-0.125-0.125-0.563v-3.156c0-0.281-0.188-0.563-0.531-0.563-0.313 0-0.531 0.25-0.531 0.563v3.813c0 0.844 0.406 0.969 0.906 0.969zM8.656 17.063v-4.344c0-0.281-0.219-0.563-0.563-0.563-0.281 0-0.531 0.25-0.531 0.563v4.344c0 0.281 0.219 0.5 0.563 0.5 0.281 0 0.531-0.219 0.531-0.5zM13.781 16.469v-3.813c0-0.281-0.219-0.5-0.563-0.5-0.25 0-0.531 0.156-0.531 0.5v2.75l-1.813-2.531c-0.25-0.438-0.563-0.719-0.938-0.719-0.469 0-0.5 0.375-0.5 0.906v4c0 0.281 0.219 0.5 0.531 0.5 0.281 0 0.531-0.188 0.531-0.5v-2.844l1.813 2.531c0.406 0.531 0.5 0.813 1 0.813 0.344 0 0.469-0.313 0.469-1.094zM17.281 14.313h-1.594v-0.906c0-0.094 0.031-0.219 0.188-0.219h1.406c0.344 0 0.563-0.188 0.563-0.531 0-0.406-0.313-0.531-0.594-0.531h-1.813c-0.563 0-0.844 0.375-0.844 0.875v3.531c0 0.625 0.25 0.969 0.844 0.969h1.844c0.406 0 0.563-0.25 0.563-0.563 0-0.406-0.313-0.531-0.563-0.531h-1.375c-0.125 0-0.219-0.094-0.219-0.188v-0.875h1.656c0.406 0 0.469-0.313 0.469-0.531 0-0.313-0.25-0.5-0.531-0.5z"/>
                </svg>
                LINE友だち追加
            </a>
            <div class="c-footer__bottom">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/logo.png" alt="logo" class="c-footer__logo">
                </a>
                <div class="c-footer__nav--list">
                    <a href="<?php echo site_url();?>" class="c-footer__nav--item">Home</a>
                    <a href="<?php echo site_url();?>/miryoku" class="c-footer__nav--item">StudioKの魅力</a>
                    <a href="<?php echo site_url();?>/price" class="c-footer__nav--item">料金・システム</a>
                    <a href="<?php echo site_url();?>/reserve" class="c-footer__nav--item">体験予約</a>
                    <a href="<?php echo site_url();?>/trainer" class="c-footer__nav--item">トレーナー紹介</a>
                </div>
            </div>
            <p class="c-footer__copyright">Copyright 2024 StudioK. All Rights reserved.</p>
        </div>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
    <?php wp_footer(); ?>
</body>

</html>
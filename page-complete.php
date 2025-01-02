<?php get_header(); ?>
<main>

    <div class="service-mv lower-mv">
        <div class="service-mv__inner1 lower-mv__inner1">
            <div class="service-mv__inner2 lower-mv__inner2">
                <div class="service-mv__block lower-mv__block fade_up">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/contact-mv-img.jpg")); ?>" alt="" class="service-mv__img lower-mv__img" loading="lazy">
                    <div class="service-mv__title-wrapper lower-mv__title-wrapper slide_left">
                        <p class="service-mv__title lower-mv__title">Contact</p>
                        <p class="service-mv__sub-title lower-mv__sub-title">お問い合わせ</p>
                    </div>
                </div>

                <!-- パンくずリスト -->
                <?php if (function_exists('bcn_display')) { ?>
                    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                        <?php bcn_display(); ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="contact-contents-complete">
        <div class="contact-contents__inner">

            <p class="contact-contents__main-title">THANK YOU FOR CONTACTING US.</p>
            <p class="contact-contents__sub-title">お問い合わせありがとうございます。</p>
            <p class="contact-complete__text contact-contents__text">
                近日中に折り返しご連絡いたします。<br class="md-show">今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br class="md-show">万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br class="md-show">今後ともご愛顧賜りますようよろしくお願い申し上げます。
            </p>

            <div class="contact-complete__button-wrapper">
                <a href="<?php echo esc_url(home_url("/")) ?>" class="contact-back-top__button"><span></span>TOPヘ戻る</a>
            </div>
        </div>
    </div>


</main>
<?php get_footer(); ?>
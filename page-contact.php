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

  <div class="contact-contents">
    <div class="contact-contents__inner">
      <p class="contact-contents__text">
        弊社へのお問い合わせは<br>下記フォームより受け付けております。<br>
        担当者が確認後、折り返しご連絡させていただきます。
      </p>
      <div class="contact-body">
        <?php echo do_shortcode('[contact-form-7 id="d35b0ec" title="テスト問い合わせフォーム"]'); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
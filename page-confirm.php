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

  <div class="contact-confirm-contents contact-contents">
    <div class="contact-confirm-contents__inner">
      <p class="contact-confirm-contents__text">入力内容をご確認ください。</p>
      <div class="contact-confirm-body">
        <?php echo do_shortcode('[contact-form-7 id="5eb6b45" title="問い合わせ確認"]'); ?>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>
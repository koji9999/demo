<?php get_header(); ?>
<main>

  <!-- mv -->
  <div class="error-mv">
    <div class="error-mv__inner1 lower-mv__inner1">
      <div class="error-mv__inner2 lower-mv__inner2">
        <div class="error-mv__block lower-mv__block fade_up">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/404-img.jpg")); ?>" alt="" class="error-mv__img lower-mv__img" loading="lazy">
          <div class="error">
            <h2 class="error__title">404&nbsp;Not&nbsp;Found</h2>
            <p class="error__text md-none">
              お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します
            </p>
            <a href="<?php echo esc_url(home_url("/")) ?>" class="error__button md-none">TOPヘ戻る</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="error-sp">
    <div class="inner md-show">
      <div class="error__sp-text-block">
        <p class="error__sp-text">
            お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します
        </p>
        <a href="<?php echo esc_url(home_url("/")) ?>" class="error__button error__button--sp md-show">TOPヘ戻る</a>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>
<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="news-mv lower-mv">
    <div class="news-mv__inner1 lower-mv__inner1">
      <div class="news-mv__inner2 lower-mv__inner2">
        <div class="news-mv__block lower-mv__block fade_up">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/news-mv-img.jpg")); ?>" alt="" class="news-mv__img lower-mv__img" loading="lazy">
          <div class="news-mv__title-wrapper lower-mv__title-wrapper slide_left">
            <p class="news-mv__title lower-mv__title">News</p>
            <p class="news-mv__sub-title lower-mv__sub-title">お知らせ</p>
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

  <!-- newsセクション -->
  <!-- <section class="news news--back-white"> -->
  <section class="news-page">
    <div class="news__inner inner">

      <!-- 右側 -->
      <div class="news__right news__right--non-left-border news__right--width-full">

        <div class="news__contents">

          <div class="news__content js-tab-content is-tab-active">
            <?php if (have_posts()) : ?>
              <!-- <ul class="news__list"> -->
              <ul class="date-news__list">
                <?php while (have_posts()) : the_post(); ?>
                  <li class="news__item fade_down">

                    <a href="<?php the_permalink(); ?>" class="archive-works__item-link">

                      <div class="news__text-wrapper">
                        <div class="news__information">
                          <!-- 日付 -->
                          <time class="news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>

                          <!-- カテゴリー -->
                          <div class="news__tag-list-wrapper">

                            <ul class="news__tag-list">

                              <?php
                              $categories = get_the_category();
                              if (!empty($categories)) {
                                $limit = 5; // 表示するカテゴリーの数を指定
                                $count = 0;
                                foreach ($categories as $category) {
                                  if ($count < $limit) {
                                    echo '<li class="news__tag-item">';
                                    echo '<span class="news__category tag tag--gray">' . esc_html($category->name) . '</span>';
                                    echo '</li>';
                                    $count++;
                                  } else {
                                    break;  // 制限に達したらループを抜ける
                                  }
                                }
                              }
                              ?>

                            </ul>

                          </div>

                        </div>

                        <!-- 記事タイトル -->
                        <div class="news__link">
                          <!-- <div class="news__link-text txt-limit"> -->
                          <div class="news__link-text news-page__txt-limit">
                            <?php the_title(); ?>
                          </div>
                        </div>

                      </div>

                    </a>

                  </li>
                <?php endwhile; ?>
              </ul>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif; ?>
          </div>

          <!-- ページネーション -->
          <div class="news-pc-pagination md-none">
            <?php
            $args = [
              'mid_size' => 1,
              'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
              'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
            ];
            the_posts_pagination($args);
            ?>
          </div>

        </div>

      </div>

    </div>

    <!-- ページネーション SP専用 -->
    <div class="news-sp-pagination__inner md-show">
      <?php
      $args = [
        'mid_size' => 1,
        'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
        'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
      ];
      the_posts_pagination($args);
      ?>
    </div>

  </section>

</main>

<?php get_footer(); ?>
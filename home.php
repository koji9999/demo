<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="news-mv lower-mv">
    <div class="news-mv__inner1 lower-mv__inner1">
      <div class="news-mv__inner2 lower-mv__inner2">
        <div class="news-mv__block lower-mv__block fade_up">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/news-mv-sp-img.jpg")); ?>" media="(max-width: 376px)">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/news-mv-img.jpg")); ?>" alt="" class="news-mv__img lower-mv__img" loading="lazy">
          </picture>
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
  <section class="news news--back-white">
    <div class="news__inner inner">

      <!-- コンテナ -->
      <div class="news__container" id="news__container">

        <!-- 左側 -->
        <div class="aside" id="aside">

          <nav class="news__nav">
            <ul class="news__categories">
              <?php
              $current_category_id = get_queried_object_id();
              $categories = get_categories([
                'orderby' => 'name',
                'order'   => 'ASC',
                // 表示するカテゴリーの数を指定
                'number'  => 20
              ]);

              // 通常投稿一覧ページへのURL
              echo '<li class="news__category">';
              $home_class = (is_home() || is_front_page()) ? 'is-tab-active' : '';
              $home_link = sprintf(
                //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                '<a class="news__tab-button fade_up js-tab-button %s" href="%s" alt="%s">全て</a>',
                $home_class,
                // 通常投稿一覧ページのスラッグを指定
                esc_url(home_url('/news')),
                esc_attr(__('View all posts', 'textdomain'))
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $home_link);
              echo '</li>';

              echo '<script>';
              echo 'console.log('.json_encode($current_category_id).')';
              echo '</script>';

              // カテゴリーのリンク
              if ($categories) {
                foreach ($categories as $category) {
                  echo '<li class="news__category">';
                  // カレントクラスに付与するクラスを指定できる
                  echo '<script>';
                  echo 'console.log('.json_encode($category->term_id).')';
                  echo '</script>';
                  $category_class = ($home_class == '' and $current_category_id === $category->term_id) ? 'is-tab-active' : '';
                  $category_link = sprintf(
                    // 各カテゴリーに付与するクラスを指定できる
                    '<a class="news__tab-button fade_up js-tab-button %s" href="%s" alt="%s">%s</a>',
                    $category_class,
                    esc_url(get_category_link($category->term_id)),
                    esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                    esc_html($category->name)
                  );
                  echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
                  echo '</li>';
                }
              }
              ?>

            </ul>
          </nav>

        </div>

        <!-- 右側 -->
        <div class="news__right">

          <div class="news__contents">

            <div class="news__content js-tab-content is-tab-active">
              <?php if (have_posts()) : ?>
                <ul class="news__list">
                  <?php while (have_posts()) : the_post(); ?>
                    <li class="news__item fade_down">

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
                          <a href="<?php the_permalink(); ?>" class="news__link-text txt-limit">
                            <?php the_title(); ?>
                          </a>
                        </div>

                      </div>

                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php else : ?>
                <p>記事が投稿されていません</p>
              <?php endif; ?>
            </div>

            <!-- ページネーション -->
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
  </section>

</main>

<?php get_footer(); ?>
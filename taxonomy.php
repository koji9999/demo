<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="news-mv lower-mv">
    <div class="news-mv__inner1 lower-mv__inner1">
      <div class="news-mv__inner2 lower-mv__inner2">
        <div class="news-mv__block lower-mv__block fade_up">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/works-mv-img.jpg")); ?>" alt="" class="news-mv__img lower-mv__img" loading="lazy">
          <div class="news-mv__title-wrapper lower-mv__title-wrapper slide_left">
            <p class="news-mv__title lower-mv__title">Works</p>
            <!-- <p class="news-mv__sub-title lower-mv__sub-title">タクソノミー別一覧</p> -->
            <p class="news-mv__sub-title lower-mv__sub-title">制作実績</p>
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
  <section class="news-page">
    <div class="news__inner inner">

      <!-- コンテナ -->
      <div class="news__container">

        <!-- 左側 -->
        <div class="aside-sticky">

          <nav class="news__nav news__nav--noborder">

            <ul class="news__categories">
              <?php
              // $current_term_id = get_queried_object()->term_id;

              // $test = get_queried_object();
              // echo '<script>';
              // echo 'console.log('.json_encode($test).')';
              // echo '</script>';
              // $current_term_id = $test->term_id;

              $current_term_id = get_queried_object_id();
              // echo $current_term_id;

              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'genre',
                'orderby' => 'name',
                'order'   => 'ASC',
                // 表示するタームの数を指定
                'number'  => 5
              ]);

              echo '<li class="news__category news__category--works">';
              $home_class = (is_post_type_archive()) ? 'is-tab-active' : '';
              $home_link = sprintf(
                //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                '<a class="news__tab-button fade_up js-tab-button %s" href="%s" alt="%s">すべての実績</a>',
                $home_class,
                // 通常投稿一覧ページのスラッグを指定
                esc_url(home_url('/works')),
                esc_attr(__('View all posts', 'textdomain'))
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $home_link);
              echo '</li>';

              // タームのリンク
              if ($terms) {
                foreach ($terms as $term) {
                  echo '<li class="news__category news__category--works">';
                  // カレントクラスに付与するクラスを指定できる
                  // echo $term->term_id;
                  // $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                  $term_class = ($current_term_id === $term->term_id) ? 'is-tab-active' : '';
                  $term_link = sprintf(
                    // 各タームに付与するクラスを指定できる
                    '<a class="news__tab-button fade_up js-tab-button %s" href="%s" alt="%s">%s</a>',
                    $term_class,
                    esc_url(get_term_link($term->term_id)),
                    esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                    esc_html($term->name)
                  );
                  echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
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

              <?php
              $genre_slug = get_query_var('genre');
              $args = [
                "post_type" => "works",
                "posts_per_page" => 10,
                'tax_query' => [
                  [
                    'taxonomy' => 'genre',
                    'field'    => 'slug',
                    'terms'    => $genre_slug,
                  ],
                ],
              ];
              $the_query = new WP_Query($args);
              ?>

              <?php if ($the_query->have_posts()) : ?>
                <ul class="date-news__list">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li class="archive-works__item fade_down">

                    <a href="<?php the_permalink(); ?>" class="archive-works__item-link">

                      <!-- <?php the_post_thumbnail( 'full', ['class' => 'archive-works__img']); ?> -->
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'archive-works__img']); ?>
                      <?php else : ?>
                        <img class="archive-works__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>

                      <div class="archive-works__text-wrapper">

                        <!-- カテゴリー ＋ タイトル -->
                        <div class="archive-works__text-upper">

                          <div class="archive-works__information">
                            <!-- カテゴリー -->
                            <ul class="news__tag-list">

                              <?php
                                $taxonomy_terms = get_the_terms($post->id, 'genre');
                                if ( ! empty( $taxonomy_terms ) ) {
                                  $limit = 5; // 表示するカテゴリーの数を指定
                                  $count = 0;
                                  foreach( $taxonomy_terms as $taxonomy_term ) {
                                    if ($count < $limit) {
                                      echo '<li class="news__tag-item">';
                                      echo '<span class="news__category tag tag--gray">' . esc_html($taxonomy_term->name) . '</span>';
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

                          <!-- 記事タイトル -->
                          <div class="archive-works__link">
                            <div class="news__link-text works-page__txt-limit2">
                              <?php the_title(); ?>
                            </div>
                          </div>

                        </div>

                        <!-- 日付 -->
                        <time class="archive-works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>

                      </div>

                    </a>

                  </li>

                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
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
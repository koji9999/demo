<?php get_header(); ?>

<main>

  <!-- メインビュー -->
  <div class="mv">
    <div class="mv__inner">

      <div class="mv__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide1">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/top-pc-mv1.jpg")); ?>" media="(min-width: 376px)">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/top-sp-mv1.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="swiper-slide swiper-slide1">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/top-pc-mv2.jpg")); ?>" media="(min-width: 376px)">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/top-sp-mv2.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="swiper-slide swiper-slide1">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/top-pc-mv3.jpg")); ?>" media="(min-width: 376px)">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/top-sp-mv3.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="swiper-slide swiper-slide1">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/images/top-pc-mv4.jpg")); ?>" media="(min-width: 376px)">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/top-sp-mv4.jpg")); ?>" alt="">
            </picture>
          </div>
        </div>
      </div>

      <p class="mv__catch">あなたの<br>日常が目覚める</p>

    </div>
  </div>

  <!-- 左から右に流れるキャッチ -->
  <div class="flow__catch">
    <p class="flow__text">Good life for Good Car</p>
  </div>

  <!-- About us -->
  <div class="about">
    <div class="about__inner inner">
      <img src="<?php echo esc_url(get_theme_file_uri("/images/top-about-img.jpg")); ?>" alt="オープンカーの奥に山がある様子" class="about__img" loading="lazy">
      <div class="about__wrap">
        <p class="about__title">About us</p>
        <p class="about__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
        <div class="about__more-wrap">
          <a href="<?php echo esc_url(home_url("/about")) ?>" class="more-link">READ MORE<span></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Service -->
  <section class="service">
    <div class="service__inner inner">
      <h1 class="service__title title slide_right">Service</h1>

      <ul class="service__list">

        <li class="service__card">
          <div class="service__card-img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top-service-img1.jpg")); ?>" alt="" class="service__card-img" loading="lazy">
            <div class="service__card-title-wrap">
              <p class="service__card-title1">Service01</p>
              <p class="service__card-title2">購入サポート</p>
            </div>
          </div>
          <p class="service__card-text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
          <div class="service__card-button-wrap">
            <a href="<?php echo esc_url(home_url("/service#support")) ?>" class="service__card-button ">READ MORE</a>
          </div>
        </li>

        <li class="service__card">
          <div class="service__card-img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top-service-img2.jpg")); ?>" alt="" class="service__card-img" loading="lazy">
            <div class="service__card-title-wrap">
              <p class="service__card-title1">Service02</p>
              <p class="service__card-title2">修理・整備</p>
            </div>
          </div>
          <p class="service__card-text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
          <div class="service__card-button-wrap">
            <a href="<?php echo esc_url(home_url("/service#repair")) ?>" class="service__card-button ">READ MORE</a>
          </div>
        </li>

        <li class="service__card">
          <div class="service__card-img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top-service-img3.jpg")); ?>" alt="" class="service__card-img" loading="lazy">
            <div class="service__card-title-wrap">
              <p class="service__card-title1">Service03</p>
              <p class="service__card-title2">車検・点検</p>
            </div>
          </div>
          <p class="service__card-text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。</p>
          <div class="service__card-button-wrap">
            <a href="<?php echo esc_url(home_url("/service#inspection")) ?>" class="service__card-button ">READ MORE</a>
          </div>
        </li>

      </ul>
    </div>
  </section>

  <!-- Works -->
  <section class="works">
    <div class="works__inner inner">
      <h1 class="works__title title slide_left">Works</h1>
    </div>

    <div class="works__inner2 inner inner--sp-padding-none">

      <?php
      $args = [
        "post_type" => "works",
        "posts_per_page" => 3,
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="works__list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="works__card">
            <div class="works__card-inner fade_down">

              <a href="<?php the_permalink(); ?>" class="archive-works__item-link">

                <?php the_post_thumbnail( 'full', ['class' => 'works__img']); ?>

                <div class="works__card-body">

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
                    <div class="news__link">
                      <!-- <a href="<?php the_permalink(); ?>" class="news__link-text txt-limit">
                        <?php the_title(); ?>
                      </a> -->
                      <div class="news__link-text txt-limit">
                        <?php the_title(); ?>
                      </div>
                    </div>

                    <!-- 記事抜粋 -->
                    <div class="works__card-text md-none">
                      <p><?php the_excerpt(); ?></p>
                    </div>

                  </div>

                  <!-- 日付 -->
                  <!-- <div class="archive-works__date-wrapper">
                    <time class="archive-works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div> -->
                  <time class="archive-works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>

                </div>

              </a>

            </div>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php else : ?>
        <p>記事が投稿されていません</p>
      <?php endif; ?>

      <div class="works__more-wrap">
        <a href="<?php echo esc_url(home_url("/works")) ?>" class="more-link">READ MORE<span></span></a>
      </div>

    </div>
  </section>

  <!-- newsセクション -->
  <section class="news">
    <div class="news__inner inner">

      <!-- コンテナ -->
      <div class="news__container-top">

        <!-- 左側 -->
        <div class="news__left" id="aside">

          <h1 class="news__title title slide_left">News</h1>
          <div class="news__nav-upper-margin"></div>

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

              <?php
              $args = [
                "post_type" => "post",
                "posts_per_page" => 5,
                "orderby" => "date",
                "order" => "DESC",
              ];
              $the_query = new WP_Query($args);
              ?>

              <?php if ($the_query->have_posts()) : ?>
                <ul class="news__list">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                                      echo '<span class="news__category tag tag--white">' . esc_html($category->name) . '</span>';
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
                            <!-- <a href="<?php the_permalink(); ?>" class="news__link-text txt-limit">
                              <?php the_title(); ?>
                            </a> -->
                            <div class="news__link-text txt-limit">
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
            <?php
            $args = [
              'mid_size' => 2,
              'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
              'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
            ];
            the_posts_pagination($args);
            ?>

          </div>

          <div class="news__more-wrap">
            <a href="<?php echo esc_url(home_url("/news")) ?>" class="more-link">READ MORE<span></span></a>
          </div>

        </div>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
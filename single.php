<?php get_header(); ?>
<main>

  <!-- パンくずリスト -->
  <div class="detail__breadcrumb-wrapper">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    <?php } ?>
  </div>

  <div class="detail">
    <div class="detail__inner inner">
      <article class="detail__body">
        <div class="detail__categories">
          <ul class="detail__tag-list">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
              $limit = 5;
              $count = 0;
              foreach ($categories as $category) {
                if ($count < $limit) {
                  echo '<li class="news__tag-item">';
                  echo '<span class="news__category tag tag--gray">' . esc_html($category->name) . '</span>';
                  echo '</li>';
                  $count++;
                } else {
                  break;
                }
              }
            }
            ?>
          </ul>
        </div>
        <h1 class="detail__title"><?php the_title(); ?></h1>
        <time class="detail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['class' => 'detail__thumbnail']);?>
          <!-- <?php the_post_thumbnail(array(718, 380), ['class' => 'detail__thumbnail']); ?> -->
          <!-- <?php the_post_thumbnail(null, ['class' => 'detail__thumbnail']); ?> -->
        <?php else : ?>
          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
        <?php endif; ?>
        <div class="detail__content">
          <?php the_content(); ?>
        </div>
        <hr class="detail__endline">
        <div class="detail__other">
          <?php
          $prev_link = get_previous_post_link('%link', '前の記事へ');
          if (!empty($prev_link)) {
            echo str_replace('<a href=', '<a class="detail__prev" href=', $prev_link);
          }
          $next_link = get_next_post_link('%link', '次の記事へ');
          if (!empty($next_link)) {
            echo str_replace('<a href=', '<a class="detail__next" href=', $next_link);
          }
          ?>
        </div>
      </article>

      <div class="news-pc-pagination md-none">

        <aside class="detail__side">
          <div class="detail__group">
            <div class="detail__side-title">最新記事</div>
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
              <ul class="detail__list">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li class="detail__article">
                    <a href="<?php the_permalink(); ?>" class="detail__link">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'detail__img']); ?>
                      <?php else : ?>
                        <img class="detail__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>
                      <div class="detail__text">
                        <h3 class="detail__summary"><?php the_title(); ?></h3>
                        <time class="detail__day" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="detail__side-title">アーカイブ</div>
            <ul class="detail__list-archive">
              <!-- <?php wp_get_archives('type=monthly&limit=12'); ?> -->
              <?php wp_get_archives('type=monthly&limit=12'); ?>
            </ul>

            <div class="detail__side-title">カテゴリー</div>
            <ul class="detail__list">
            <?php
              $categories = get_categories();
              $cnt = 0;
              foreach ($categories as $category) {
                echo '<li class="detail__item"><a class="detail__link-category" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                $cnt += 1;
                if ($cnt >= 20) {
                  break;  // 条件分岐で出力数を制限してみた
                }
              }
              ?>
            </ul>

          </div>

        </aside>

      </div>

    </div>

    <div class="detail-sp-side__inner md-show">
      <aside class="detail__side">
        <div class="detail__group">
          <div class="detail__side-title">最新記事</div>
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
            <ul class="detail__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="detail__article">
                  <a href="<?php the_permalink(); ?>" class="detail__link">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full', ['class' => 'detail__img']); ?>
                    <?php else : ?>
                      <img class="detail__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                    <?php endif; ?>
                    <div class="detail__text">
                      <h3 class="detail__summary"><?php the_title(); ?></h3>
                      <time class="detail__day" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          <?php else : ?>
            <p>記事が投稿されていません</p>
          <?php endif; ?>

          <div class="detail__side-title">アーカイブ</div>
          <ul class="detail__list-archive">
            <!-- <?php wp_get_archives('type=monthly&limit=12'); ?> -->
            <?php wp_get_archives('type=monthly&limit=12'); ?>
          </ul>

          <div class="detail__side-title">カテゴリー</div>
          <ul class="detail__list">
          <?php
            $categories = get_categories();
            $cnt = 0;
            foreach ($categories as $category) {
              echo '<li class="detail__item"><a class="detail__link-category" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
              $cnt += 1;
              if ($cnt >= 20) {
                break;  // 条件分岐で出力数を制限してみた
              }
            }
            ?>
          </ul>

        </div>

      </aside>
    </div>

  </div>

</main>
<?php get_footer(); ?>
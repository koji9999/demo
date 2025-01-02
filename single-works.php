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
    <!-- <div class="detail__inner inner"> -->
    <div class="single-works__inner">
      <article class="single-works__body">
        <div class="detail__categories">
          <ul class="detail__tag-list">

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
        <h1 class="detail__title"><?php the_title(); ?></h1>
        <time class="detail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['class' => 'detail__thumbnail']);?>
        <?php else : ?>
          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
        <?php endif; ?>
        <!-- <div class="detail__content"> -->
        <div class="single-works__content">
          <?php the_content(); ?>
        </div>

        <div class="single-works__other">
          <a href="<?php echo esc_url(home_url("/works")) ?>" class="single-works__back">実績一覧へ戻る</a>
        </div>
      </article>

    </div>
  </div>

</main>
<?php get_footer(); ?>
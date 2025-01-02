<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="service-mv lower-mv">
    <div class="service-mv__inner1 lower-mv__inner1">
      <div class="service-mv__inner2 lower-mv__inner2">
        <div class="service-mv__block lower-mv__block fade_up">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/service-mv-sp-img.jpg")); ?>" media="(max-width: 376px)">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/service-mv-img.jpg")); ?>" alt="" class="service-mv__img lower-mv__img" loading="lazy">
          </picture>

          <div class="service-mv__title-wrapper lower-mv__title-wrapper slide_left">
            <p class="service-mv__title lower-mv__title">Service</p>
            <p class="service-mv__sub-title lower-mv__sub-title">サービス紹介</p>
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

  <!-- リードブロック -->
  <div class="lead__block">
    <div class="lead__inner lead-inner">
      <ul class="lead__link-list">
        <li class="lead__link-item">
          <a href="#support" class="lead__link lead__link">購入サポート</a>
        </li>
        <li class="lead__link-item">
          <a href="#repair" class="lead__link lead__link">修理・整備</a>
        </li>
        <li class="lead__link-item">
          <a href="#inspection" class="lead__link lead__link">車検・点検</a>
        </li>
      </ul>
      <p class="lead__catch">お客様一人一人が求める<br>理想のカー ライフに寄り添います</p>
      <p class="lead__text">様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロ ントでは車種ブランド別の専用電話回線をご用意しております。</p>
    </div>
  </div>

  <!-- 購入サポート -->
  <section class="service-section" id="support">
    <div class="service-section__inner">

      <div class="service-section__main-block">
        <div class="service-section__title-block">
          <p class="service-section__title-number">01</p>
          <h2 class="service-section__title">購入サポート</h2>
          <p class="service-section__title-text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-img1-pc.jpg")); ?>" alt="" class="service-section__img" loading="lazy">
      </div>

      <div class="service-section__sub-block">
        <div class="service-section__sub-title-wrapper">
          <p class="service-section__sub-title">FEATURES</p>
          <p class="service-section__sub-title-jp">特徴</p>
        </div>
        <p class="service-section__sub-text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
      </div>

    </div>
  </section>

  <!-- 修理・整備 -->
  <section class="service-section" id="repair">
    <div class="service-section__inner">

      <div class="service-section__main-block">
        <div class="service-section__title-block">
          <p class="service-section__title-number">02</p>
          <h2 class="service-section__title">修理・整備</h2>
          <p class="service-section__title-text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-img2-pc.jpg")); ?>" alt="" class="service-section__img" loading="lazy">
      </div>

      <div class="service-section__sub-block">
        <div class="service-section__sub-title-wrapper">
          <p class="service-section__sub-title">FEATURES</p>
          <p class="service-section__sub-title-jp">特徴</p>
        </div>
        <p class="service-section__sub-text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
      </div>

    </div>
  </section>

  <!-- 車検・点検 -->
  <section class="service-section" id="inspection">
    <div class="service-section__inner">

      <div class="service-section__main-block">
        <div class="service-section__title-block">
          <p class="service-section__title-number">03</p>
          <h2 class="service-section__title">車検・点検</h2>
          <p class="service-section__title-text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。</p>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/service-img3-pc.jpg")); ?>" alt="" class="service-section__img" loading="lazy">
      </div>

      <div class="service-section__sub-block">
        <div class="service-section__sub-title-wrapper">
          <p class="service-section__sub-title">FEATURES</p>
          <p class="service-section__sub-title-jp">特徴</p>
        </div>
        <p class="service-section__sub-text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
      </div>

    </div>
  </section>

  <!-- マージン調整用 -->
  <div class="service__adjust-margin"></div>

</main>

<?php get_footer(); ?>
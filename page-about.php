<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="about-mv lower-mv">
    <div class="about-mv__inner1 lower-mv__inner1">
      <div class="about-mv__inner2 lower-mv__inner2">
        <div class="about-mv__block lower-mv__block fade_up">
          <!-- <?php get_template_part('fv'); ?> -->
          <img src="<?php echo esc_url(get_theme_file_uri("/images/about-mv-img.jpg")); ?>" alt="" class="about-mv__img lower-mv__img" loading="lazy">
          <div class="about-mv__title-wrapper lower-mv__title-wrapper slide_left">
            <p class="about-mv__title lower-mv__title">About</p>
            <p class="about-mv__sub-title lower-mv__sub-title">私たちについて</p>

            <!-- <?php get_template_part('fv'); ?> -->
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
          <a href="#about-philosophy" class="lead__link">経営理念</a>
        </li>
        <li class="lead__link-item">
          <a href="#about-access" class="lead__link">アクセス</a>
        </li>
        <li class="lead__link-item">
          <a href="#about-profile" class="lead__link">会社概要</a>
        </li>
      </ul>
      <p class="lead__catch">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</p>
      <p class="lead__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br class="md-none">これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
    </div>
  </div>

  <!-- 経営理念 -->
  <div id="about-philosophy" class="about-philosophy">
    <div class="about-philosophy__inner inner inner--sp-padding-none">
      <div class="about-philosophy__body">
        <p class="about-philosophy__sub-title lower-sub-title">経営理念</p>
        <h2 class="about-philosophy__title lower-title">Philosophy</h2>
        <p class="about-philosophy__text">「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。</p>
        <p class="about-philosophy__signature">代表取締役　田中太郎</p>
      </div>
      <picture class="about-philosophy__img">
        <source srcset="<?php echo esc_url(get_theme_file_uri("/images/about-philosophy-img-sp.jpg")); ?>" media="(max-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri("/images/about-philosophy-img.jpg")); ?>" alt="">
      </picture>
    </div>
  </div>

  <!-- アクセス -->
  <div id="about-access" class="about-access">
    <div class="about-access__inner inner">
      <p class="about-access__sub-title lower-sub-title">アクセス</p>
      <h2 class="about-access__title lower-title">Access</h2>
      <div class="about-access__address-wrapper">
        <p class="about-access__address-post">〒000-0000</p>
        <p class="about-access__address-text">
          <?php the_field("custom-address"); ?>
        </p>
      </div>
      <iframe class="about-access__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12972.725813460864!2d139.6301647576101!3d35.62325298010862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f38bdd6d8d61%3A0x4ebc10d2858da879!2z5p2x5Lqs6YO95LiW55Sw6LC35Yy6!5e0!3m2!1sja!2sjp!4v1714296901156!5m2!1sja!2sjp" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <!-- 会社概要 -->
  <div id="about-profile" class="about-profile">
    <div class="about-profile__inner inner">
      <p class="about-profile__sub-title lower-sub-title">会社概要</p>
      <h2 class="about-profile__title lower-title">Company Profile</h2>

      <!-- リスト -->
      <ul class="about-profile__list">
        <li class="about-profile__item">
          <p class="about-profile__name">会社名</p>
          <p class="about-profile__value">株式会社Excitecode</p>
        </li>
        <li class="about-profile__item">
          <p class="about-profile__name">所在地</p>
          <div class="about-profile__place-wrapper">
            <p class="about-profile__value">〒000-0000</p>
            <p class="about-profile__value about-profile__address">
              <?php the_field("custom-address"); ?>
            </p>
          </div>
        </li>
        <li class="about-profile__item">
          <p class="about-profile__name">設立</p>
          <p class="about-profile__value">2015年12月10日</p>
        </li>
        <li class="about-profile__item">
          <p class="about-profile__name">代表取締役</p>
          <p class="about-profile__value">田中　太郎</p>
        </li>
        <li class="about-profile__item">
          <p class="about-profile__name">事業内容</p>
          <div class="about-profile__value-wrapper">
            <ul class="about-profile__value-list">
              <li class="about-profile__value-item">
                <p class="about-profile__value">自動車販売（新車、中古車）古物No.第00000000号</p>
              </li>
              <li class="about-profile__value-item">
                <p class="about-profile__value">自動車整備（国産車、輸入車）<br class="sp-show">陸運局認証工場　認証No.0-0000</p>
              </li>
              <li class="about-profile__value-item">
                <p class="about-profile__value">輸入車販売（自動車、自動車関連部品）</p>
              </li>
              <li class="about-profile__value-item">
                <p class="about-profile__value">保険代理店<br class="sp-show">（ABC損害保険株式会社、DFG損害保険株式会社）</p>
              </li>
            </ul>
          </div>
        </li>
      </ul>

    </div>

    <!-- スライド -->
    <div class="container">
      <div class="swiper infinite-slider">
        <div class="swiper-wrapper swiper-wrapper2">
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img1-pc.jpg")); ?>" alt="画像1" /></div>
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img2-pc.jpg")); ?>" alt="画像2" /></div>
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img3-pc.jpg")); ?>" alt="画像3" /></div>
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img4-pc.jpg")); ?>" alt="画像4" /></div>
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img5-pc.jpg")); ?>" alt="画像5" /></div>
          <div class="swiper-slide swiper-slide2"><img src="<?php echo esc_url(get_theme_file_uri("/images/about-company-profile-slide-img6-pc.jpg")); ?>" alt="画像6" /></div>
        </div>
      </div>
    </div>

  </div>



</main>

<?php get_footer(); ?>
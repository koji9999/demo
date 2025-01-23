  <footer class="footer">

    <?php if (is_page(array("contact","confirm","complete")) or is_404() ) { ?>
      <div class="footer1 md-none">
    <?php } else { ?>
      <div class="footer1">
    <?php } ?>

      <img src="<?php echo esc_url(get_theme_file_uri("/images/footer-img-pc.jpg")); ?>" alt="" class="footer1__img" loading="lazy">
      <div class="footer1__contact">
        <div class="footer1__inner">
          <p class="footer1__text1">輸入車の購入や修理のご相談などお気軽にお問い合わせください。</p>
          <a href="<?php echo esc_url(home_url("/contact")) ?>" class="footer1__contact-button bgleft"><span><i class="fa-regular fa-envelope"></i>お問い合わせ</span></a>
          <a href="tel:0312345678" class="footer1__tel-button"><i class="fa-solid fa-phone"></i>03-1234-5678</a>
          <p class="footer1__text2">受付時間 : 火曜日を除く 10：00～18：00</p>
        </div>
      </div>
    </div>

    <div class="footer2">
      <div class="footer2__inner">

        <div class="footer2__logo-wrapper-outer">

          <div class="footer2__logo-wrapper-inner">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/logo2.png")); ?>" alt="" class="footer2__img">

            <div class="footer2__icons">
              <ul class="footer2__icon-list">
                <!-- <li class="footer2__icon-item"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="footer2__icon-item"><a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="footer2__icon-item"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li> -->

                <li class="footer2__icon-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="footer2__icon-item"><a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="footer2__icon-item"><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>

              </ul>
            </div>
          </div>

          <small class="footer2__copyright">&copy;<?php echo wp_date("Y"); ?> ExciteCode Automobile</small>

        </div>

        <nav class="footer2__nav">

          <ul class="footer2__link-list">
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/")) ?>" class="footer2__link">TOP</a>
            </li>
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/about")) ?>" class="footer2__link">ABOUT</a>
            </li>
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/service")) ?>" class="footer2__link">SERVICE</a>
            </li>
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/works")) ?>" class="footer2__link">WORKS</a>
            </li>
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/news")) ?>" class="footer2__link">NEWS</a>
            </li>
            <li class="footer2__link-item">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="footer2__link">CONTACT</a>
            </li>
            <li class="footer2__link-item">
              <a href="#" class="footer2__link">プライバシーポリシー</a>
            </li>
          </ul>

        </nav>

      </div>
    </div>

  </footer>

  <?php wp_footer(); ?>
  </body>

  </html>
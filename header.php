<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header js-header">

    <div class="header__inner">
      <h1 class="header__logo"><img class="header__img" src="<?php echo esc_url(get_theme_file_uri("/images/logo1.png")); ?>" alt="ヘッダーロゴ"></h1>
      <nav class="header__nav md-none">
        <ul class="header__items">
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/")) ?>" class="header__link">TOP</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/about")) ?>" class="header__link">ABOUT</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/service")) ?>" class="header__link">SERVICE</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/works")) ?>" class="header__link">WORKS</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/news")) ?>" class="header__link">NEWS</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__link header__link--contact"><i class="fa-regular fa-envelope"></i>CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="hamburger js-hamburger md-show">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="drawer-menu js-drawer">
      <img class="drawer-menu__img" src="<?php echo esc_url(get_theme_file_uri("/images/logo2.png")); ?>" alt="ヘッダーロゴ">
      <div class="drawer-menu__inner">
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/")) ?>" class="drawer-menu__link">TOP</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/about")) ?>" class="drawer-menu__link">ABOUT</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/service")) ?>" class="drawer-menu__link">SERVICE</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/works")) ?>" class="drawer-menu__link">WORKS</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/news")) ?>" class="drawer-menu__link">NEWS</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="drawer-menu__link">CONTACT</a>
          </li>
          <li class="drawer-menu__item">
            <a href="#" class="drawer-menu__link">プライバシーポリシー</a>
          </li>
        </ul>
        <ul class="drawer-menu__icons">
          <li class="drawer-menu__icon">
            <!-- <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a> -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          </li>
          <li class="drawer-menu__icon">
            <!-- <a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a> -->
            <a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </li>
          <li class="drawer-menu__icon">
            <!-- <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a> -->
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="circle-bg"></div>

  </header>
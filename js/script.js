// 表示文字数制限して…を
const limit = document.querySelector(".current-item");
if (limit != null) {
  const str = limit.textContent;
  // const len = 50; // 半角50字（全角約25字）
  const len = 10; // 半角10字（全角5字）
  if (str.length > len) {
    limit.textContent = str.substring(0, len) + "…";
  }
}


// ハンバーガーメニュー
$(function () {

  $(".js-hamburger,.js-drawer,.js-drawer a").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
    $(".circle-bg").toggleClass('circleactive');
  });

});

// スワイパー
const swiper = new Swiper(".mv__slider", {
  direction: "vertical",
  loop: true,
  // effect: "fade",
  speed: 1000,
  allowTouchMove: false,
  autoplay: {
    delay: 5000,
  },
});

// ロード・スクロール時のアニメーション
$(function(){
  let winHeight,winScroll,scrollPos;
  $(window).on('load scroll',function(){
    winScroll = $(window).scrollTop();
    winHeight = $(window).height();
    scrollPos = winHeight * 0.9 + winScroll;
    $(".service__title, .works__title, .news__title, .lower-mv__title-wrapper").each(function(){
      if($(this).offset().top <= scrollPos){
        $(this).addClass("slide_show");
        // console.log("winScroll : " + winScroll)
        // console.log("winHeight : " + winHeight)
        // console.log("scrollPos : " + scrollPos)
        // console.log("top       : " + $(this).offset().top)
      }else{
        // $(this).removeClass("slide_show");
      }
    });

    $(".works__card-inner, .news__tab-button, .news__item, .lower-mv__block, .archive-works__item").each(function(){
      if($(this).offset().top <= scrollPos){
        $(this).addClass("fade_show");
        // console.log("winScroll : " + winScroll)
        // console.log("winHeight : " + winHeight)
        // console.log("scrollPos : " + scrollPos)
        // console.log("top       : " + $(this).offset().top)
      }else{
        // $(this).removeClass("fade_show");
      }
    });

  });
});

// タブ
$(function () {
  const tabButton = $(".js-tab-button"),
        tabContent = $(".js-tab-content");

  tabButton.on("click", function () {
    let index = tabButton.index(this);

    console.log("tab click")

    tabButton.removeClass("is-tab-active");
    $(this).addClass("is-tab-active");

    tabContent.removeClass("is-tab-active");
    tabContent.eq(index).addClass("is-tab-active");
  });
});

// スライド
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".infinite-slider", {
    loop: true,
    loopedSlides: 6,
    slidesPerView: "auto",
    speed: 8000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });
});


// スクロールにメニューを追従
(function(){
  const container = document.getElementById('news__container'); // コンテンツエリアを囲む要素
  const aside = document.getElementById('aside');         // サイドメニュー要素
  const offsetY = 20;  // ピッタリ上にくっつかないように少し余白を持たせる
  container.style.minHeight = aside.clientHeight + 'px';
  window.addEventListener('scroll',()=>{
    const containerRect = container.getBoundingClientRect();
    const isReachBottom = (aside,containerRect,offsetY)=>{
      if( aside.clientHeight < window.innerHeight ){
        if(containerRect.bottom <= aside.clientHeight + offsetY){
          return true;
        }else{
          return false;
        }
      }else{
        if(containerRect.bottom < window.innerHeight - offsetY){
          return true;
        }else{
          return false;
        }
      }
    }

    // console.log("containerRect.top : " + containerRect.top)

    // ↓↓↓↓↓図で説明↓↓↓↓
    if( isReachBottom(aside,containerRect,offsetY) ){
      // ①メインコンテンツの一番下までスクロールしたとき
      aside.classList.add('is-end');
      aside.classList.add('is-fixed');
      aside.style.left = '';
      // console.log("一番下まで到達  containerRect.top : " + containerRect.top)
    }else if( containerRect.top < offsetY ){
      // ②メインコンテンツ内をスクロールしているとき
      aside.classList.add('is-fixed');
      aside.classList.remove('is-end');
      aside.style.left = containerRect.left + 'px';
      // console.log("スクロール中    containerRect.top : " + containerRect.top)
    }else{
      // ③メインコンテンツより上をスクロールしているとき
      aside.classList.remove('is-fixed');
      aside.classList.remove('is-end');
      aside.style.left = '';
      // console.log("上             containerRect.top : " + containerRect.top)
    }
  });
})();




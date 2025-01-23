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

// 文字数制限
function truncateTitle(selector, pcMaxLength, spMaxLength) {
  var elements = document.querySelectorAll(selector);

  var currentDate = new Date();
  console.log(currentDate);

  elements.forEach(el => {
      var maxLength = window.innerWidth <= 768 ? spMaxLength : pcMaxLength;
      var text = el.innerText;

      console.log(text.length + "    " + text);

      if (text.length > maxLength) {
          el.innerText = text.substring(0, maxLength) + '...';
      }
  });
}

// TopページWorksセクションSP用文字列制限
function truncateTitleTopPage(selector, spMaxLength) {
  var elements = document.querySelectorAll(selector);

  if ( window.innerWidth <= 768 ) {
    elements.forEach(el => {
      var text = el.innerText;
      if (text.length > spMaxLength) {
        el.innerText = text.substring(0, spMaxLength) + '...';
    }
  });
  }
}

// 記事タイトル文字数制限
// PC表示は46文字、SP表示は24文字に制限
window.addEventListener('resize', function() {
  truncateTitle('.works-page__txt-limit2', 46, 24);
  truncateTitleTopPage('.top-page-sp-works-section__txt-limit', 24);
});

document.addEventListener('DOMContentLoaded', function() {
  truncateTitle('.works-page__txt-limit2', 46, 24);
  truncateTitleTopPage('.top-page-sp-works-section__txt-limit', 24);
});



function toggleClassForPC() {
  var widthThreshold = 768; // PC表示の幅
  var elements = document.querySelectorAll('.top-page-works-section__txt-limit');

  if (window.innerWidth > widthThreshold) {
      elements.forEach(function(el) {
          // el.classList.add('active');
          // el.classList.add('pc-only');
          el.classList.remove('none');
      });
  } else {
      elements.forEach(function(el) {
          // el.classList.remove('active');
          // el.classList.remove('pc-only');
          el.classList.add('none');
      });
  }
}

window.addEventListener('resize', toggleClassForPC);
document.addEventListener('DOMContentLoaded', toggleClassForPC);



// function truncateTitle(selector, maxLength) {
//   const elements = document.querySelectorAll(selector);
//   console.log("truncateTitle実行");
//   elements.forEach(el => {
//     console.log(el.innerText);
//     if (el.innerText.length > maxLength) {
//         el.innerText = el.innerText.substring(0, maxLength) + '...';
//     }
//   });
// }

// 使用例
// truncateTitle('.works-page__txt-limit2', 24); // 第２引数に指定した文字数以上の場合に省略
// truncateTitle('.works-page__txt-limit2', 46); // 第２引数に指定した文字数以上の場合に省略

// const limit2 = document.querySelector(".works-page__txt-limit2");
// if (limit2 != null) {
//   console.log("limit2 is not null");
//   const str2 = limit2.textContent;
//   console.log("str2 : 「" + str2 + "」");
//   const len2 = 6; // 半角20字（全角10字）
//   if (str2.length > len2) {
//     console.log("str2.length : " + str2.length);
//     console.log("len2        : " + len2);
//     limit2.textContent = str2.substring(0, len2) + "…";
//   }
// } else {
//   console.log("limit2 is null");
// }

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


// // スクロールにメニューを追従
// (function(){
//   // console.log("aaaaa")
//   const container = document.getElementById('news__container'); // コンテンツエリアを囲む要素
//   // console.log("bbbbb")
//   const aside = document.getElementById('aside');         // サイドメニュー要素
//   // console.log("ccccc")
//   const offsetY = 20;  // ピッタリ上にくっつかないように少し余白を持たせる
//   // console.log("ddddd")
//   container.style.minHeight = aside.clientHeight + 'px';
//   // console.log("eeeee")
//   window.addEventListener('scroll',()=>{
//     // console.log("fffff")
//     const containerRect = container.getBoundingClientRect();
//     const isReachBottom = (aside,containerRect,offsetY)=>{
//       if( aside.clientHeight < window.innerHeight ){
//         if(containerRect.bottom <= aside.clientHeight + offsetY){
//           return true;
//         }else{
//           return false;
//         }
//       }else{
//         if(containerRect.bottom < window.innerHeight - offsetY){
//           return true;
//         }else{
//           return false;
//         }
//       }
//     }

//     // console.log("containerRect.top : " + containerRect.top)

//     // ↓↓↓↓↓図で説明↓↓↓↓
//     if( isReachBottom(aside,containerRect,offsetY) ){
//       // ①メインコンテンツの一番下までスクロールしたとき
//       aside.classList.add('is-end');
//       aside.classList.add('is-fixed');
//       aside.style.left = '';
//       // console.log("一番下まで到達  containerRect.top : " + containerRect.top)
//     }else if( containerRect.top < offsetY ){
//       // ②メインコンテンツ内をスクロールしているとき
//       aside.classList.add('is-fixed');
//       aside.classList.remove('is-end');
//       aside.style.left = containerRect.left + 'px';
//       // console.log("スクロール中    containerRect.top : " + containerRect.top)
//     }else{
//       // ③メインコンテンツより上をスクロールしているとき
//       aside.classList.remove('is-fixed');
//       aside.classList.remove('is-end');
//       aside.style.left = '';
//       // console.log("上             containerRect.top : " + containerRect.top)
//     }
//   });
// })();




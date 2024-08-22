///////////////////////////////////////////
//ハンバーガーメニュー
//////////////////////////////////////////
$('.hambager').on('click', function () {
  navOpen();
});
let navFlg = false;
function navOpen() {
  if (!navFlg) {
    $('.hamberger-wrap').addClass('is-ham-open');
    $('.mega-menu').addClass('is-megamenu-open');
    $('.header').addClass('is-megamenu-header');
    $('.ham-txt').text('閉じる');
    navFlg = true;
  } else {
    $('.hamberger-wrap').removeClass('is-ham-open');
    $('.mega-menu').removeClass('is-megamenu-open');
    $('.header').removeClass('is-megamenu-header');
    $('.ham-txt').text('メニュー');
    navFlg = false;
  }
}

///////////////////////////////////////////
//ハンバーガーメニュー アコーディオン
///////////////////////////////////////////
$(document).ready(function() {
  $(".little-nav").hide();
  $(".nav01 .parent").on('click', function() {
    $(this).toggleClass('active');
    $(this).next('.little-nav').slideToggle(300);
  });
});


///////////////////////////////////////////
//スクロールフェードイン
///////////////////////////////////////////
const fadeIn = document.querySelectorAll(".fadeIn");
const options = {
  rootMargin: '0px',
  threshold: 0.6
};
const observer = new IntersectionObserver(showElement, options);
fadeIn.forEach((fadeIn) => {
  observer.observe(fadeIn);
});
function showElement(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
    }
  });
}


///////////////////////////////////////////
//FAQ アコーディオン
///////////////////////////////////////////
$(".qa-list dd").hide();
$(".qa-list dl").on("click", function(e){
    $('dd',this).slideToggle('fast');
    if($(this).hasClass('open')){
        $(this).removeClass('open');
    }else{
        $(this).addClass('open');
    }
});


//////////////////////////////////////////////////////////////////////////////
//各Swiperイベントの初期化
//////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', (event) => {

  //トップMVスライダー
  const swiper = new Swiper(".mv-swiper", {
    loop: true,
    effect: 'fade',
    speed: 2000, // ２秒かけながら次の画像へ移動
    autoplay: {
      delay: 4000, // ４秒後に次の画像へ
      disableOnInteraction: false, // ユーザー操作後に自動再生を再開する
    },
    allowTouchMove: false, // マウスでのスワイプを禁止
  });

  //TOP　無限スライダー
  const visualswiper = new Swiper(".slider-visual_wrap", {
    loop: true, // ループ有効
    slidesPerView: 1.3, // 一度に表示する枚数
    spaceBetween: 18,
    speed: 7000, // ループの時間
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
    },
    breakpoints: {
      769: {
        slidesPerView: 5.5,
      }
    },
  });

});


//////////////////////////////////////////////////////////////////////////////
//マウスホバーイベント
//////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.commmon-company_wrap .message a');

  links.forEach(function(link) {
    link.addEventListener('mouseenter', function() {
      document.querySelector('.commmon-company_wrap .block').classList.add('hover-bg01');
    });

    link.addEventListener('mouseleave', function() {
      document.querySelector(' .commmon-company_wrap .block').classList.remove('hover-bg01');
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.commmon-company_wrap .philosophy a');

  links.forEach(function(link) {
    link.addEventListener('mouseenter', function() {
      document.querySelector('.commmon-company_wrap .block').classList.add('hover-bg02');
    });

    link.addEventListener('mouseleave', function() {
      document.querySelector(' .commmon-company_wrap .block').classList.remove('hover-bg02');
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.commmon-company_wrap .info a');

  links.forEach(function(link) {
    link.addEventListener('mouseenter', function() {
      document.querySelector('.commmon-company_wrap .block').classList.add('hover-bg03');
    });

    link.addEventListener('mouseleave', function() {
      document.querySelector(' .commmon-company_wrap .block').classList.remove('hover-bg03');
    });
  });
});


////////////////////////////////////////////////////////////////////////////////////////
// GSAPアニメーション
///////////////////////////////////////////////////////////////////////////////////////
//順番にフェードイン
document.querySelectorAll('.fade_triger').forEach(trigger => {
  gsap.fromTo(trigger.querySelectorAll('.anime-fade'), 
    { opacity: 0, y: -10 }, 
    {
      opacity: 1,
      y: 0,
      duration: 1,
      stagger: 0.5, // 順番にフェードインする間隔
      scrollTrigger: {
        trigger: trigger,
        start: "top 50%", 
      }
    }
  );
});3

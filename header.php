<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <!-- favicon -->
  <!-- <link rel="icon" type="image/png" href="images/fav.png" /> -->
  <!-- <meta name="robots" content="index, follow"> -->
  <meta name="format-detection" content="telephone=no">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" >


  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">


  <title>なかや食材｜NAKAYA SHOKUZAI</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <div class="wrap-hidden">

    <header class="header">
      <div class="header-inner flex">
        <div class="logo img-box"><a href="<?php echo home_url('/'); ?>"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/logo01.svg" alt=""></div></a></div>
        <div class="header-nav">
          <nav>
            <ul>
              <li><a href="<?php echo home_url('/'); ?>/about">なかや食材について</a></li>
              <li><a href="<?php echo home_url('/'); ?>shop/">取扱商品</a></li>
              <!-- <li><a href="<?php echo home_url('/'); ?>">事業内容</a></li> -->
              <li><a href="<?php echo home_url('/'); ?>company/">会社案内</a></li>
              <li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
            </ul>
          </nav>
          <a class="header-tel" href="tel:098-878-7603">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.0914 15.015L15.9114 13.195C16.1566 12.9529 16.4667 12.7872 16.8042 12.718C17.1417 12.6488 17.4921 12.679 17.8127 12.805L20.0308 13.6907C20.3548 13.8222 20.6327 14.0467 20.8293 14.3359C21.026 14.625 21.1326 14.966 21.1358 15.3157V19.3782C21.1339 19.616 21.0839 19.8511 20.9888 20.0691C20.8937 20.2872 20.7554 20.4837 20.5824 20.6469C20.4093 20.8101 20.205 20.9366 19.9817 21.0188C19.7585 21.101 19.5209 21.1371 19.2833 21.125C3.7402 20.1582 0.603945 6.99566 0.0108204 1.95816C-0.0167128 1.71078 0.00844359 1.46038 0.0846346 1.22342C0.160826 0.986466 0.286324 0.768327 0.452875 0.583356C0.619426 0.398385 0.823253 0.250775 1.05095 0.150235C1.27864 0.0496955 1.52505 -0.00149432 1.77395 3.32061e-05H5.69832C6.04852 0.00106978 6.39039 0.10685 6.67998 0.30377C6.96957 0.500689 7.19362 0.779741 7.32332 1.10503L8.20895 3.32316C8.33915 3.64253 8.37237 3.99318 8.30445 4.33132C8.23654 4.66946 8.0705 4.98009 7.82707 5.22441L6.00707 7.04441C6.00707 7.04441 7.0552 14.1375 14.0914 15.015Z" fill="#0A0A0A"/>
            </svg>
            098-878-7603
          </a>
          <div class="header-btn_wrap">
            <div class="login-btn">
              <a href="<?php echo home_url('/my-account'); ?>">
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.5 11C14.6769 11 17.25 8.53875 17.25 5.5C17.25 2.46125 14.6769 0 11.5 0C8.32312 0 5.75 2.46125 5.75 5.5C5.75 8.53875 8.32312 11 11.5 11ZM11.5 13.75C7.66187 13.75 0 15.5925 0 19.25V20.625C0 21.3813 0.646875 22 1.4375 22H21.5625C22.3531 22 23 21.3813 23 20.625V19.25C23 15.5925 15.3381 13.75 11.5 13.75Z" fill="white"/>
                </svg>
                ログイン
              </a>
            </div><!-- /.login-btn -->
            <div class="cart-btn">
              <a href="<?php echo home_url('/cart'); ?>">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.125 18.25C18.7217 18.25 19.294 18.4871 19.716 18.909C20.1379 19.331 20.375 19.9033 20.375 20.5C20.375 21.0967 20.1379 21.669 19.716 22.091C19.294 22.5129 18.7217 22.75 18.125 22.75C17.5283 22.75 16.956 22.5129 16.534 22.091C16.1121 21.669 15.875 21.0967 15.875 20.5C15.875 19.2512 16.8762 18.25 18.125 18.25ZM0.125 0.25H3.80375L4.86125 2.5H21.5C21.7984 2.5 22.0845 2.61853 22.2955 2.82951C22.5065 3.04048 22.625 3.32663 22.625 3.625C22.625 3.81625 22.5687 4.0075 22.49 4.1875L18.4625 11.4663C18.08 12.1525 17.3375 12.625 16.4938 12.625H8.1125L7.1 14.4588L7.06625 14.5938C7.06625 14.6683 7.09588 14.7399 7.14863 14.7926C7.20137 14.8454 7.27291 14.875 7.3475 14.875H20.375V17.125H6.875C6.27826 17.125 5.70597 16.8879 5.28401 16.466C4.86205 16.044 4.625 15.4717 4.625 14.875C4.625 14.4813 4.72625 14.11 4.895 13.795L6.425 11.0388L2.375 2.5H0.125V0.25ZM6.875 18.25C7.47174 18.25 8.04403 18.4871 8.46599 18.909C8.88795 19.331 9.125 19.9033 9.125 20.5C9.125 21.0967 8.88795 21.669 8.46599 22.091C8.04403 22.5129 7.47174 22.75 6.875 22.75C6.27826 22.75 5.70597 22.5129 5.28401 22.091C4.86205 21.669 4.625 21.0967 4.625 20.5C4.625 19.2512 5.62625 18.25 6.875 18.25ZM17 10.375L20.1275 4.75H5.9075L8.5625 10.375H17Z" fill="white"/>
                </svg>
                カート
              </a>
            </div><!-- /.cart-btn -->
            <div class="hamberger-wrap">
              <div class="ham-inner">
                <div class="hambager-content">
                  <button type="button" class="hambager">
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                  </button>
                </div><!-- /.hambager-content -->
                <p class="ham-txt">メニュー</p>
              </div>
            </div><!-- hamberger-wrap -->
          </div>
        </div><!-- /.header-nav -->
      </div><!-- /.header-inner-->
    </header>

    <div class="mega-menu">
      <div class="mega-menu_inner">
        <div class="logo img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/logo01.svg" alt=""></div>
        <div class="nav-area flex">
          <div class="left">
            <nav>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo home_url('/'); ?>about/">なかや食材について</a></li>
                <li><a href="<?php echo home_url('/'); ?>shop/">取扱商品</a></li>
                <!-- <li><a href="<?php echo home_url('/'); ?>">事業内容</a></li> -->
                <li>
                  <a class="parent" href="<?php echo home_url('/'); ?>company/">会社概要</a>
                  <!-- <div class="little-nav">
                    <ul>
                      <li><a href="#">経営者メッセージ</a></li>
                      <li><a href="#">経営理念</a></li>
                      <li><a href="#">会社概要・アクセス</a></li>
                    </ul>
                  </div> -->
                </li>
              </ul>
            </nav>
          </div><!-- /.left -->
          <div class="right">
            <nav>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>/news/">新着情報</a></li>
                <li><a href="<?php echo home_url('/'); ?>/faq/">よくあるご質問</a></li>
                <li><a href="<?php echo home_url('/'); ?>/contact/">お問い合わせ</a></li>
              </ul>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>/term/">特定商取引法に基づく表記</a></li>
                <li><a href="<?php echo home_url('/'); ?>/policy/">プライバシーポリシー</a></li>
              </ul>
            </nav>
          </div><!-- /.right -->
        </div><!-- /.nav-area -->

        <div class="tel-contact flex">
          <a href="tel:098-878-7603">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.0914 15.015L15.9114 13.195C16.1566 12.9529 16.4667 12.7872 16.8042 12.718C17.1417 12.6488 17.4921 12.679 17.8127 12.805L20.0308 13.6907C20.3548 13.8222 20.6327 14.0467 20.8293 14.3359C21.026 14.625 21.1326 14.966 21.1358 15.3157V19.3782C21.1339 19.616 21.0839 19.8511 20.9888 20.0691C20.8937 20.2872 20.7554 20.4837 20.5824 20.6469C20.4093 20.8101 20.205 20.9366 19.9817 21.0188C19.7585 21.101 19.5209 21.1371 19.2833 21.125C3.7402 20.1582 0.603945 6.99566 0.0108204 1.95816C-0.0167128 1.71078 0.00844359 1.46038 0.0846346 1.22342C0.160826 0.986466 0.286324 0.768327 0.452875 0.583356C0.619426 0.398385 0.823253 0.250775 1.05095 0.150235C1.27864 0.0496955 1.52505 -0.00149432 1.77395 3.32061e-05H5.69832C6.04852 0.00106978 6.39039 0.10685 6.67998 0.30377C6.96957 0.500689 7.19362 0.779741 7.32332 1.10503L8.20895 3.32316C8.33915 3.64253 8.37237 3.99318 8.30445 4.33132C8.23654 4.66946 8.0705 4.98009 7.82707 5.22441L6.00707 7.04441C6.00707 7.04441 7.0552 14.1375 14.0914 15.015Z" fill="#0A0A0A"/>
            </svg>
            098-878-7603
          </a>
          <p>受付時間：8:30〜17:30（土日祝休）</p>
        </div><!-- tel-contact -->

      </div><!-- /.mega-menu_inner -->
    </div><!-- /.mega-menu -->
<?php get_header(); ?>

    <main>

      <div class="mv">
        <div class="mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv01.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv01.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide-->
            <div class="swiper-slide img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv02.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv02.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide-->
            <div class="swiper-slide img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv03.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv03.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide-->
            <div class="swiper-slide img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv04.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv04.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide-->
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.mv-swiper -->
        <h1>
          時代をつくり、<br>
          食文化を支え、<br>
          沖縄を育む。
        </h1>
        <p>
          沖縄がまだドル社会だった頃に生まれた、なかや食材。<br>
          ものがない時代の食文化を支え、沖縄の製パン・製菓業界とともに成長していきました。<br>
          この先も、私たちだからできる繋がりとご提案で沖縄の食を支え、未来を育んでいきます。
        </p>
      </div><!-- /.mv -->

      <section class="p-top_wrap01">
        <div class="inner flex">
          <div class="left">
            <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/top-about_img01.png" alt=""></div>
            <div class="btn-wrap u-sp"><a class="btn01" href="about.html">私たちについて詳しく見る</a></div>
          </div><!-- /.left -->
          <div class="right fadeIn">
            <p class="sub-ttl">About</p>
            <h2>
              1968年創業。<br>
              沖縄の製菓製パン材料、<br>
              業務用機械なら<br>
              なかや食材
            </h2>
            <p>沖縄県内で親しまれている「なかや食材」は、製菓・製パン・製麺材料や業務用機械の卸売を行っています。豊富な品揃えと丁寧な対応で、地元のプロの皆様をしっかりとサポート。お客様の発展にお力添えできるよう、信頼できる商品とサービスをお届けします。</p>
            <div class="btn-wrap u-pc"><a class="btn01" href="<?php echo home_url('/'); ?>about">私たちについて詳しく見る</a></div>
          </div><!-- /.right -->
        </div>
      </section><!-- /.p-top_wrap01 -->

      <section class="p-top_wrap02">
        <div class="inner">

          <div class="head-ttl fadeIn">
            <div class="flex">
              <p class="sub-ttl">Our Services</p>
              <!-- <div class="btn-wrap u-pc"><a class="btn01" href="#">事業内容を見る</a></div> -->
            </div>
            <h2>事業内容</h2>
          </div><!-- /.head-ttl -->

          <div class="block flex">
            <div class="box fadeIn">
              <div class="number">01</div>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-service_img01.jpg" alt=""></div>
              <p>商品仕入れ</p>
            </div><!-- /.box-->
            <div class="box fadeIn">
              <div class="number">02</div>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-service_img02.jpg" alt=""></div>
              <p>営業販売</p>
            </div><!-- /.box-->
            <div class="box fadeIn">
              <div class="number">03</div>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-service_img03.jpg" alt=""></div>
              <p>物流配送</p>
            </div><!-- /.box-->
            <!-- <div class="btn-wrap u-sp"><a class="btn01" href="#">事業内容を見る</a></div> -->
          </div><!-- /.block -->

        </div><!-- /.inner -->
      </section><!-- /.p-top_wrap02 -->

      <section class="p-top_wrap03 event-none">
        <div class="inner">

          <div class="head-ttl fadeIn">
            <p class="sub-ttl">Line Up</p>
            <h2>取扱商品</h2>
          </div><!-- /.head-ttl -->

          <div class="block fadeIn u-pc">
            <h3>製菓・製パン・製麺原材料</h3>
            <div class="cate-list flex">
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">生クリーム</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">バター・チーズ・油脂類</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">チョコレート類</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">小麦粉・粉類</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">加工フルーツ・ナッツ類</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">あん・和菓子材料</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">リキュール・濃縮エキス類</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_01">その他</a>
            </div>
          </div><!-- .block -->
          <div class="block u-sp">
            <a href="archive-product.html">
              <h3>製菓・製パン・製麺原材料</h3>
            </a>
          </div>
          <div class="block fadeIn u-pc">
            <h3>包装資材、オーナメント、品質保持剤</h3>
            <div class="cate-list flex">
              <a href="<?php echo home_url('/'); ?>product-category/parent_02">袋・箱</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_02">容器・トレー・オーナメント</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_02">品質保持剤・その他</a>
            </div>
          </div><!-- .block -->
          <div class="block u-sp">
            <a href="archive-product.html">
              <h3>包装資材、オーナメント、品質保持剤</h3>
            </a>
          </div>
          <div class="block fadeIn u-pc">
            <h3>食品製造機全般</h3>
            <div class="cate-list flex">
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">オーブン</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">ミキサー・製パン機械</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">ショーケース</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">急速冷却・冷凍</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">成形･加工機械</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">包装・各種自動ライン</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">厨房設備(冷蔵庫他)</a>
              <a href="<?php echo home_url('/'); ?>product-category/parent_03">厨房設備(板金物)</a>
            </div>
          </div><!-- .block -->
          <div class="block u-sp">
            <a href="archive-product.html">
              <h3>食品製造機全般</h3>
            </a>
          </div>

        </div><!-- /.inner -->
      </section><!-- /.p-top_wrap03 -->

      <div class="to-b_banner fadeIn">
        <div class="inner">
          <a href="<?php echo home_url('/'); ?>shop">
            <div class="img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/top-banner01_sp.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top-banner01.jpg" alt="">
              </picture>
            </div>
            <div class="btn01">商品一覧を見る</div>
            <p>仕入れご希望の方はこちら</p>
          </a>
        </div>
      </div><!-- /.to-b_banner-->

      <div class="slider-visual_wrap fadeIn">
        <div class="swiper-wrapper">
          <div class="swiper-slide img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-img01.jpg" alt=""></div>
          <div class="swiper-slide img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-img02.jpg" alt=""></div>
          <div class="swiper-slide img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-img03.jpg" alt=""></div>
          <div class="swiper-slide img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-img04.jpg" alt=""></div>
          <div class="swiper-slide img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-img05.jpg" alt=""></div>
        </div>
      </div><!-- /.sec-visual-swiper -->

      <div class="commmon-company_wrap fadeIn">
        <div class="inner">
          <div class="block flex">
            <div class="left">
              <p class="sub-ttl">Company</p>
              <h3>会社案内</h3>
              <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>company">会社案内を見る</a></div>
            </div><!-- /.left -->
            <div class="right">
              <!-- <div class="box message">
                <a href="#">経営者メッセージ</a>
              </div>
              <div class="box philosophy">
                <a href="#">経営理念</a>
              </div> -->
              <div class="box info">
                <a href="<?php echo home_url('/'); ?>company">会社概要・アクセス</a>
              </div>
            </div><!-- /.right -->
          </div><!-- /.block -->
        </div><!-- /.inner -->
      </div><!-- /.commmon-company_wrap -->

      <div class="commmon-news_wrap">
        <div class="inner flex">
          <div class="left fadeIn">
            <p class="sub-ttl">News</p>
            <h3>新着情報</h3>
            <div class="btn-wrap u-pc"><a class="btn01" href="<?php echo home_url('/'); ?>news">一覧を見る</a></div>
          </div><!-- /.left -->
          <div class="right">

          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <dl class="fadeIn">
              <a href="<?php the_permalink(); ?>">
                <dt>
                  <span class="time"><?php echo get_the_date(); ?></span>
                  <span class="cate">
                    <?php 
                      $categories = get_the_category();
                      if (!empty($categories)) {
                          echo esc_html($categories[0]->name);
                      }
                    ?>
                  </span>
                </dt>
                <dd><?php the_title(); ?></dd>
              </a>
            </dl>
          <?php endwhile;endif;wp_reset_query(); ?>
          
          </div><!-- /.right -->
          <div class="btn-wrap u-sp fadeIn"><a class="btn01" href="<?php echo home_url('/'); ?>news">一覧を見る</a></div>
        </div>
      </div><!-- /.commmon-news_wrap -->

<?php get_footer(); ?>
<?php get_header(); ?>
<main>

<div class="p-under_mv p_archive-product">
  <div class="img-box obj-fit">
    <picture>
      <source srcset="images/p-under-mv_sp.jpg" media="(max-width: 769px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_pc.jpg" alt="">
    </picture>
  </div>
  <h1>取扱商品<br class="u-sp">-全ての商品</h1>
  <p>Line up</p>
</div><!-- /.mv -->

<section class="p-archive-product_wrap01">
  <div class="inner">

    <div class="child-cate">
      <h3>全ての商品</h3>
      <?php
      defined( 'ABSPATH' ) || exit;

      // 商品情報を取得するクエリを設定
      $args = array(
          'post_type' => 'product',
          'posts_per_page' => -1,
      );

      // WP_Query を使って商品情報を取得
      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ) : ?>
      
        <ul>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="img-box obj-fit">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full' ); ?>
                  <?php else : ?>
                    <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                </div>
                <p><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p>該当の商品が存在しません。</p>
      <?php endif; ?>
    </div>

  </div><!-- /.inner -->
</section><!-- /.p-archive-product_wrap01 -->
<?php get_footer(); ?>



<div class="child-cate">
  <h3>生クリーム</h3>
  <?php
  defined( 'ABSPATH' ) || exit;

  // 商品情報を取得するクエリを設定
  $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
  );

  // WP_Query を使って商品情報を取得
  $loop = new WP_Query( $args );

  if ( $loop->have_posts() ) : ?>
  
    <ul>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="img-box obj-fit">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full' ); ?>
              <?php else : ?>
                <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </div>
            <p><?php the_title(); ?></p>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p>該当の商品が存在しません。</p>
  <?php endif; ?>
</div>
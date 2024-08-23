<?php get_header(); ?>
<main>

<div class="p-under_mv p_archive-product">
  <div class="img-box obj-fit">
    <picture>
      <source srcset="images/p-under-mv_sp.jpg" media="(max-width: 769px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_pc.jpg" alt="">
    </picture>
  </div>
  <!-- <h1>取扱商品<br class="u-sp">-カテゴリ名</h1> -->
  <h1>
    取扱商品<br class="u-sp">
    <?php
      // 現在のクエリからカテゴリ情報を取得
      $category = get_queried_object();
      // カテゴリ名を表示
      echo '-' . esc_html($category->name);
    ?>
  </h1>
  <p>Line up</p>
</div><!-- /.mv -->


<section class="p-archive-product_wrap01">
  <div class="inner">
    <?php
    defined( 'ABSPATH' ) || exit;

    // 現在のカテゴリーを取得
    $current_category = get_queried_object();

    // 現在表示しているカテゴリーが親カテゴリーの一つであるか確認
    if (in_array($current_category->slug, ['parent_01', 'parent_02', 'parent_03'])) {
      // 親カテゴリーに属する子カテゴリーを取得
      $child_categories = get_terms([
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'parent' => $current_category->term_id
      ]);

      foreach ($child_categories as $child_category) {
        // WP_Query を使って商品情報を取得
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'product_cat',
              'field' => 'id',
              'terms' => $child_category->term_id,
            ),
          ),
        );
        $loop = new WP_Query($args);

        if ($loop->have_posts()) : ?>
          <div class="child-cate">
            <h3><?php echo esc_html($child_category->name); ?></h3>
            <ul>
              <?php while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="img-box obj-fit">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
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
          </div>
        <?php endif; ?>
      <?php }
    }
    ?>
  </div><!-- /.inner -->
</section><!-- /.p-archive-product_wrap01 -->


<?php get_footer(); ?>
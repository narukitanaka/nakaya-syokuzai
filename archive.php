<?php get_header(); ?>
<main>

<div class="p-under_mv">
  <div class="img-box obj-fit">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_sp.jpg" media="(max-width: 769px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_pc.jpg" alt="">
    </picture>
  </div>
  <h1>新着情報</h1>
  <p>News</p>
</div><!-- /.mv -->

<section class="p-archive-news_wrap01">
  <div class="inner">

    <aside class="archive-news_cate">
      <ul>
        <li>
          <!-- <a class="active" href="<?php echo home_url('/'); ?>/news/">すべて</a> -->
          <a class="<?php if (!is_category()) echo 'active'; ?>" href="<?php echo home_url('/'); ?>/news/">すべて</a>
        </li>
        <?php 
          $current_category_id = get_queried_object_id(); // 現在表示中のカテゴリーのidを取得
          $args = array(
            'hide_empty' => true, // 投稿のないカテゴリーは除外
          );
          $categories = get_categories($args); // $args を引数として渡す
          // カテゴリーの説明を数値として比較しソート
          usort($categories, function($a, $b) {
            return intval($a->description) - intval($b->description);
          });
          foreach($categories as $category) {
            $class = ( $current_category_id == $category->term_id ) ? 'active' : ''; // 取得したidと各カテゴリーのidを比較して重なるidがあれば$classに.activeを付与。
            echo '<li><a class="' . $class . '" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
          }
        ?>
      </ul>
    </aside>

    <div class="archive-news_wrap">
      <div class="archive-contents">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <dl>
            <a href="<?php the_permalink(); ?>">
              <dt>
                <span class="time">
                  <?php echo get_the_date(); ?>
                </span>
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
      </div><!-- /.archive-contents -->

      <?php
      $args = array(
          'mid_size' => 1,
          'prev_text' => '&lt;',
          'next_text' => '&gt;',
          'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>

    </div>

  </div><!-- /.inner -->
</section><!-- /.p-archive-news_wrap01 -->
<?php get_footer(); ?>
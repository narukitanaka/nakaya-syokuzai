<?php get_header(); ?>

<main>

<section class="p-single-news_wrap01">
  <div class="inner">

    <div class="single-head">
      <h1><?php the_title(); ?></h1>
      <div>
        <span class="time"><?php echo get_the_date(); ?></span>
        <span class="cate">
        <?php 
          $categories = get_the_category();
          if (!empty($categories)) {
            echo esc_html($categories[0]->name);
          }
        ?>
        </span>
      </div>
    </div><!-- /.single-head -->

    <div class="news-contents">

      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
          the_content();?>
      <?php
        endwhile;
        endif;
      ?>

    </div><!-- /.news-contents-->

    <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>/news/">新着情報一覧に戻る</a></div>

  </div><!-- /.inner -->
</section><!-- /.p-single-news_wrap01 -->

<?php get_footer(); ?>
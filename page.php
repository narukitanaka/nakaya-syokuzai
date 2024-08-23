<?php get_header(); ?>

<main>

<div class="p-under_mv">
  <div class="img-box obj-fit">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_sp.jpg" media="(max-width: 769px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_pc.jpg" alt="">
    </picture>
  </div>
  <?php if ( is_page('cart') ) : ?>
    <h1>カート</h1>
    <p>Cart</p>
  <?php elseif ( is_page('checkout') ) : ?>
    <h1>購入手続き</h1>
    <p>Purchase Procedure</p>
  <?php elseif ( is_page('my-account') ) : ?>
      <h1>マイページ</h1>
      <p>My Page</p>
  <?php else : ?>
    <h1><?php the_title(); ?></h1>
  <?php endif; ?>
</div><!-- /.mv -->

<section <?php if ( is_page('cart') || is_page('checkout') || is_page('my-account') ): ?>class="p-woocommerce"<?php endif; ?>>
  <div class="inner">
    <?php the_content(); ?>
  </div>
</section>



<?php get_footer(); ?>
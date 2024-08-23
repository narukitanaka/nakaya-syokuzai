<?php get_header(); ?>
<main>

<div class="p-under_mv">
  <div class="img-box obj-fit">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_sp.jpg" media="(max-width: 769px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/p-under-mv_pc.jpg" alt="">
    </picture>
  </div>
  <h1>お問い合わせ</h1>
  <p>CONTACT</p>
</div><!-- /.mv -->

<section class="p-contact_wrap01">
  <div class="inner">

    <div class="contact-tel">
      <p>お電話から</p>
      <a href="tel:098-878-7603"><img src="images/icon-tel02.svg" alt="">098-878-7603</a>
      <p class="business-hours">【営業時間】平日：AM9:00~​PM5:00</p>
    </div>

    <div class="form_wrap">
      <h3>フォームから</h3>
      <?php echo do_shortcode('[contact-form-7 id="7744817" title="お問い合わせ"]'); ?>
    </div>

  </div>
</section><!-- /.p-contact_wrap01 -->
<?php get_footer(); ?>
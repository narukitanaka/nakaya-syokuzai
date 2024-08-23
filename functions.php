<?php
/////////////////////////////////////////
// WooCommerce
/////////////////////////////////////////
// WooCommerceサポート宣言
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

//商品一覧ページのテンプレートフィルターを追加
function use_archive_product_template_for_shop($template) {
  if (is_page('shop')) {
      $new_template = locate_template(array('archive-product.php'));
      if ('' != $new_template) {
          return $new_template ;
      }
  }
  return $template;
}
add_filter('template_include', 'use_archive_product_template_for_shop');

// カテゴリ別商品一覧ページのテンプレートフィルターを追加
add_filter( 'template_include', 'force_taxonomy_template', 99 );

function force_taxonomy_template( $template ) {
    if ( is_tax( 'product_cat' ) ) {
        $new_template = get_template_directory() . '/taxonomy-product_cat.php';
        if ( file_exists( $new_template ) ) {
            return $new_template;
        }
    }
    return $template;
}

//カートボタンの処理
function custom_add_to_cart() {
  $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['add-to-cart']));
  $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
  $variation_id = 0;
  $variations = array();

  $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
  $product_status = get_post_status($product_id);

  if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variations) !== false) {
      do_action('woocommerce_ajax_added_to_cart', $product_id);

      if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
          wc_add_to_cart_message(array($product_id => $quantity), true);
      }

      WC_AJAX::get_refreshed_fragments();
  } else {
      $data = array(
          'error' => true,
          'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
      );

      echo wp_send_json($data);
  }

  wp_die();
}
add_action('wp_ajax_woocommerce_add_to_cart', 'custom_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'custom_add_to_cart');



/////////////////////////////////////////
//お知らせ（通常の投稿）
/////////////////////////////////////////
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
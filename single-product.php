<?php get_header(); ?>
<main>

      <section class="p-single-product_wrap01">
        <div class="inner">
          <div class="item-content">
      
            <div class="img-content">
              <div class="img-wrapper">
                <div class="swiper-item">

                  <div class="swiper-wrapper">
                    <?php
                    global $product;
                    if (!is_a($product, 'WC_Product')) {
                      $product = wc_get_product(get_the_ID());
                    }
                    $image_ids = $product->get_gallery_image_ids();
                    if (!empty($image_ids)) {
                      foreach ($image_ids as $image_id) {
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="swiper-slide">
                          <div class="img-wrap">
                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                          </div>
                        </div>
                        <?php
                      }
                    }
                    ?>
                  </div><!-- /.swiper-wrapper -->

                </div><!-- /.swiper-item -->

                <div class="thumb-list">
                  <?php
                  global $product;
                  if (!is_a($product, 'WC_Product')) {
                    $product = wc_get_product(get_the_ID());
                  }
                  $image_ids = $product->get_gallery_image_ids();
                  if (!empty($image_ids)) {
                    $counter = 1; // ループカウンターを初期化
                    foreach ($image_ids as $image_id) {
                      $image_url = wp_get_attachment_image_url($image_id, 'full');
                      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                      ?>
                      <div class="thumb-item">
                        <a class="thumb-link" href="javascript:void(0);" onclick="thumbnail(<?php echo $counter; ?>)">
                          <img src="<?php echo esc_url($image_url); ?>" alt="">
                        </a>
                      </div>
                      <?php
                      $counter++; // カウンターをインクリメント
                    }
                    }
                    ?>
                </div><!-- /.thumb-list -->

              </div><!-- /.img-wrapper -->
            </div><!-- /.img-content -->

            <div class="detail-content">

            <p class="cate">
              <?php 
                global $product;
                if (!is_a($product, 'WC_Product')) {
                  $product = wc_get_product(get_the_ID());
                }
                $terms = get_the_terms($product->get_id(), 'product_cat'); // 商品のカテゴリーを取得
                $categories = [];
                if (!empty($terms) && !is_wp_error($terms)) {
                  foreach ($terms as $term) {
                    // スラッグが 'all' または 'parent' を含む場合を除外
                    if ($term->slug !== 'all' && strpos($term->slug, 'parent') === false) {
                      $categories[] = $term->name;
                    }
                  }
                  echo implode(', ', $categories); // カテゴリ名をカンマ区切りで表示
                }
              ?>
            </p>

              <p class="name"><?php echo get_the_title(); ?></p>

              <p class="price">¥0,000<span>(税込)</span></p>

              <?php global $product; ?>
              <div class="item-count">
                <form id="add-to-cart-form" action="" method="post">
                  <div class="product-quantity">
                    <button type="button" id="minus" class="minus">ー</button>
                    <input type="number" id="quantity" name="quantity" min="1" value="1">
                    <button type="button" id="plus" class="plus">＋</button>
                  </div>
                  <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">
                  <div class="cart-btn-wrapper">
                    <button type="submit" class="cart-btn">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.125 18.25C18.7217 18.25 19.294 18.4871 19.716 18.909C20.1379 19.331 20.375 19.9033 20.375 20.5C20.375 21.0967 20.1379 21.669 19.716 22.091C19.294 22.5129 18.7217 22.75 18.125 22.75C17.5283 22.75 16.956 22.5129 16.534 22.091C16.1121 21.669 15.875 21.0967 15.875 20.5C15.875 19.2512 16.8762 18.25 18.125 18.25ZM0.125 0.25H3.80375L4.86125 2.5H21.5C21.7984 2.5 22.0845 2.61853 22.2955 2.82951C22.5065 3.04048 22.625 3.32663 22.625 3.625C22.625 3.81625 22.5687 4.0075 22.49 4.1875L18.4625 11.4663C18.08 12.1525 17.3375 12.625 16.4938 12.625H8.1125L7.1 14.4588L7.06625 14.5938C7.06625 14.6683 7.09588 14.7399 7.14863 14.7926C7.20137 14.8454 7.27291 14.875 7.3475 14.875H20.375V17.125H6.875C6.27826 17.125 5.70597 16.8879 5.28401 16.466C4.86205 16.044 4.625 15.4717 4.625 14.875C4.625 14.4813 4.72625 14.11 4.895 13.795L6.425 11.0388L2.375 2.5H0.125V0.25ZM6.875 18.25C7.47174 18.25 8.04403 18.4871 8.46599 18.909C8.88795 19.331 9.125 19.9033 9.125 20.5C9.125 21.0967 8.88795 21.669 8.46599 22.091C8.04403 22.5129 7.47174 22.75 6.875 22.75C6.27826 22.75 5.70597 22.5129 5.28401 22.091C4.86205 21.669 4.625 21.0967 4.625 20.5C4.625 19.2512 5.62625 18.25 6.875 18.25ZM17 10.375L20.1275 4.75H5.9075L8.5625 10.375H17Z" fill="white"/>
                      </svg>
                      カートに入れる
                    </button>
                  </div>
                </form>
              </div> <!-- /.item-count -->
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var quantityInput = document.getElementById('quantity');
                  var minusButton = document.getElementById('minus');
                  var plusButton = document.getElementById('plus');
                  var addToCartForm = document.getElementById('add-to-cart-form');

                  minusButton.addEventListener('click', function() {
                    var currentVal = parseInt(quantityInput.value, 10);
                    if (currentVal > 1) {
                      quantityInput.value = currentVal - 1;
                    }
                  });

                  plusButton.addEventListener('click', function() {
                    var currentVal = parseInt(quantityInput.value, 10);
                    quantityInput.value = currentVal + 1;
                  });

                  addToCartForm.addEventListener('submit', function(event) {
                    event.preventDefault();

                    var formData = new FormData(addToCartForm);
                    formData.append('action', 'woocommerce_add_to_cart');

                    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                      method: 'POST',
                      body: formData,
                      credentials: 'same-origin'
                    })
                    .then(response => response.json())
                    .then(data => {
                      if (data.error && data.product_url) {
                        window.location = data.product_url;
                        return;
                      }
                      // カートに商品が正常に追加された場合の処理
                      alert('商品がカートに追加されました');
                      // カートの内容を更新する（必要に応じて）
                      // location.reload(); // ページをリロードする場合
                    })
                    .catch(error => {
                      console.error('Error:', error);
                    });
                  });
                });
              </script>

              <p class="txt">
                【商品説明】<br>
                <?php echo wp_kses_post(nl2br($product->get_description())); ?>
              </p>

            </div><!-- /.detail-content -->

          </div><!-- /.item-content -->
        </div><!-- /.inner -->
      </section><!-- /.p-about_wrap01 -->

      <?php get_footer(); ?>
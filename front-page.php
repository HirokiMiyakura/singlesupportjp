<?php get_header('front'); ?>
<main role="main">
<!-- section -->
<section id="">
<p>
<a href="<?php echo home_url(); ?>/gototravel/">
  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top/main_pc.png" alt="" />
  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top/main_sp.png" alt="" />
</a>
</p>

<div class="twoContainer">
  <div class="twoContainer__Item" style="box-shadow: none;">
    <a href="<?php echo home_url(); ?>/contact/">
      <button id="toContact" style="width: 100%;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/goto/contact.png" alt="" />
      </button>
    </a>
  </div>
  <div class="twoContainer__Item" style="box-shadow: none;">
    <button id="openModal" class="openModal" style="width: 100%;">
      <img src="<?php echo get_template_directory_uri(); ?>/img/goto/price.png" alt="" />
    </button>
  </div>
</div>

</section>
<!-- /section -->

<!-- モーダルエリアここから -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper">
    <div class="modalContents">
      <ul class="scrollModal">
        <?php
        $args = array(
          'posts_per_page' => 50, // 表示する投稿数
          'post_type' => 'dmodelplan', // 取得する投稿タイプのスラッグ
          'orderby' => 'date', //日付で並び替え
          'order' => 'DESC' // 降順 or 昇順
        );
        $my_posts = get_posts($args);
        ?>
        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
          <li>
            <a href="<?php echo get_permalink($post->ID); ?>">

              <?php
              // ターム名を表示
              $terms = get_the_terms($post->ID, 'tax_name_1'); // タームが所属するタクソノミースラッグを指定
              if (!empty($terms)) { // タームが複数選択されていたらカンマ区切りで表示
                $output = array();
                foreach ($terms as $term) {
                  if ($term->parent != 0)
                    $output[] = $term->name;
                }
                if (count($output)) {
                  echo '<span class="term">' . join(", ", $output) . '</span>';
                } else {
                  echo '<span class="term">' . $term->name . '</span>';
                }
              }
              ?>
              <p>
                <?php echo get_the_title($post->ID); ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

    </div>
    <div id="closeModal" class="closeModal">
      ×
    </div>
  </div>
</section>
<!-- モーダルエリアここまで -->

<!-- section -->
<section id="">
<p>
<a href="<?php echo home_url(); ?>/realestate/">
  <img src="<?php echo get_template_directory_uri(); ?>/img/top/estate_main.png" alt="" />
</a>
</p>
<p class="cv_green">
<a href="<?php echo home_url(); ?>/realestate/contact/index.html">
  <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/top/estate_cv.png" alt="" /> -->
  お問い合わせ
</a>
</p>
</section>
<!-- /section -->

<!-- section -->
<section id="">
<p>
<a href="<?php echo home_url(); ?>/ending/">
  <img src="<?php echo get_template_directory_uri(); ?>/img/top/ending_main.png" alt="" />
</a>
</p>
<p class="cv_green">
<a href="<?php echo home_url(); ?>/ending/contact/index.html">
  <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/top/ending_cv.png" alt="" /> -->
  お問い合わせ
</a>
</p>
</section>
<!-- /section -->

<section id="basicInfomation">
<h3>
<a href="<?php echo home_url(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/logo.svg" alt="Single Support" />
</a>
</h3>
<p>
<span>シングルサポート株式会社（Single Support Co.Ltd）</span><br>
〒150-0002 東京都渋谷区渋谷1-3-18 ビラモデルナA210<br>
TEL:03-3498-9231 FAX:03-3498-9281<br>
旅行業　東京都知事登録旅行業第3-7669号<br>
宅地建物取引業　東京都知事（１）第102662号
</p>
</section>
</main>
<?php get_footer('front'); ?>
<script>
jQuery(function($){
$(function () {
  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });
});
});
</script>
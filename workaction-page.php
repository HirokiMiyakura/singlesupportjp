<?
/*
Template Name: ワーケーションページ（workation-page.php）
*/
get_header(); 
?>
<main role="main">
<div>
  <p class="pc main_image"><img src="<?php echo get_template_directory_uri(); ?>/img/workation/main_pc.png" alt="" /></p>
  <p class="sp main_image"><img src="<?php echo get_template_directory_uri(); ?>/img/workation/main_sp.png" alt="" /></p>
</div>

<article class="workation_outer">
  <section>
    <div class="sp workation_space"></div>
    <h1 class="workation_title">Withコロナ時代の新しいライフスタイルの中でのテレワークやリモートワークの普及にともない、新しい「働き方」や「暮らし方」の選択が可能になってきています。
中でも休暇と併用して旅先で仕事をする「ワーケーション」が注目されています。ワーケーションは、「ワーク」（労働）と「バケーション」（休暇）を組み合わせた造語で、観光地やリゾート地で休暇を取りながらテレワーク・リモートワークをする新しい働き方です。</h1>
  </section>
  <section class="workation_section">
    <div class="business_container reverse">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/workation/image1.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>自宅とリゾート地など行き来をして「ワーケーション」を楽しみながら、気に入ったところが見つかれば、「ロングスティ（長期滞在）」「ショートスティ（短期滞在）」をしてみる。また、実際に住んでみたいと思った時には、お気に入りの賃貸物件や売買物件をさがして「プチ移住」や「移住」をしてみるなど、さまざまなライフスタイルの選択が可能な時代になりました。<br><br>
ただ、滞在先の情報収集をしていざ契約をしようとする際には、施設の運営や法令の定めにより各施設の契約条件や契約形態が異なる場合があります。</p>
      </div>
    </div>
  </section>
  <section class="workation_section">
    <div class="business_container">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/workation/image2.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>シングルサポートでは、旅行業（東京都知事登録）と宅地建物取引業（東京都免許）事業をおこなっております。お客様の希望やライフスタイルをお聞きし、アドバイスをしながら、旅行業と不動産・宅地建物取引業情報の中から、お客様のご希望に応じた「ワーケーション」、「ロングスティ（長期滞在）」、「ショートステイ（短期滞在）」、「プチ移住」、「移住」物件をお探ししています。また、契約についても各施設に準じて旅行契約、定期賃貸借契約、普通賃貸借契約など旅行業、宅地建物取引業にて定められている各契約にておこなっています。</p>
      </div>
    </div>
  </section>
  <section class="workation_section">
    <div class="business_container reverse">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/workation/image3.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>下記の「お問い合わせ」よりお問い合わせください。ホテル、旅館、古民家、民泊施設、ウィークリーマンション、マンスリーマンション、リゾートマンション、賃貸・売買マンション、戸建などでのワーケーション、短期滞在から長期滞在、移住などのご相談に応じています。</p>
      </div>
    </div>
  </section>
  <section class="workation_section">
    <p class="cv">
      <a target="_blank" href="<?php echo home_url(); ?>/contact">
        <img src="<?php echo get_template_directory_uri(); ?>/img/workation/cv.png" alt="" />
      </a>
    </p>
  </section>
  <section class="workation_introduction_section">
  <h2>モデルコース紹介</h2>
  <div class="blue_border_box">
    <ul class="scrollModal" style="margin-top: 20px; max-height: none; overflow: visible;">
    <?php
    $args = array(
      'posts_per_page' => 50, // 表示する投稿数
      'post_type' => 'datour', // 取得する投稿タイプのスラッグ
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
  <div class="ordermade_cv">
    <p>
      <a target="_blank" href="<?php echo home_url(); ?>/contact">
        <img src="<?php echo get_template_directory_uri(); ?>/img/workation/cv.png" alt="" />
      </a>
    </p>
  </div>
</article>

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
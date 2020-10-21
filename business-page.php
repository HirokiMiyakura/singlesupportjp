<?
/*
Template Name: ビジネスサポートページ（business-page.php）
*/
get_header(); 
?>
<main role="main">
  <div>
    <p class="pc main_image"><img src="<?php echo get_template_directory_uri(); ?>/img/business/main_pc.png" alt="" /></p>
    <p class="sp main_image"><img src="<?php echo get_template_directory_uri(); ?>/img/business/main_sp.png" alt="" /></p>
  </div>
  <div class="business_bg">
    <h1>旅行業と宅地建物取引業の事業をベースにビジネスサポートをおこなっています</h1>
    <p>働き方の意識や雇用環境の変化などを背景に生きがいや副収入を得るための「副業」希望者や将来の「独立・起業・開業」を希望する方が増加しています。<br>
シングルサポートでは、旅行業と宅地建物取引業の事業で培った経験をベースに、旅行業、不動産業・宅地建物取引業に携わりたい「副業」「ダブルワーク」希望者、将来の「独立」や定年後の新たな働く機会として「起業・開業」希望者の方に対してのサポートを通じて、生きがいや豊かな人生を送っていただくためのお手伝いをしています。</p>
</div>

<article class="business_article">
  <section class="business_section">
    <h2>旅行業と不動産業・宅地建物取引業の副業・ダブルワーク、<br>
起業・開業セミナー、講座の企画・開催、<br>
旅行業と不動産業・宅地建物取引業の起業、<br>
開業希望者向けのサポート、コンサルティング</h2>
    <div class="business_container reverse">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/business/image1.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>副業、ダブルワーク、起業、開業の情報や知識・情報を得ることのできるセミナー、講座のニーズが高まっています。<br>
シングルサポートでは、不動産業・宅地建物取引業、旅行業の起業・開業セミナー・講座の企画・開催をしています。また、会社設立から定款作成、法人登記などのアドバイスや日本政策金融公庫の創業融資、銀行融資、補助金申請などのアドバイスやホームページの企画などのコンサルティングなどをおこなっています。</p>
        <p><a target="_blank" href="https://singlesupport.co.jp/service/business/">⇒詳しくは下記サイトより</a></p>
      </div>
    </div>
  </section>
  <section class="business_section">
    <h2>オンラインによるセミナー・説明会の企画・開催</h2>
    <div class="business_container">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/business/image2.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>オンラインセミナー、不動産業開業セミナー、旅行業開業セミナーなど従来までは渋谷事務所にて開催していたセミナー・説明会をオンラインにて開催しています。</p>
        <p><a target="_blank" href="https://singlesupport.co.jp/online-seminar/">⇒詳しくは下記サイトより</a></p>
      </div>
    </div>
  </section>
  <section class="business_section">
    <h2>「旅行業」「不動産・宅地建物取引業」提携販売、<br>
代理店、業務委託コンサルタント</h2>
    <div class="business_container reverse">
      <div class="business_container__item">
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/business/image3.png" alt="" /></p>
      </div>
      <div class="business_container__item">
        <p>旅行業、不動産業・宅地建物取引業セミナー・講座などでの知識をもとに実際のビジネスに携わってみたいと思う方や旅行業・不動産・宅地建物取引業への就業希望者の方に対して、旅行業、不動産・宅地建物取引業の提携販売（業務委託）、業務委託コンサルタントの活動や支援をおこなっています。</p>
        <p><a target="_blank" href="https://singlesupport.co.jp/service/sales/">⇒詳しくは下記サイトより</a></p>
      </div>
    </div>
  </section>
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
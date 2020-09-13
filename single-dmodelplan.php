<?php get_header(); ?>
<main role="main">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!-- article -->
<article class="planArticle" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- post title -->
<h2>モデルコース・参考料金（モデル料金）</h2>
<h1>
<?php the_title(); ?>
</h1>
<!-- /post title -->
<p><?php the_field('plan_desc'); ?></p>
<?php
$plan_image1        = get_field('plan_img_1');
$plan_img_1_caption = get_field('plan_img_1_caption');
$plan_image2        = get_field('plan_img_2');
$plan_img_2_caption = get_field('plan_img_2_caption');
$plan_image3        = get_field('plan_img_3');
$plan_img_3_caption = get_field('plan_img_3_caption');
$plan_image4        = get_field('plan_img_4');
$plan_img_4_caption = get_field('plan_img_4_caption');
$googlemap_img      = get_field('googlemap_img');
$remarks            = get_field('remarks')
?>
<section>
  <div class="planContainer">
    <?php if($plan_image1) : ?>
      <div class="planContainer__item">
        <img src="<?php echo $plan_image1; ?>" alt="" />
        <p class="caption_desc"><?php echo $plan_img_1_caption; ?></p>
      </div>
    <?php endif; ?>
    <?php if($plan_image2) : ?>
      <div class="planContainer__item">
        <img src="<?php echo $plan_image2; ?>" alt="" />
        <p class="caption_desc"><?php echo $plan_img_2_caption; ?></p>
      </div>
    <?php endif; ?>
    <?php if($plan_image3) : ?>
      <div class="planContainer__item">
        <img src="<?php echo $plan_image3; ?>" alt="" />
        <p class="caption_desc"><?php echo $plan_img_3_caption; ?></p>
      </div>
    <?php endif; ?>
    <?php if($plan_image4) : ?>
      <div class="planContainer__item">
        <img src="<?php echo $plan_image4; ?>" alt="" />
        <p class="caption_desc"><?php echo $plan_img_4_caption; ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>

<section>
  <h2>日程表</h2>
  <div class="planInner">
    <table class="planTable" border="1" cellspacing="0">
      <tr>
        <td>1日目</td>
        <td><?php the_field('day1'); ?></td>
        <td>食事<br>
        <?php the_field('day1_food'); ?></td>
      </tr>
      <?php
        $day2 = get_field('day2');
        $day2_food = get_field('day2_food');
        if ((!empty($day2)) && (!empty($day2_food))) : 
      ?>
      <tr>
        <td>2日目</td>
        <td><?php the_field('day2'); ?></td>
        <td>食事<br>
        <?php the_field('day2_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day3 = get_field('day3');
        $day3_food = get_field('day3_food');
        if ((!empty($day3)) && (!empty($day3_food))) : 
      ?>
      <tr>
        <td>3日目</td>
        <td><?php the_field('day3'); ?></td>
        <td>食事<br>
        <?php the_field('day3_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day4 = get_field('day4');
        $day4_food = get_field('day4_food');
        if ((!empty($day4)) && (!empty($day4_food))) : 
      ?>
      <tr>
        <td>4日目</td>
        <td><?php the_field('day4'); ?></td>
        <td>食事<br>
        <?php the_field('day4_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day5 = get_field('day5');
        $day5_food = get_field('day5_food');
        if ((!empty($day5)) && (!empty($day5_food))) : 
      ?>
      <tr>
        <td>5日目</td>
        <td><?php the_field('day5'); ?></td>
        <td>食事<br>
        <?php the_field('day5_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day6 = get_field('day6');
        $day6_food = get_field('day6_food');
        if ((!empty($day6)) && (!empty($day6_food))) : 
      ?>
      <tr>
        <td>6日目</td>
        <td><?php the_field('day6'); ?></td>
        <td>食事<br>
        <?php the_field('day6_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day7 = get_field('day7');
        $day7_food = get_field('day7_food');
        if ((!empty($day7)) && (!empty($day7_food))) : 
      ?>
      <tr>
        <td>7日目</td>
        <td><?php the_field('day7'); ?></td>
        <td>食事<br>
        <?php the_field('day7_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day8 = get_field('day8');
        $day8_food = get_field('day8_food');
        if ((!empty($day8)) && (!empty($day8_food))) : 
      ?>
      <tr>
        <td>8日目</td>
        <td><?php the_field('day8'); ?></td>
        <td>食事<br>
        <?php the_field('day8_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day9 = get_field('day9');
        $day9_food = get_field('day9_food');
        if ((!empty($day9)) && (!empty($day9_food))) : 
      ?>
      <tr>
        <td>9日目</td>
        <td><?php the_field('day9'); ?></td>
        <td>食事<br>
        <?php the_field('day9_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day10 = get_field('day10');
        $day10_food = get_field('day10_food');
        if ((!empty($day10)) && (!empty($day10_food))) : 
      ?>
      <tr>
        <td>10日目</td>
        <td><?php the_field('day10'); ?></td>
        <td>食事<br>
        <?php the_field('day10_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day11 = get_field('day11');
        $day11_food = get_field('day11_food');
        if ((!empty($day11)) && (!empty($day11_food))) : 
      ?>
      <tr>
        <td>11日目</td>
        <td><?php the_field('day11'); ?></td>
        <td>食事<br>
        <?php the_field('day11_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day12 = get_field('day12');
        $day12_food = get_field('day12_food');
        if ((!empty($day12)) && (!empty($day12_food))) : 
      ?>
      <tr>
        <td>12日目</td>
        <td><?php the_field('day12'); ?></td>
        <td>食事<br>
        <?php the_field('day12_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day13 = get_field('day13');
        $day13_food = get_field('day13_food');
        if ((!empty($day13)) && (!empty($day13_food))) : 
      ?>
      <tr>
        <td>13日目</td>
        <td><?php the_field('day13'); ?></td>
        <td>食事<br>
        <?php the_field('day13_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day14 = get_field('day14');
        $day14_food = get_field('day14_food');
        if ((!empty($day14)) && (!empty($day14_food))) : 
      ?>
      <tr>
        <td>14日目</td>
        <td><?php the_field('day14'); ?></td>
        <td>食事<br>
        <?php the_field('day14_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day15 = get_field('day15');
        $day15_food = get_field('day15_food');
        if ((!empty($day15)) && (!empty($day15_food))) : 
      ?>
      <tr>
        <td>15日目</td>
        <td><?php the_field('day15'); ?></td>
        <td>食事<br>
        <?php the_field('day15_food'); ?></td>
      </tr>
      <?php endif; ?>
      <?php
        $day16 = get_field('day16');
        $day16_food = get_field('day16_food');
        if ((!empty($day16)) && (!empty($day16_food))) : 
      ?>
      <tr>
        <td>16日目</td>
        <td><?php the_field('day16'); ?></td>
        <td>食事<br>
        <?php the_field('day11_food'); ?></td>
      </tr>
      <?php endif; ?>
    </table>
    <p><?php echo $remarks; ?></p>
    <p><img src="<?php echo $googlemap_img; ?>" alt="" /></p>
  </div>
</section>

<section>
  <h2>参考料金（モデル料金）</h2>
  <div class="planInner">
    <table class="modelPlanTable">
      <tr>
        <td>
          <?php the_field('road'); ?>
        </td>
        <td>
          <?php the_field('price'); ?>
        </td>
      </tr>
    </table>
    <div class="sumTitle"><?php the_field('sum'); ?></div>
    <p class="yajirushi"><img src="<?php echo get_template_directory_uri(); ?>/img/plan/yajirushi.png" alt="矢印" />
    <p><?php the_field('hojo'); ?></p>
    <div class="hojoTitle"><?php the_field('hojo_price'); ?></div>
  </div>
</section>
</article>
<!-- /article -->
<?php endwhile; ?>
<?php else: ?>
<!-- article -->
<article>
<h1>申し訳ございませんでした。表示する内容がありません。</h1>
</article>
<!-- /article -->
<?php endif; ?>
</main>
<?php get_footer(); ?>

<?php get_header(); ?>
<main role="main">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!-- article -->
<article class="planArticle" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- post title -->
<h1>
<?php the_title(); ?>
<!-- <span><img src="<?php echo get_template_directory_uri(); ?>/img/plan/couserTitle.png" alt=""/></span> -->
</h1>
<!-- /post title -->
<p><?php the_field('plan_desc'); ?></p>
<?php
$plan_image1 = get_field('plan_img_1');
$plan_img_1_caption = get_field('plan_img_1_caption');
$plan_image2 = get_field('plan_img_2');
$plan_img_2_caption = get_field('plan_img_2_caption');
$plan_image3 = get_field('plan_img_3');
$plan_image4 = get_field('plan_img_4');
$googlemap_img   = get_field('googlemap_img');
$remarks = get_field('remarks')
?>
<div class="planContainer">
<div class="planContainer__item">
<img src="<?php echo $plan_image1; ?>" alt="" />
<p class="caption_desc"><?php echo $plan_img_1_caption; ?></p>
</div>
<div class="planContainer__item">
<img src="<?php echo $plan_image2; ?>" alt="" />
<p class="caption_desc"><?php echo $plan_img_2_caption; ?></p>
</div>
<?php if($plan_image3) : ?>
<div class="planContainer__item">
<img src="<?php echo $plan_image3; ?>" alt="" />
</div>
<?php endif; ?>
<?php if($plan_image4) : ?>
<div class="planContainer__item">
<img src="<?php echo $plan_image4; ?>" alt="" />
</div>
<?php endif; ?>
</div>
<h2>日程表</h2>
<div class="planInner">
<table class="planTable" border="1" cellspacing="0">
<tr>
<td>1日目</td>
<td><?php the_field('day1'); ?></td>
<td>食事<br>
<?php the_field('day1_food'); ?></td>
</tr>
<tr>
<td>2日目</td>
<td><?php the_field('day2'); ?></td>
<td>食事<br>
<?php the_field('day2_food'); ?></td>
</tr>
<tr>
<td>3日目</td>
<td><?php the_field('day3'); ?></td>
<td>食事<br>
<?php the_field('day3_food'); ?></td>
</tr>
<tr>
<td>4日目</td>
<td><?php the_field('day4'); ?></td>
<td>食事<br>
<?php the_field('day4_food'); ?></td>
</tr>
<?php
$day5 = get_field('day5');
$day5_food = get_field('day5_food');
if ((!empty($day5)) && (!empty($day5_food))) : ?>
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
if ((!empty($day6)) && (!empty($day6_food))) : ?>
<tr>
<td>6日目</td>
<td><?php the_field('day6'); ?></td>
<td>食事<br>
<?php the_field('day6_food'); ?></td>
</tr>
<?php endif; ?>
</table>
<p><?php echo $remarks; ?></p>
<p><img src="<?php echo $googlemap_img; ?>" alt="" /></p>
</div>

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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_header(); ?>
</head>
<body>
<div class="container-fruid">
  <?php include_once 'body_header.php' ?>
  <div class="row nnj-content">
    <div class="col nnj-main">
      <?php if (have_posts()) { ?>
        <?php if ($wp_query->max_num_pages > 1) { ?>
          <div class="nnj-pager">
            <a href="/">最新</a>&nbsp;&nbsp;&nbsp;
            <?php previous_posts_link('&lt;&lt;New'); ?>&nbsp;&nbsp;&nbsp;<?php next_posts_link('Past&gt;&gt;'); ?>
          </div>
        <?php } ?>
        <?php while (have_posts()) { ?>
          <?php the_post(); ?>
          <article class="nnj-section">
            <div class="nnj-section-title"><h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2></div>
            <div class="nnj-section-info">
              作成日：<?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;コメント：<?php comments_number('無し', '(1)', '(%)'); ?><br/>
              カテゴリー：<?php the_category('/'); ?>&nbsp;&nbsp;&nbsp;タグ：<?php the_tags(' '); ?>
            </div>
            <div class="nnj-section-main"><?php the_content(); ?></div>
          </article>
        <?php } ?>
      <?php } else { ?>
        <h1>Not Found</h1>
        <div><p>記事は存在しません</p></div>
      <?php } ?>
    </div>
  </div>
  <?php get_footer(); ?>
</div>
</body>
</html>

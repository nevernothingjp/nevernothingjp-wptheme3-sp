<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_header(); ?>
</head>
<body>
<div class="container-fruid">
  <?php include_once 'body_header.php' ?>
  <div class="col nnj-sidebar">
    <?php dynamic_sidebar('nnj-wiget-sidebar-left-sp'); ?>
  </div>
  <div class="row nnj-content">
    <div class="col nnj-main">
      <?php if (have_posts()) { ?>
        <?php the_post(); ?>
        <article class="nnj-section">
          <div class="nnj-section-title"><h2><?php the_title(); ?></a></div>
          <div class="nnj-section-info">
            作成日：<?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;コメント：<?php comments_number('無し', '(1)', '(%)'); ?><br/>
            カテゴリー：<?php the_category('/'); ?>&nbsp;&nbsp;&nbsp;タグ：<?php the_tags(' '); ?>
          </div>
          <div class="nnj-section-main"><?php the_content(); ?></div>
          <div class="nnj-section-comment"><?php comments_template(); ?></div>
          <?php if (pings_open()) { ?>
            <div class="nnj-section-trackback">
              <h3>トラックバック URL</h3>
              <?php trackback_url(); ?>
            </div>
          <?php } ?>
        </article>
      <?php } else { ?>
        <h1>Not Found</h1>
        <div><p>記事は存在しません</p></div>
      <?php } ?>
    </div>
  </div>
  <div class="col-auto nnj-sidebar">
    <?php dynamic_sidebar('nnj-wiget-sidebar-right-sp'); ?>
  </div>
  <?php get_footer(); ?>
</div>
</body>
</html>

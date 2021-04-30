<header class="nnj-header">
  <div class="row">
    <div class="col-auto nnj-header-left">
      <h1><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
      <?php dynamic_sidebar('nnj-wiget-header-left-sp'); ?>
    </div>
    <div class="col nnj-header-center">
      <?php dynamic_sidebar('nnj-wiget-header-center-sp'); ?>
    </div>
    <div class="col-auto nnj-header-right">
      <?php dynamic_sidebar('nnj-wiget-header-right-sp'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col nnj-header-description">
      <h2><?php bloginfo('description'); ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col nnj-header-bottom">
      <?php dynamic_sidebar('nnj-wiget-header-bottom-sp'); ?>
    </div>
  </div>
</header>
<nav class="nnj-nav">
  <div class="row">
    <div class="col">
      <?php dynamic_sidebar('nnj-wiget-navigater-sp'); ?>
    </div>
  </div>
</nav>

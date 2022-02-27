<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/top_page.css">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
    <title><?= get_title(); ?></title>
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/top'); ?>
      <?php get_template_part('parts/news'); ?>
      <?php get_template_part('parts/service'); ?>
      <?php get_template_part('parts/works'); ?>
      <?php get_template_part('parts/company'); ?>
      <?php get_template_part('parts/recruit'); ?>
      <?php get_template_part('parts/contact'); ?>
      <?php get_footer(); ?>
      <?php get_template_part('parts/page_top'); ?>
  </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
</html>
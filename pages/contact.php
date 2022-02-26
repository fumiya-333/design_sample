<?php
  $args = [
    "subtop_title" => "CONTACT",
    "subtop_subtext" => "お問い合わせ",
    "breadclumb" => [[
      "name" => "HOME",
      "url" => esc_url(home_url())
    ],
    [
      "name" => "CONTACT",
      "url" => ""
    ]]
  ];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contact_page.css">
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/sub_top', null, $args); ?>
      <?php get_template_part('parts/breadcrumb', null, $args); ?>
      <?php get_template_part('parts/contact_contents'); ?>
      <?php get_template_part('parts/contact'); ?>
      <?php get_footer(); ?>
      <?php get_template_part('parts/page_top'); ?>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
</html>
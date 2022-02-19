<?php
  $args = [
    "subtop_title" => "NEWS",
    "subtop_subtext" => "お知らせ",
    "breadclumb" => ["HOME","NEWS"],
    "news_contents" => [[
      "news_date" => "2030.02.01",
      "news_tip" => "制作実績",
      "news_text" => "Webデザインニュースサイト「ウェブマガジン」に取材いただきました"
    ],
    [
      "news_date" => "2030.01.25",
      "news_tip" => "お知らせ",
      "news_text" => "Smoothiesta様のWebサイトを制作いたしました"
    ]]
  ];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/news_page.css">
  </head>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <?php get_template_part('parts/sub_top', null, $args); ?>
      <?php get_template_part('parts/breadcrumb', null, $args); ?>
      <?php get_template_part('parts/news_contents', null, $args); ?>
      <?php get_footer(); ?>
      <?php get_template_part('parts/page_top'); ?>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jq/jquery.js"></script>
</html>
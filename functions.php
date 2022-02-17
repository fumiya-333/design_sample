<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);

function get_current_link(){
  $current_link = (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  if(substr($current_link, 0, -1) === "/"){
    return substr($current_link, 0, -1);
  }
  return $current_link;
}

function get_include_file_path(){
  if(esc_url(home_url()) === get_current_link()){
    return "pages/top";
  }else if(esc_url(home_url()) . "/news" === get_current_link()){
    return "pages/news";
  }else{
    return "pages/top";
  }
}
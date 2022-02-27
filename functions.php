<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);

function get_title() {
  return "PON DESIGN";
}

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
  }else if(esc_url(home_url()) . "/news?id=1" === get_current_link()){
    return "pages/news_detail";
  }else if(esc_url(home_url()) . "/service" === get_current_link()){
    return "pages/service";
  }else if(esc_url(home_url()) . "/works" === get_current_link()){
    return "pages/works";
  }else if(esc_url(home_url()) . "/company" === get_current_link()){
    return "pages/company";
  }else if(esc_url(home_url()) . "/recruit" === get_current_link()){
    return "pages/recruit";
  }else if(esc_url(home_url()) . "/contact" === get_current_link()){
    return "pages/contact";
  }else{
    return "pages/top";
  }
}
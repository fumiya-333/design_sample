<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);

/**
 * スマートフォンであるか判定する
 * 
 */
function is_mobile(){
    $useragents = array(
        'iPad',
        'iPhone',
        'iPod',
        'Android',
        'dream',
        'CUPCAKE',
        'Windows',
        'blackberry',
        'webOS',
        'incognito',
        'webmate'
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
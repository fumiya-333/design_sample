<div class="news-contents">
  <?php
    $url = esc_url(home_url());
    foreach($args["news_contents"] as $news_contents){
      echo <<< NEWS
      <div class="news-contents-row">
        <div class="news-contents-left">
          <div class="news-contents-date">{$news_contents["news_date"]}</div>
          <span class="news-contents-tip">{$news_contents["news_tip"]}</span>
        </div>
        <div class="news-contents-text"><a href="{$url}/news?id=1">{$news_contents["news_text"]}</a></div>
      </div>
NEWS;
    }
  ?>
</div>
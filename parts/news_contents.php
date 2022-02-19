<div class="news-contents">
  <?php
    foreach($args["news_contents"] as $news_contents){
      echo <<< NEWS
      <div class="news-contents-row">
        <div class="news-contents-date">{$news_contents["news_date"]}</div>
        <span class="news-contents-tip">{$news_contents["news_tip"]}</span>
        <div class="news-contents-text">{$news_contents["news_text"]}</div>
      </div>
NEWS;
    }
  ?>
</div>
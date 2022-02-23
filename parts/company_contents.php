<?php
$company_contents_text = "";
if(wp_is_mobile()){
  $company_contents_text = <<< TEXT
  お客様の夢を叶えること。<br>
  それがWebサイトのゴールであり、<br>
  私たちが目指すことです。<br>
  だからこそちゃんと成果を出すサイトを<br>
  全力でお作りします。<br>
  お客様の笑顔を見たい。<br>
  夢を実現する手助けをさせてください。<br>
TEXT;
}else{
  $company_contents_text = <<< TEXT
  お客様の夢を叶えること。<br>
  それがWebサイトのゴールであり、私たちが目指すことです。<br>
  だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
  お客様の笑顔を見たい。<br>
  夢を実現する手助けをさせてください。
TEXT;
}
?>

<div class="company-contents">
  <div class="company-message-box">
    <div class="company-message">
      <div class="company-message-head">メッセージ</div>
      <div class="company-message-title">サイトのゴール = 夢を叶えること</div>
      <div class="company-message-text"><?= $company_contents_text ?></div>
    </div>
  </div>
  <div class="company-president">
    <div class="company-president-img">
      <img src="<?php bloginfo('template_directory'); ?>/img/CEO.png" alt="ceo" width="<?php print wp_is_mobile() ? 335 : 445 ?>" height="<?php print wp_is_mobile() ? 248 : 330 ?>"/>
    </div>
    <div class="company-president-message">
      テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>
      テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>
      代表取締役社長 猫山ポン太郎
    </div>
  </div>
  <div class="company-overview">
    <div class="company-overview-title">会社概要</div>
    <table class="company-overview-table">
      <tr>
        <th>社名</th>
        <td>株式会社PON DESIGN</td>
      </tr>
      <tr>
        <th>設立</th>
        <td>2020.01.10</td>
      </tr>
      <tr>
        <th>代表取締役</th>
        <td>猫山ポン太郎</td>
      </tr>
      <tr>
        <th>資本金</th>
        <td>1,000,000円</td>
      </tr>
      <tr>
        <th>所在地</th>
        <td>〒555-5555 東京都千代田区 ポンビルディング 606</td>
      </tr>
    </table>
    <div class="company-googlemap">
      <iframe
        src="https://www.google.com/maps?output=embed&z=15&ll=35.6812405,139.7649308&q=東京駅"
        width="100%"
        height="394"
        frameborder="0"
        style="border: 0;"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
      <div class="company-googlemap-view">
        <a href="https://www.google.co.jp/maps/place/%E6%9D%B1%E4%BA%AC%E9%A7%85/@35.6812362,139.7649361,17z/data=!3m1!4b1!4m5!3m4!1s0x60188bfbd89f700b:0x277c49ba34ed38!8m2!3d35.6812362!4d139.7671248?hl=ja">Google mapで見る</a>
      </div>
    </div>
  </div>
</div>
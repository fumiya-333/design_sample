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
</div>
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
<div class="company-box">
    <section class="company-area">
      <div class="company-contents-box">
        <h2>
          COMPANY
        </h2>
        <p>私たちについて</p>
        <div class="company-contents">
          <div class="company-contents-title">サイトのゴール = 夢を叶えること</div>
          <div class="company-contents-text">
            <?= $company_contents_text ?>
          </div>
          <div class="more-btn-area">
            <button class="more-btn">MORE</button>
          </div>
        </div>
      </div>
    </section>
  </div>
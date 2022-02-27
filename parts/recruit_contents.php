<?php
$company_contents_text = "";
$company_contents_table = "";
if(wp_is_mobile()){
  $company_contents_text = "Enjoy<br>Creation for<br>Client";
  $company_contents_table = <<< TABLE
    <table>
      <tr>
        <th>雇用形態</th>
      </tr>
      <tr>
        <td>正社員</td>
      </tr>
      <tr>
        <th>給与</th>
      </tr>
      <tr>
        <td>400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
      </tr>
      <tr>
        <th>仕事内容</th>
      </tr>
      <tr>
        <td>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</td>
      </tr>
      <tr>
        <th>勤務時間</th>
      </tr>
      <tr>
        <td>10:00 〜 19:00（実働8時間、休憩1時間）</td>
      </tr>
      <tr>
        <th>応募資格</th>
      </tr>
      <tr>
        <td>
          PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。<br>
          実務未経験でも学校や独学で学習した方を歓迎します。<br><br>
          ・デザインやコーディングを楽しめる方<br>
          ・常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方<br>
          ・お客様と一緒に楽しみながら高い目的を目指せる方
        </td>
      </tr>
    </table>
TABLE;
}else{
  $company_contents_text = "Enjoy Creation for Client";
  $company_contents_table = <<< TABLE
    <table>
      <tr>
        <th>雇用形態</th>
        <td>正社員</td>
      </tr>
      <tr>
        <th>給与</th>
        <td>400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
      </tr>
      <tr>
        <th>仕事内容</th>
        <td>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</td>
      </tr>
      <tr>
        <th>勤務時間</th>
        <td>10:00 〜 19:00（実働8時間、休憩1時間）</td>
      </tr>
      <tr>
        <th>応募資格</th>
        <td>
          PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。<br>
          実務未経験でも学校や独学で学習した方を歓迎します。<br><br>
          ・デザインやコーディングを楽しめる方<br>
          ・常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方<br>
          ・お客様と一緒に楽しみながら高い目的を目指せる方
        </td>
      </tr>
    </table>
TABLE;
}
?>
<div class="recruit-contents">
  <div class="recruit-header">
    <div class="recruit-header-title"><?= $company_contents_text ?></div>
    <div class="recruit-header-sub-title">楽しむ心が良いモノを生む</div>
    <div class="recruit-header-text">心を弾ましながら<br>夢いっぱいのサイトを作ろう！<br>お客様も自分もみんなが幸せになれるように</div>
    <div class="recruit-header-img">
    </div>
  </div>
  <div class="recruit-arrival">
    <div class="recruit-arrival-title">
      募集中の職種
    </div>
    <div class="recruit-arrival-form">
      <div class="recruit-arrival-form-title">
        Webデザイナー
      </div>
      <?= $company_contents_table ?>
      <div class="more-btn-area">
        <button class="more-btn">MORE</button>
        <div class="transition-recruit">求人サイトへ遷移します</div>
      </div>
    </div>
  </div>
  <div class="in-house-movie">
    <div class="in-house-movie-title">
      社内ムービー
    </div>
    <div class="in-house-movie-contents">
    </div>
  </div>
</div>
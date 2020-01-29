<?php
namespace shop;

class productList {

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>猛獣市場</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <!-- ヘッダー -->
  <div class="header">
    <div class="header-logo">猛獣市場</div>
    <div class="header-list">
      <ul>
        <li>猛獣市場とは</li>
        <li>出品商品について</li>
    </div>
  </div>
  <!-- 検索リスト -->
  <div class="search">
    <div class = "search-list">
      <ul>
        <li>生息地域</li>
        <li>哺乳類</li>
        <li>鳥類</li>
        <li>爬虫類</li>
        <li>両性類</li>
        <li>魚類</li>
    </div>
  </div>
  <!-- 商品一覧 -->
  <div class="product-list">
    <div class="product-item">
      <a href="ProductDetail.php"><img src="./img/skull-937248_1920.jpg"></a>
      <a href="ProductDetail.php"><p class="product-item-name">test</p></a>
    </div>
    <div class="product-item">
      <img src="./img/skull-1170772_1920.jpg">
      <p class="product-item-name">test</p>
    </div>
    <div class="product-item">
      <img src="./img/skulls-55485_1920.jpg">
      <p class="product-item-name">test</p>
    </div>
    <div class="product-item">
      <img src="./img/turtle-281073_1920.jpg">
      <p class="product-item-name">test</p>
    </div>
  </div>

  <!-- フッター -->
  <div class="footer">
    <div class="footer-warning">密猟は犯罪です</div>
    <div class="footer-list">
      <ul>
        <li>会社概要</li>
        <li>採用情報</li>
        <li>お問い合わせ</li>
    </div>
  </div>
</body>
</html>

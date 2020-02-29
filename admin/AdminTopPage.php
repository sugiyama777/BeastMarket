<?php
namespace Admin;

class adminTopPage {}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>管理画面</title>
  <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
  <!-- ヘッダー -->
  <div class="header">
    <div class="header-logo">猛獣市場</div>
    <div class="header-list">
      <ul>
        <li><a href="AdminEditPage.php">商品情報編集</a></li>
        <li><a href="AdminAddPage.php">商品情報追加</a></li>
    </div>
  </div>

  <!-- 出品商品一覧 -->
  <h1 class="exhibition-product">出品商品一覧</h1>
  <div class="product-list">
    <ul>
      <li>
        <a href="ProductDetail.php"><img src="./img/skull-937248_1920.jpg"></a>
        <a href="ProductDetail.php"><p class="item-name">test</p></a>
        <a href="ProductDetail.php"><p class="item-price">test円</p></a>
      </li>
      <li>
        <img src="./img/skull-1170772_1920.jpg">
        <p class="item-name">test</p>
        <p class="item-price">test円</p>
      </li>
      <li>
        <img src="./img/skulls-55485_1920.jpg">
        <p class="item-name">test</p>
        <p class="item-price">test円</p>
      </li>
      <li>
        <img src="./img/turtle-281073_1920.jpg">
        <p class="item-name">test</p>
        <p class="item-price">test円</p>
      </li>
      <li>
        <img src="./img/turtle-281073_1920.jpg">
        <p class="item-name">test</p>
        <p class="item-price">test円</p>
      </li>
      <li>
        <img src="./img/turtle-281073_1920.jpg">
        <p class="item-name">test</p>
        <p class="item-price">test円</p>
      </li>
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

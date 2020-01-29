<?php
namespace shop;

class productDetail {}

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
  <!-- ぱんくずリスト -->
  <div class="search">
    <div class = "search-list">
      <ul class="breadcrumb">
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
          <a href="localhost/shop/ProductList" itemprop="url">
           <span itemprop="title">ホーム</span>
          </a>
        </li>
        <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
          <a href="localhost/shop/ProductDetail" itemprop="url">
           <span itemprop="title">商品詳細</span>
          </a>
        </li>
    </div>
  </div>
  <!-- 商品詳細 -->
  <div class="product-detail">
    <div class="detail-img">
      <img src="./img/skull-937248_1920.jpg">
    </div>
    <div class="detail-">
    <div class="detail-name">test</div>
    <div class="detail-description">
      testtesttesttesttesttest<br>
      testtesttesttesttesttest<br>
      testtesttesttesttesttest<br>
      testtesttesttesttesttest<br>
      testtesttesttesttesttest<br>
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

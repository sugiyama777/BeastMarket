<?php
namespace admin;

class adminAddPage {}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>商品追加画面</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <!-- ヘッダー -->
  <div class="header">
    <div class="header-logo">猛獣市場</div>
    <div class="header-list">
      <ul>
        <li>商品追加</li>
        <li>商品情報編集</li>
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
  <!-- 商品編集 -->
  <div class="product-add">
    <div class="image-upload">
      <p>画像</p>
      <input type=submit value=アップロード>
    </div>
    <div class="add-name">
      <p>商品名</p>
      <input typw="text" name="" value="">
    </div>
    <div class="add-description">
      <p>商品説明</p>
      <textarea></textarea>
    </div>
    <div class="add-price">
      <p>価格</p>
      <input>
    </div>
    <div class="add-button">
      <input type=submit value=追加>
    </div>
  </div>
</body>

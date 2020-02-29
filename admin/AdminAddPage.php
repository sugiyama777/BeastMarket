<?php
namespace Admin;

class adminAddPage {}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>商品情報追加画面</title>
  <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
  <!-- ヘッダー -->
  <div class="header">
    <div class="header-logo">猛獣市場</div>
    <div class="header-list">
      <ul>
        <li><a href="AdminTopPage.php">管理画面TOP</a></li>
        <li><a href="AdminEditPage.php">商品情報編集</a></li>
    </div>
  </div>

  <!-- 商品編集 -->
  <div class="product-add">
    <form>
      <dl>
        <dt>画像</dt>
        <dd><input type=submit value=アップロード></dd>
        <dt>商品名</dt>
        <dd><input typw="text"></dd>
        <dt>商品説明</dt>
        <dd><textarea></textarea></dd>
        <dt>価格</dt>
        <dd><input typw="text"></dd>
        <dt></dt>
        <dd><input type=submit value=追加></dd>
      </dl>
    </form>

  </div>
</body>

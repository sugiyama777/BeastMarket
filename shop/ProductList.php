<?php
namespace shop;
require_once('Date.php');
require_once('Product.php');

class ProductList {
  //画像、テキスト押下で商品詳細に遷移する
  //商品一覧を読み込む
  //読み込んだ商品の画像、商品名、価格を表示させる
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
    <ul>
      <?php foreach ($dates as $date): ?>
        <li>
          <a href="ProductDetail.php"><img src="<?php echo $date->getImage() ?>"></a>
          <a href="ProductDetail.php"><p class="item-name"><?php echo $date->getName() ?></p></a>
          <a href="ProductDetail.php"><p class="item-price">￥ <?php echo $date->getPrice() ?></p></a>
        </li>
      <?php endforeach ?>
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

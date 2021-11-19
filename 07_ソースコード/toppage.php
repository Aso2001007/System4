<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>toppage</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="head">
    <a href="toppage.php" id="vanner">文房具サイト</a>
    <button type="submit"  onclick=location.href="./cart.php" id="cart">カートの中　　🛒</button><br>
    <button type="submit" id="infor-regster" onclick=location.href="./register.php">会員登録</button>
    <button type="submit" id="log" onclick=location.href="./login.php">ログイン</button>
    <input type="search" id="keyword" name="keyword" placeholder="キーワードで検索">
    <button type="submit" id="keyword-button">🔍</button>
</div>

<dl class="category">
    <dt>カテゴリーで探す</dt>
    <dt><hr width="210"></dt>
    <dt><a href="">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt><a href="">消しゴム</a></dt>
    <dt><hr width="210"></dt>
</dl>
<?php
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan','LAA1290633','daisuke0804');
$sql = $pdo->query('select * from commodity where ');
$flg = true;
echo '<div class="popular"><a href=""></a><div>';//人気の商品
foreach ($sql as $row){
    echo '<div class="popularcommodity">';
    echo '<a href=""></a>';
    echo $row['commodity_name'], '：';
    echo $row['money'], '：';
    echo '</div>';
    $flg=false;
}
if ($flg) {
    echo '商品が存在しません', '<br>';
}
$sql = $pdo->query('select * from commodity where ');
$flg = true;
echo '<div class="campaign"><a href=""></a><div>';//キャンペーン商品
foreach ($sql as $row){
    echo '<div class="campaigncommodity">';
    echo '<a href=""></a>';
    echo $row['commodity_name'], '：';
    echo $row['money'], '：';
    echo '</div>';
    $flg=false;
}
if ($flg) {
    echo '商品が存在しません', '<br>';
}
?>
<script src="./script/script.js"></script>
</body>
</html>

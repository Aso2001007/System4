<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>login-toppage</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="head">
    <a href="login-toppage.php" id="vanner">文房具サイト</a>
    <button type="submit"  href="cart" id="cart.php">カートの中　　🛒</button><br>
    <button type="submit" id="infor-regster" href="information.php">会員情報</button>
    <button type="submit" id="log" href="toppage.php">ログアウト</button>
    <input type="text" id="keyword" name="keyword" value="キーワードで検索 　　 🔍 ">
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

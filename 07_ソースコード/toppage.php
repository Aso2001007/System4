<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>toppage</title>
    <link rel="stylesheet" href="./css/top.css">
</head>
<body>
    <div class="head">
        <a href="toppage.php" id="vanner">文房具サイト</a>
        <button type="submit"  onclick=location.href="./cart.php" id="cart">カートの中　　🛒</button><br>
        <button type="submit" id="infor-regster" onclick=location.href="./register.php">会員登録</button>
        <button type="submit" id="log" onclick=location.href="./login.php">ログイン</button>
        <form action="list.php" method="get">
        <input type="search" id="keyword" name="keyword" placeholder="キーワードで検索">
        <button type="submit" id="keyword-button">🔍</button>
    </div>
    <dl class="category">
        <dt id="categorysearch">カテゴリーで探す</dt>
        <dt><hr width="210"></dt>
        <dt><a href="list.php?id=1">鉛筆、ペン</a></dt>
        <dt><hr width="210"></dt>
        <dt><a href="list.php?id=2">消しゴム</a></dt>
        <dt><hr width="210"></dt>
    </dl>
</form>
<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1290633-system4;charset=utf8',
    'LAA1290633','daisuke0804');
$sql = $pdo->query('select * from item inner join purchase_details on item.item_id = purchase_details.item_id group by purchase_details.item_id having purchase_details.quantity > 0 order by purchase_details.quantity desc, item.item_id asc');
$flg = true;
echo '<div id="popular"><a href="list.php?sql=6"><img src="./img/人気.jpg" width="580px" height="325px"></a><div>';//人気の商品
if($sql){
    echo '<ul class="popularitem">';
}
foreach ($sql as $row){
    $item_id=$row['item_id'];
    echo '<li><a href="item.php?id=', $item_id, '">';
    echo '<img src="./img/',$item_id,'.png"><br>';//商品画像
    echo '<div class="itemname">',$row['item_name'],'</div><br>';
    echo '<div class="price">','¥',$row['price'],'</div><br>';
    echo '</a></li>';
    $flg = false;
}
if ($sql){
    echo '</ul>';
}
if ($flg) {
    echo '商品が存在しません', '<br>';
}
$sql = $pdo->query('select * from item order by date desc,item_id asc');
$flg = true;
echo '<div id="campaign"><a href="list.php?id=5"><img src="./img/CP.jpg" width="580px" height="325px"></a><div>';//キャンペーン商品
if($sql){
    echo '<ul class="campaignitem">';
}
foreach ($sql as $row){
    $item_id=$row['item_id'];
    echo '<li><a href="item.php?id=', $item_id, '">';
    echo '<img src="./img/',$item_id,'.png"><br>';//商品画像
    echo '<div class="itemname">',$row['item_name'],'</div><br>';
    echo '<div class="price">','¥',$row['price'],'</div><br>';
    echo '</a></li>';
    $flg = false;
}
if ($sql){
    echo '</ul>';
}
if ($flg) {
    echo '商品が存在しません', '<br>';
}
?>
</body>
</html>


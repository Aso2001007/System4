<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">    
</head>
<body>
<form action="list.php" method="get">
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
    <dt><a href="list.php?sql=1">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt><a href="list.php?sql=2">消しゴム</a></dt>
    <dt><hr width="210"></dt>
</dl>
<div class="pagename">商品一覧</div>並び替え|<a href="list.php?sql=3">価格が安い順</a>|<a href="list.php?sql=4">価格が高い順</a>|<a href="list.php?sql=5">新着順</a>
</form>
<?php
error_reporting(0);//ifで選択されなかったSQLがエラーになるから非表示にする(このページのphpはすべて非表示)
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1290633-system4;charset=utf8',
    'LAA1290633','daisuke0804');
if (isset($_GET['keyword']) && !isset($_GET['sql'])) {
    $sql=$pdo->prepare('select * from item where item_name like ?');
    $sql->execute(['%'.$_GET['keyword'].'%']);
} else if($_GET['sql'] == 1){
    $sql=$pdo->query('select * from item where category_id=1 order by item_id asc');
} else if($_GET['sql'] == 2){
    $sql=$pdo->query('select * from item where category_id=2 order by item_id asc');
} else if($_GET['sql'] == 3){
    $sql=$pdo->query('select * from item order by price asc, item_id asc');
} else if($_GET['sql'] == 4){
    $sql=$pdo->query('select * from item order by price desc, item_id asc');
} else if($_GET['sql'] == 5){
    $sql=$pdo->query('select * from item order by date desc, item_id asc');
} else {
    $sql=$pdo->query('select * from item order by item_id asc');
}
$sql->execute();
$flg = true;
foreach ($sql as $row){
    $item_id=$row['item_id'];
    echo '<div class="item"><a href="item.php?id=', $item_id, '">';
    echo '<img src="./img/',$item_id,'.png">';//商品画像
    echo $row['item_name'];
    echo $row['price'];
    echo '</a></div>';
    $flg=false;
}
if ($flg) {
    echo '商品が存在しません', '<br>';
}
?>
</body>
</html>

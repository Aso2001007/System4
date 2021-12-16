<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>list</title>
    <link rel="stylesheet" href="./css/list.css">
</head>
<body>
    <div class="head">
        <a href="toppage.php" id="vanner">文房具サイト</a>
        <button type="submit"  onclick=location.href="./login-in.php" id="cart">カートの中　　🛒</button><br>
        <button type="submit" id="infor-regster" onclick=location.href="./register.php">会員登録</button>
        <button type="submit" id="log" onclick=location.href="./login-in.php">ログイン</button>
        <form action="list.php" method="get">
        <input type="search" id="keyword" name="keyword" placeholder="キーワードで検索">
        <button type="submit" id="keyword-button">🔍</button>
    </div>
<dl class="category">
    <dt id="all"><a href="list.php?default=1">全ての商品</a></dt>
    <dt><hr width="210"></dt>
    <dt id="cp"><a href="list.php?sql=10">キャンペーン</a></dt>
    <dt><hr width="210"></dt>
    <dt id="sortname">並び替え</dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=6">価格が安い順</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=7">価格が高い順</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=8">新着順</a></dt>
    <dt><hr width="210"></dt>
    <dt id="sortname">カテゴリーで探す</dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=1">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=2">消しゴム</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=3">定規</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=4">筆箱</a></dt>
    <dt><hr width="210"></dt>
    <dt class="sort"><a href="list.php?sql=5">雑貨</a></dt>
    <dt><hr width="210"></dt>
</dl>
    <div class="pagename">商品一覧</div>
</form>
<?php
error_reporting(0);//ifで選択されなかったSQLがエラーになるから非表示にする(このページのphpはすべて非表示)
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1290633-system4;charset=utf8',
    'LAA1290633','daisuke0804');
if (isset($_GET['keyword']) && !isset($_GET['sql'])) {
    $sql=$pdo->prepare('select * from item where item_name like ? order by item_id asc');
    $sql->execute(['%'.$_GET['keyword'].'%']);
} elseif (isset($_GET['default'])){
    $sql=$pdo->query('select * from item order by item_id asc');
} else if($_GET['sql'] <= 5){
    $sql=$pdo->prepare('select * from item where category_id=? order by item_id asc');
    $sql->bindValue(1,$_GET['sql'],PDO::PARAM_INT);
} else if($_GET['sql'] == 6){
    $sql=$pdo->query('select * from item order by price asc, item_id asc');
} else if($_GET['sql'] == 7){
    $sql=$pdo->query('select * from item order by price desc, item_id asc');
} else if($_GET['sql'] == 8){
    $sql=$pdo->query('select * from item order by date desc, item_id asc');
} else if($_GET['sql'] == 9){
    $sql=$pdo->query('select * from item join purchase_details on item.item_id = purchase_details.item_id order by purchase_details.quantity desc, item.item_id asc');
} else if($_GET['sql'] == 10){
    $sql=$pdo->query('select * from item where cp=1 order by item_id asc');
}else{
    $sql=$pdo->query('select * from item order by item_id asc');
}
$sql->execute();
$flg = true;
if($sql){
    echo '<ul class="displayitem">';
}
foreach ($sql as $row){
    $item_id=$row['item_id'];
    echo '<li><a href="item.php?id=', $item_id, '">';
    echo '<img src="./img/',$item_id,'_1.png"><br>';//商品画像
    echo '<div class="itemname">',$row['item_name'],'</div>';
    echo '<div class="price">','¥',$row['price'],'</div>';
    echo '</a></li>';
    $flg=false;
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
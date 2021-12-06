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
    <a href="login-toppage.php" id="vanner">文房具サイト</a>
    <button type="submit"  href="cart.php" id="cart">カートの中　　🛒</button><br>
    <button type="submit" id="infor-regster" href="edit-in.php">会員登録</button>
    <button type="submit" id="log" href="login-in">ログイン</button>
    <input type="text" id="keyword" name="keyword" placeholder="キーワードで検索">
    <button type="submit" id="keyword-button">🔍</button>
</div>
<dl class="category">
    <dt>カテゴリーで探す</dt>
    <dt><hr width="210"></dt>
    <dt><a href="list.php?id=1">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt><a href="list.php?id=2">消しゴム</a></dt>
    <dt><hr width="210"></dt>
</dl>
<div class="pagename>商品一覧</div>"並び替え|<a href="list.php?id=3">価格が安い順</a>|<a href="list.php?id=4">価格が高い順</a>|<a href="list.php?id=5">新着順</a>
</form>
<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1290633-system4;charset=utf8',
    'LAA1290633','daisuke0804');
if (isset($_GET['keyword']) && !isset($_GET['id'])) {
    $sql=$pdo->prepare('select * from item where item_name like ?');
    $sql->execute(['%'.$_GET['keyword'].'%']);
} else if($_GET['id'] == 1){
    $sql=$pdo->query('select * from item where category_id=1');
} else if($_GET['id'] == 2){
    $sql=$pdo->query('select * from item where category_id=2');
} else if($_GET['id'] == 3){
    $sql=$pdo->query('select * from item order by price asc');
} else if($_GET['id'] == 4){
    $sql=$pdo->query('select * from item order by price desc');
} else if($_GET['id'] == 5){
    $sql=$pdo->query('select * from item order by date asc');
} else {
    $sql=$pdo->query('select * from item');
}
$sql->execute();
$flg = true;
foreach ($sql as $row){
    $item_id=$row['item_id'];
    echo '<div class="item">';
    //echo '<a href=""></a>';//商品画像
    echo '<a href="item.php?id=', $item_id, '">', $row['item_name'], '</a>';
    echo $row['price'];
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

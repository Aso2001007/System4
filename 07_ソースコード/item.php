<?php require 'commom.php';?>
    <link rel="stylesheet" href="./css/item.css">
<?php
echo '<p class="subhead">商品詳細</p>';
$pdo =new PDO(//DB接続
        'mysql:host=mysql152.phy.lolipop.lan',
        'LAA1290633','daisuke0804');

$item_id = $_GET['id'];
$sql = $pdo -> prepare('select * from item where item_id = ?');
echo '<form action="cart.php" method="post">';//カートに入れる
foreach ((array)$sql as $row) {
    $item_id=$row['item_id'];
    echo '<p id="picture"><img src = "./img/',$item_id,'.png"></p>'; //商品情報
    echo '<div id="item_back"></div>';
    echo '<p id="item_name">',isset($row['item_name']),'</p>';//ここできない
    echo '<p id="price">','¥',isset($row['price']),'</p>';

    echo '<div class="explanatory"></div>';//商品説明
    echo '<p id="exp-text">--商品説明文--</p>';
    echo '<p id="exp">', isset($row['text']), '</p>';

    echo '<p id="color-t">色：</p>';//ドロップダウン：色
    echo '<select class ="form-control" id ="color">';//ここで画像を変えたい
    echo '<option value="black">ブラック</option>';
    echo '<option value="white">ホワイト</option>';
    echo '<option value="brown">ブラウン</option>';
    echo '</select>';

    echo '<div class="back"></div>';

    echo '<p id ="num-t">数量：</p>';//ドロップダウン：数量
    echo '<select id="number" name="number">';
        for ($i = 1; $i < 11; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
    echo '</select>';

    echo '<button type="submit" id="cart-in">カートに入れる</button>';
    echo '</form>';

}
?>

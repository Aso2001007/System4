<?php require 'commom_item.php';?>
    <link rel="stylesheet" href="./css/item.css">
<?php

echo '<p class="subhead">商品詳細</p>';
$pdo =new PDO(//DB接続
    'mysql:dbname=LAA1290633-system4; host=mysql152.phy.lolipop.lan',
    'LAA1290633','daisuke0804');
$item_id = ($_GET['id']);

if(isset($_GET['color_id'])){
    switch ($_GET['color_id']){
        case 1:$color_id=1;break;
        case 2:$color_id=2;break;
        case 3:$color_id=3;break;
        case 4:$color_id=4;break;
        case 5:$color_id=5;break;
        case 6:$color_id=6;break;
        case 7:$color_id=7;break;
    }
}else{
    $color_id = 1;
}

$stmt = $pdo->prepare('select * from item where item_id = :item_id');

$stmt ->bindParam(':item_id', $item_id,PDO::PARAM_INT);
$color = $color_id;
$rt = $stmt->execute();
echo "rt = dummy $rt start";
print_r($stmt->errorInfo());
echo "rt = dummy $rt end" ;
echo "rt = $rt";
echo "item_id ($item_id)";

echo '<form action="cart-insert.php" method="post">';//カートに入れる
$cnt=0;
foreach ( $stmt as $row ) {

    ++$cnt;
    echo "cnt =b ($cnt)";

    echo '<p id="picture"><img src = "./img/',$item_id,'_',$color,'.png"></p>'; //商品情報
    echo '<div id="item_back"></div>';
    echo '<p id="item_name">',$row['item_name'],'</p>';
    echo '<p id="price">','¥',$row['price'],'</p>';

    echo '<div class="explanatory"></div>';//商品説明
    echo '<p id="exp-text">--商品説明文--</p>';
    echo '<p id="exp">',$row['text'], '</p>';



    $stmt = $pdo->prepare('select * from color where item_id = :item_id');//ドロップダウン：色
    $stmt ->bindParam(':item_id', $item_id,PDO::PARAM_INT);
    $stmt->execute();
    foreach ($stmt as $color_data) {
        echo '<p id="color-t">色：</p>';
        echo '<select class ="color" onclick=location.href="./item.php" id= $color_data>';
        echo $color_data['color_name'];
        echo '</select>';
    }

    echo '<div class="back"></div>';

    echo '<p id ="num-t">数量：</p>';//ドロップダウン：数量
    echo '<select id="number" name="number">';
    for ($i = 1; $i < 11; $i++) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    }
    echo '</select>';

    echo '<button type="submit" id="cart-in">カートに入れる</button>';

}
echo '</form>';
$pdo=null;
?>

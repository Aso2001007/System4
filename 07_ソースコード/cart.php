<?php
/*カート内*/

echo '<form action="order.php">'; /*注文フォームへ*/
$total=0;
echo '<a class="cart_title">カート内</a><br>';
echo '<a class="count_title">小計 ￥</a>';
if(!empty($_SESSION['item'])) {
    foreach ($_SESSION['item'] as $id => $item) {
    $subtotal=$item['price']*$item['count'];
    $total+=$subtotal;
    }
}
echo '<a class="total">',$total,'</a>';　

    echo '<button type="submit" class="order_button">注文する</button>';
    echo '</form>';

/*カート内を表示する場所*/
    echo '<div class="cart_area">';
    if(!empty($_SESSION['item'])) {
        foreach ($_SESSION['item'] as $id => $item) {
            /*商品を出力*/
            echo '<div class="cart_items">';
            echo '<form action="cart-delete.php?id=',$id,'" method="post">'; /*Delete処理*/
            echo '<img src="image/' ,$id, '.jpg" class="cart_items_img">'; /*画像*/
            echo '<a href="detail.php?id=',$id,'" class="cart_items_name">',$item['name'],'</a>'; /*商品名*/
            echo '<a class="cart_items_price">￥',$item['price'],'</a>'; /*価格*/
            echo '<a class="cart_items_count">数量：',$item['count'],'</a>';
            echo '<button type="submit" class="cart_items_delete">削除</button>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo '<a>カートに商品がありません。</a>';
    }
    echo '</div>';
?>

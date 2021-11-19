<?php
if (!empty($_POST['goods'])) {
    define("APPID", "1038158584504597232");
    define("SERCH", "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706");
    define("GENRE","100901");

    $goods = $_POST['goods'];
    $params = array("applicationId" => APPID, "keyword" => $goods, "genreId" => GENRE);

    $query = http_build_query($params);
    $request = SERCH . '?' . $query;

    $response = file_get_contents($request);
    $result = json_decode($response);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RakutenAPI</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<form action="" method="post">
    <input type="text" name="goods">
    <button type="submit">検索</button>
</form>
<hr>
<?php if(!empty($result)){?>
    <table border="1" width="700px">
        <tr>
            <th width="150px">画像</th>
            <th width="450px">商品名</th>
            <th width="100px">金額</th>
        </tr>
        <?php foreach ($result->Items as $item) : ?>
            <tr>
                <td><img src='<?php echo $item->Item->mediumImageUrls[0]->imageUrl; ?>'></td>
                <td><?php echo $item->Item->itemName; ?></td>
                <td><?php echo number_format($item->Item->itemPrice); ?>円</td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } ?>
</body>
</html>

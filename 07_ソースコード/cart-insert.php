<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php

echo '<div class="head">';
echo'<a href="toppage-log.html" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

$id=$_REQUEST['item_id'];
if(!isset($_SESSION['item'])){
    $_SESSION['item']=[];
}
$count=0;
if(isset($_SESSION['item'][$id])){
    $count=$_SESSION['item'][$id]['count'];
}
$_SESSION['item'][$id]=[
        'name'=>$_REQUEST['item_name'],
        'price'=>$_REQUEST['price'],
        'count'=>$count+$_REQUEST['count']
];
require 'cart.php';
?>
</body>
</html>

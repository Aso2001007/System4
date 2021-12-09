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

unset($_SESSION['item'][$_REQUEST['id']]);
require 'cart.php';
?>
</div>
</body>
</html>
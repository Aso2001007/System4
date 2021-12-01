<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="head">
    <a href="toppage.php" id="vanner" class="vanner">文房具サイト</a>
</div>

<div class="login">
    <?php
    if (isset($_SESSION['member'])) {
    unset($_SESSION['member']);
    echo 'ログアウトしました。';
    } else {
    echo 'ログアウトできませんでした。';
    }
?>
</div>
</body>
</html>

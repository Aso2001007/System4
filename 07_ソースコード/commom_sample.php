<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/sample.css">
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
    <dt id="categorysearch">カテゴリーで探す</dt>
    <dt><hr width="210"></dt>
    <dt><a href="list.php?sql=1" id="category-text">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt><a href="list.php?sql=2" id="category-text">消しゴム</a></dt>
    <dt><hr width="210"></dt>
</dl>
<div class="catecory-line-right"></div>
</form>

<script src="./script/script.js"></script>
</body>
</html>
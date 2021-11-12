<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会員情報</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="head">
    <a href="toppage-log.html" id="vanner">文房具サイト</a>
    <a id="user-name">名前　さん</a>
    <button type="submit"  href="cart.php" id="cart">カートの中　　🛒</button><br>
    <button type="submit" id="infor-regster" href="register.php">会員情報</button>
    <button type="submit" id="log" href="">ログアウト</button>
    <input type="search" id="keyword" name="keyword" placeholder="キーワードで検索">
    <button type="submit" id="keyword-button">🔍</button>
</div>

<dl class="category">
    <dt>カテゴリーで探す</dt>
    <dt><hr width="210"></dt>
    <dt><a href="">鉛筆、ペン</a></dt>
    <dt><hr width="210"></dt>
    <dt><a href="">消しゴム</a></dt>
    <dt><hr width="210"></dt>
</dl>

<div class="main">

    <p id="title">会員情報</p>

    <?php
    //DB接続
    require_once 'DbManager.php';
    $pdo = getDB();

    echo '<div class="information">
        <div class="editbox">
            <a>お名前：</a><input type="text" class="edittext" value="">
            <button type="submit" class="edit">編集</button><br>
            <a>設定されている名前</a><br>
        </div>
        <div class="editbox">
            <a>電話番号：</a><input type="text" class="edittext" value="">
            <button type="submit" class="edit">編集</button><br>
            <a>設定されている電話番号</a><br>
        </div>
        <div class="editbox">
            <a>Eメール：</a><input type="text" class="edittext" value="">
            <button type="submit" class="edit">編集</button><br>
            <a>設定されているEメール</a><br>
        </div>
        <div class="editbox">
            <a>パスワード：</a><input type="text" class="edittext" value="">
            <button type="submit" class="edit">編集</button><br>
            <a>設定されているパスワード</a><br>
        </div>
    </div>

    <button type="submit"　name="completion" id="completion">完了</button>';
    ?>
</div>
<script src="./script/script.js"></script>
</body>
</html>
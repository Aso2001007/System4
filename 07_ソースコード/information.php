<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会員情報</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!--sessionで会員情報を取得-->
<?php
$name=$phone=$mail=$password='';
if (isset($_SESSION['customer'])) {
    $name=$_SESSION['customer']['name'];
    $phone=$_SESSION['customer']['phone'];
    $mail=$_SESSION['customer']['mail'];
    $password=$_SESSION['customer']['password'];
}
/*メニュー*/
echo '<div class="head">';
    echo'<a href="toppage-log.html" id="vanner">文房具サイト</a>';/*トップページへ*/
    echo'<a id="user-name">',$name,'　さん</a>';/*ユーザー名*/
    echo'<button type="submit"  id="cart">カートの中　　🛒</button><br>';/*カートへ*/
    echo'<button type="submit" id="infor-regster" href="register.php">会員情報</button>';/*会員情報へ*/
    echo'<button type="submit" id="log" href="">ログアウト</button>';/*ログアウト*/
    echo'<input type="search" id="keyword" name="keyword" placeholder="キーワードで検索">';
    echo'<button type="submit" id="keyword-button">🔍</button>';/*検索ボタン*/
echo '</div>';

/*カテゴリ*/
echo '<dl class="category">';
    echo '<dt>カテゴリーで探す</dt>';
    echo '<dt><hr width="210"></dt>';
    echo '<dt><a href="">鉛筆、ペン</a></dt>';
    echo '<dt><hr width="210"></dt>';
    echo '<dt><a href="">消しゴム</a></dt>';
    echo '<dt><hr width="210"></dt>';
echo '</dl>';

/*会員情報*/
echo '<p id="title">会員情報</p>';
echo '<div class="infor-edit">';
    echo '<div class="infor-editbox"><a>お名前：</a>';
        echo '<a>',$name,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>電話番号：</a>';
        echo '<a>',$phone,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>メールアドレス：</a>';
        echo '<a>',$mail,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>パスワード：</a>';
        echo '<a>',$password,'</a>';
    echo '</div>';
echo '</div>';
?>
/*会員情報編集ページへ移動*/
<button type="submit" onclick="location.href='edit-in.php'" id="comp-edit">編集する</button>';
<script src="./script/script.js"></script>
</body>
</html>

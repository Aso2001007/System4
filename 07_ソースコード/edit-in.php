<?php require 'header.php'?>
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
echo'<button type="submit" href="cart.php" id="cart">カートの中　　🛒</button><br>';/*カートへ*/
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
echo '<form action="edit-out.php" method="post">';
    echo '<div class="infor-edit">';
        echo '<div class="infor-editbox"><a>お名前：</a>';
            echo '<input type="text" name="name" class="edit-text" placeholder="',$name,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>電話番号：</a>';
            echo '<input type="text" name="phone" class="edit-text" placeholder="',$phone,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>メールアドレス：</a>';
            echo '<input type="text" name="mail" class="edit-text" placeholder="',$mail,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>パスワード：</a>';
            echo '<input type="text" name="password" class="edit-text" placeholder="',$password,'">';
        echo '</div>';
    echo '</div>';
?>
<button type="submit" id="comp-edit">完了</button>
<script src="./script/script.js"></script>
<?php require 'footer.php' ?>

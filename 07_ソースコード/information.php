<?php session_start();?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
<body>
<!--sessionで会員情報を取得-->
<?php
$name=$address=$tell=$mail=$password='';
if (isset($_SESSION['member'])) {
    $name=$_SESSION['member']['name'];
    $address=$_SESSION['member']['address'];
    $tell=$_SESSION['member']['tell'];
    $mail=$_SESSION['member']['mail'];
    $password=$_SESSION['member']['password'];
}

/*メニュー*/
echo '<div class="head">';
    echo'<a href="toppage-log.html" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

/*ページ名*/
echo '<p id="title">会員情報</p>';

/*出力画面*/
echo '<div class="infor-edit">';
    echo '<div class="infor-editbox"><a>お名前：</a>';
        echo '<a>',$name,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>電話番号：</a>';
        echo '<a>',$tell,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>メールアドレス：</a>';
        echo '<a>',$mail,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>パスワード：</a>';
        echo '<a>',$password,'</a>';
    echo '</div>';
    echo '<div class="infor-editbox"><a>住所：</a>';
        echo '<a>',$address,'</a>';
    echo '</div>';
echo '</div>';
?>
<!--会員情報編集ページへ移動-->
<button type="submit" onclick="location.href='edit-in.php'" id="comp-edit">編集する</button>
<script src="./script/script.js"></script>
</body>
</html>
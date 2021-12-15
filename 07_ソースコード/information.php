<?php session_start();?>
<!--会員情報表示ページ-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>文房具サイト</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/edit.css">
    </head>
<body>
<!--sessionで会員情報を取得-->
<?php
$name=$address=$tel=$mail=$password='';
if (isset($_SESSION['member'])) {
    $name=$_SESSION['member']['name'];
    $address=$_SESSION['member']['address'];
    $tel=$_SESSION['member']['tel'];
    $mail=$_SESSION['member']['mail'];
    $password=$_SESSION['member']['password'];
}

/*メニュー*/
echo '<div class="head">';
    echo'<a href="login-toppage.php" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

/*ページ名*/
echo '<a class="information_title">会員情報</a>';

/*出力画面*/
echo '<div class="infor-edit">';
    echo '<div class="information-box"><a>お名前：</a>';
        echo '<a class="member-data">',$name,'</a>';
    echo '</div>';
    echo '<div class="information-box"><a>電話番号：</a>';
        echo '<a class="member-data">',$tel,'</a>';
    echo '</div>';
    echo '<div class="information-box"><a>メールアドレス：</a>';
        echo '<a class="member-data">',$mail,'</a>';
    echo '</div>';
    echo '<div class="information-box"><a>パスワード：</a>';
        echo '<a class="member-data">',$password,'</a>';
    echo '</div>';
    echo '<div class="information-box"><a>住所：</a>';
        echo '<a class="member-data">',$address,'</a>';
    echo '</div>';
echo '</div>';
?>
<!--会員情報編集ページへ移動-->
<button type="submit" onclick="location.href='edit-in.php'" class="comp-edit">編集</button>
</body>
</html>

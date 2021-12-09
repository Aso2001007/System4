<?php session_start();?>
<!--会員情報編集ページ-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文房具サイト</title>
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

/*会員情報*/
echo '<p id="title">会員情報</p>';

echo '<form action="edit-out.php" method="post">';
    echo '<div class="infor-edit">';
        echo '<div class="edit-box"><a>お名前：</a>';
            echo '<input type="text" name="name" class="edittext" value="',$name,'">';
        echo '</div>';
        echo '<div class="edit-box"><a>電話番号：</a>';
            echo '<input type="text" name="tell" class="edittext" value="',$tell,'">';
        echo '</div>';
        echo '<div class="edit-box"><a>メールアドレス：</a>';
            echo '<input type="text" name="mail" class="edittext" value="',$mail,'">';
        echo '</div>';
        echo '<div class="edit-box"><a>パスワード：</a>';
            echo '<input type="password" name="password" class="edittext" value="',$password,'">';
        echo '</div>';
        echo '<div class="edit-box"><a>住所：</a>';
            echo '<input type="text" name="address" class="edittext" value="',$address,'">';
        echo '</div>';
    echo '</div>';

?>
<button type="submit" class="comp-edit">完了</button>
<script src="./script/script.js"></script>
</body>
</html>

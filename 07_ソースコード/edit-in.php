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

/*会員情報*/
echo '<p id="title">会員情報</p>';

echo '<form action="edit-out.php" method="post">';
    echo '<div class="infor-edit">';
        echo '<div class="infor-editbox"><a>お名前：</a>';
            echo '<input type="text" name="name" class="edit-text" value="',$name,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>電話番号：</a>';
            echo '<input type="text" name="tell" class="edit-text" value="',$tell,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>メールアドレス：</a>';
            echo '<input type="text" name="mail" class="edit-text" value="',$mail,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>パスワード：</a>';
            echo '<input type="password" name="password" class="edit-text" value="',$password,'">';
        echo '</div>';
        echo '<div class="infor-editbox"><a>住所：</a>';
            echo '<input type="text" name="address" class="edit-text" value="',$address,'">';
        echo '</div>';
    echo '</div>';

?>
<button type="submit" id="comp-edit">完了</button>
<script src="./script/script.js"></script>
</body>
</html>

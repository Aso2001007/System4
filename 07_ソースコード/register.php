<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文房具サイト</title>
    <link rel="stylesheet" href="./css/style-main.css">
    <link rel="stylesheet" href="./css/reg.css">
</head>
<body>

<div class="head">
    <a href="toppage.php" id="vanner">文房具サイト</a>
</div>

<div class="register">
    <h1>会員登録</h1>
</div>
<?php
$name=$address=$pass=$tel=$mail='';
if (isset($_SESSION['member'])) {
    $name=$_SESSION['member']['name'];
    $address=$_SESSION['member']['address'];
    $pass=$_SESSION['member']['pass'];
    $tel=$_SESSION['member']['tel'];
    $mail=$_SESSION['member']['mail'];
}
echo '<div class="register-main">';
echo '<form action="register-info.php" method="post">';
echo '<p class="reg-name">お名前</p>';
echo '<input type="text" class="register-name" name="name" placeholder="名前を入力してください" value="',$name,'">','<br>';
echo '<p class="reg-mail">メールアドレス</p>';
echo '<input type="text" class="register-mail" name="mail" placeholder="メールアドレスを入力してください" value"',$mail,'">','<br>';
echo '<p class="reg-tel">電話番号</p>';
echo '<input type="text" class="register-tel" name="tel" placeholder="電話番号を入力してください" value="',$tel,'">','<br>';
echo '<p class="reg-pass">パスワード</p>';
echo '<input type="password" class="register-pass" name="pass" placeholder="英大文字,小文字,数字が1文字以上含まれてる8文字以上24文字以下" value="',$pass,'">','<br>';
echo '<p class="reg-address">ご住所</p>';
echo '<input type="text" class="register-address" name="address" placeholder="住所を入力してください" value="',$address,'">','<br>';
echo '<input type="submit" class="register-submit" value="確定">';
echo '</form>';
echo '</div>';
?>
</body>
</html>

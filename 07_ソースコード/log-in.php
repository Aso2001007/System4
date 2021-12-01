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

<a class="login_title">ログイン</a><br>
    <br>

    <form action="log-out.php" method="post">
        <a class="log_text">メールアドレス又は電話番号</a><br>
        <input type="text" name="tell_mail"class="log_box"><br>
        <a class="log_text">パスワード</a><br>
        <input type="password" name="pass" class="log_box"><br>


    <button type="submit" class="login_button">ログイン</button>
    </form>
</div>
</body>
</html>
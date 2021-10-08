<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<input type="button" onclick="location.href='toppage.php'" value="文房具サイト">
<input type="text"><button type="submit">検索</button>
<form action="register.info.php" method="post">
    <p>会員登録</p>
    <p>お名前：<br>
        <input type="text" name="name" size="10" maxlength="40">
    </p>
    <p>電話番号：<br>
        <input type="text" name="tel" size="10" maxlength="40">
    </p>
    <p>Eメール：<br>
        <input type="text" name="email" size="10" maxlength="40">
    </p>
    <p>パスワード：<br>
        <input type="text" name="pass" size="10" maxlength="40">
    </p>
    <p><input type="submit" value="完了"></p>
</form>
</body>
</html>

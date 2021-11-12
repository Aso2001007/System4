<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="head">
    <a href="toppage-log.php" id="vanner">文房具サイト</a>
    <input type="text" id="keyword" name="keyword" placeholder="キーワードで検索">
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
<div class="register">
    <h1>会員登録</h1>
</div>


<div class="register-main">
    <form action="register.info.php" method="post">

        <p class="reg-name">お名前：<br>
            <input type="text" class="register-name" size="100" maxlength="500" placeholder="お名前を入力してください">
        <p class="reg-tel">電話番号：<br>
            <input type="text" class="register-tel" placeholder="電話番号を入力してください">
        </p>
        <p class="reg-email">Eメール：<br>
            <input type="text" class="register-email" placeholder="メールアドレスを入力してください">
        </p>
        <p class="reg-pass">パスワード：<br>
            <input type="text" class="register-pass" placeholder="パスワードを入力してください">
        </p>
    </div>
<div class="register-submit">
        <p><input type="submit" value="完了"></p>
    </form>
</div>

</body>
</html>

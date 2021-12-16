<?php session_start(); ?>

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


<?php
try {
    $pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1290633-system4; charset=utf8', 'LAA1290633', 'daisuke0804');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if (isset($_SESSION['member'])) {
        $id = $_SESSION['member']['id'];
        $sql = $pdo->prepare('select * from member where id!=? and mail=?');
        $sql->execute([$id, $_REQUEST['mail']]);
    } else {
        $sql = $pdo->prepare('select * from member where mail=?');
        $sql->execute([$_REQUEST['mail']]);
    }

    if (empty($sql->fetchAll())) {
        if (isset($_SESSION['member'])) {
            $sql = $pdo->prepare('update member set name=?, address=?, mail=?, tel=?, pass=?, where id=?');
            $sql->execute([$_REQUEST['name'], $_REQUEST['address'], $_REQUEST['mail'], $_REQUEST['tel'], $_REQUEST['pass'], $id]);
            $_SESSION['member'] = ['id' => $id, 'name' => $_REQUEST['name'], 'address' => $_REQUEST['address'], 'mail' => $_REQUEST['mail'], 'tel' => $_REQUEST['tel'], 'pass' => $_REQUEST['pass']];
            echo 'お客様情報を更新しました。';
        } else {
            //        insert into member values(null,'System4','2001007@s.asojuku.ac.jp',08085579573,'pass','hukuoka');
            $sql=$pdo->prepare('insert into member values(null,?,?,?,?,?)');
            $sql->execute([$_REQUEST['name'],$_REQUEST['address'],$_REQUEST['tel'],$_REQUEST['mail'],$_REQUEST['pass']]);
            echo '<div class="register-info">';
            echo '<p>お客様情報を登録しました。</p>';
            echo '<a href="login-in.php">ログイン画面に進む</a>';
            echo '</div>';

        }

    } else {
        echo '<div class="register-info">';
        echo '<p>メールアドレスがすでに使用されていますので、変更してください！</p>';
        echo '<a href="register.php">戻る</a>';
        echo '</div>';
    }

    $pdo = null;
}catch(PDOException $e){
    echo $e->getMessage();
}
?>

</body>
</html>

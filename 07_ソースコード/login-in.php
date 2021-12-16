<?php session_start();

unset($_SESSION['member']);

if(isset($_POST["login"])){

    unset($_SESSION['member']);

    $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
          dbname=LAA1290633-system4;charset=utf8',
        'LAA1290633',
        'daisuke0804');

    $tell_mail=$_POST['tell_mail'];
    if (preg_match('|^[0-9a-z_./?-]+@([0-9a-z]+\.)+[0-9a-z-]+$|',$tell_mail)){

        $sql=$pdo->prepare('select * from member where mail=? and pass=?');
        $sql->execute([$_REQUEST['tell_mail'],$_REQUEST['pass']]);

        foreach ($sql as $row){
            $_SESSION['member']=[
                'id'=>$row['user_id'],'mail'=>$row['mail'],
                'name'=>$row['name'],'phone'=>$row['tel'],
                'password'=>$row['pass'],'address'=>$row['address']];
        }
        if (isset($_SESSION['member'])){
            http_response_code(301);

            header("location:http://aso2001007.versus.jp/System4/login-toppage.php");
            exit;
        }

    } else if (preg_match('/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/',$tell_mail)){

        $sql=$pdo->prepare('select * from member where tel=? and pass=?');
        $sql->execute([$_REQUEST['tell_mail'],$_REQUEST['pass']]);

        foreach ($sql as $row){
            $_SESSION['member']=[
                'id'=>$row['user_id'],'mail'=>$row['mail'],
                'name'=>$row['name'],'phone'=>$row['tel'],
                'password'=>$row['pass'],'address'=>$row['address']];
        }
        if (isset($_SESSION['member'])){
            http_response_code(301);

            header("location:http://aso2001007.versus.jp/System4/login-toppage.php");
            exit;
        }

    }

}
?>

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

    <?php
    if(isset($_POST["login"])){
        echo '<div class="error_text">';
        echo '電話番号/メールアドレス又はパスワードが違います。';
        echo '</div>';
    }else{
        echo "<br>";
    }
    ?>

    <form action="login-in.php" method="post">
        <a class="log_text">メールアドレス又は電話番号</a><br>
        <input type="text" name="tell_mail"class="log_box"><br>
        <a class="log_text">パスワード</a><br>
        <input type="password" name="pass" class="log_box"><br>


    <button type="submit" name="login" class="login_button">ログイン</button>
    </form>
</div>
</body>
</html>

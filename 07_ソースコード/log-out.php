<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="head">
    <a href="toppage.php" id="vanner">文房具サイト</a>
</div>

<div class="login">
<?php
unset($_SESSION['member']);

$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
          dbname=LAA1290633-system4;charset=utf8',
    'LAA1290633',
    'daisuke0804');

$tell_mail=$_POST['tell_mail'];
if (preg_match('|^[0-9a-z_./?-]+@([0-9a-z]+\.)+[0-9a-z-]+$|',$tell_mail)){

    $sql=$pdo->prepare('select * from system where mail=? and pass=?');
    $sql->execute([$_REQUEST['tell_mail'],$_REQUEST['pass']]);

    foreach ($sql as $row){
        $_SESSION['member']=[
            'id'=>$row['user_id'],'mail'=>$row['mail'],
            'name'=>$row['name'],'phone'=>$row['tel'],
            'password'=>$row['pass'],'address'=>$row['address']];
    }
    if (isset($_SESSION['member'])){
        echo 'ようこそ、',$_SESSION['member']['name'],'さん';
        echo "<a href=","toppage.php",">トップページへ戻ります。</a>";
    }else{
        echo '電話番号/メールアドレス又はパスワードが違います。';
        echo "<a href=","log-in.php",">ログインページへ戻ります。</a>";
    }

} else if (preg_match('/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/',$tell_mail)){

    $sql=$pdo->prepare('select * from system where tel=? and pass=?');
    $sql->execute([$_REQUEST['tell_mail'],$_REQUEST['pass']]);

    foreach ($sql as $row){
    $_SESSION['member']=[
    'id'=>$row['user_id'],'mail'=>$row['mail'],
    'name'=>$row['name'],'phone'=>$row['tel'],
    'password'=>$row['pass'],'address'=>$row['address']];
    }
if (isset($_SESSION['member'])){
echo 'ようこそ、',$_SESSION['member']['name'],'さん';
echo "<a href=","toppage.php",">トップページへ戻ります。</a>";
}else{
echo '電話番号/メールアドレス又はパスワードが違います。';
echo "<a href=","log-in.php",">ログインページへ戻ります。</a>";
}

} else {
    echo $tell_mail,'は適切な電話番号/メールアドレスではありません。';
    echo "<a href=","log-in.php",">ログインページへ戻ります。</a>";
}

?>
</div>
</body>
</html>
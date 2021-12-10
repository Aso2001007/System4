<?php session_start();?>
<!--会員情報編集処理ページ-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>文房具サイト</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
<body>
<?php

/*メニュー*/
echo '<div class="head">';
    echo'<a href="toppage-log.html" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

/*DB接続*/
$pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1290579-system4;charset=utf8',
    'LAA1290579',
    'IZUken0626');

echo '<div class="edit-out">';

$tell=$_POST['tell'];
$mail=$_POST['mail'];
$password=$_POST['password'];

/*電話番号の正規表現*/
if (preg_match('/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/',$tell)){
    /*メールアドレスの正規表現*/
    if (preg_match('|^[0-9a-z_./?-]+@([0-9a-z]+\.)+[0-9a-z-]+$|',$mail)){
        /*パスワードの正規表現*/
        if (preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,24}/',$password)){

            /*if (isset($_SESSION['member'])) {
                $id=$_SESSION['member']['id'];
                $sql=$pdo->prepare('SELECT * FROM member WHERE user_id=?');
                $sql->execute([$id]);
            }*/
            
            $id=$_SESSION['member']['id'];

            if (isset($_SESSION['member'])) {
                $sql=$pdo->prepare('UPDATE member SET name=?,address=?,tell=?,mail=?,password=? WHERE user_id=?');
                $sql->execute([
                    $_REQUEST['name'],$_REQUEST['address'],$_REQUEST['tell'],
                    $_REQUEST['mail'],$_REQUEST['password'],$id]);

                /*sessionに再登録*/
                $_SESSION['member']=[
                    'id'=>$id,'name'=>$_REQUEST['name'],'address'=>$_REQUEST['address'],
                    'tell'=>$_REQUEST['tell'],'mail'=>$_REQUEST['mail'],
                    'password'=>$_REQUEST['password']];

                echo '<a>お客様情報を更新しました。</a><br>';
                echo '<a href="information.php">会員情報ページに戻る</a>';
            } else {
                echo '<a>お客様情報を更新できませんでした。</a><br>';
                echo '<a href="information.php">会員情報ページに戻る</a>';
            }
        }else{
            echo '<a>お客様情報を更新できませんでした。</a><br>';
            echo '<a href="information.php">会員情報ページに戻る</a>';
        }
    }else{
        echo '<a>お客様情報を更新できませんでした。</a><br>';
        echo '<a href="information.php">会員情報ページに戻る</a>';
    }
}else{
    echo '<a>お客様情報を更新できませんでした。</a><br>';
    echo '<a href="information.php">会員情報ページに戻る</a>';
}
echo '</div>';
?>
</body>
</html>

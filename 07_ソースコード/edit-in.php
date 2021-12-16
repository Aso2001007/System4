<?php session_start();
if (isset($_POST["edit"])){
    /*DB接続*/
   $pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
                  dbname=LAA1290633-system4; charset=utf8',
                  'LAA1290633', 
                  'daisuke0804');

    $tel=$_POST['tel'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    /*電話番号の正規表現*/
    if (preg_match('/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/',$tel)){
        /*メールアドレスの正規表現*/
        if (preg_match('|^[0-9a-z_./?-]+@([0-9a-z]+\.)+[0-9a-z-]+$|',$mail)){
            /*パスワードの正規表現*/
            if (preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,24}/',$password)){

                if (isset($_SESSION['member'])) {
                    $id=$_SESSION['member']['id'];
                    $sql=$pdo->prepare('SELECT * FROM member WHERE user_id=?');
                    $sql->execute([$id]);
                }

                if (isset($_SESSION['member'])) {
                    $sql=$pdo->prepare('UPDATE member SET name=?,address=?,tel=?,mail=?,pass=? WHERE user_id=?');
                    $sql->execute([
                        $_REQUEST['name'],$_REQUEST['address'],$_REQUEST['tel'],
                        $_REQUEST['mail'],$_REQUEST['password'],$id]);

                    /*sessionに再登録*/
                    $_SESSION['member']=[
                        'id'=>$id,'name'=>$_REQUEST['name'],'address'=>$_REQUEST['address'],
                        'tel'=>$_REQUEST['tel'],'mail'=>$_REQUEST['mail'],
                        'password'=>$_REQUEST['password']];

                    if (isset($_SESSION['member'])){
                        http_response_code(301);

                        header("location:http://aso2001007.versus.jp/System4/information.php");
                        exit;
                    }
                }
            }
        }
    }
}

?>
<!--会員情報編集ページ-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文房具サイト</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
<!--sessionで会員情報を取得-->
<?php
$name=$address=$tel=$mail=$password='';
if (isset($_SESSION['member'])) {
    $name=$_SESSION['member']['name'];
    $address=$_SESSION['member']['address'];
    $tel=$_SESSION['member']['tel'];
    $mail=$_SESSION['member']['mail'];
    $password=$_SESSION['member']['password'];
}

/*メニュー*/
echo '<div class="head">';
    echo'<a href="login-toppage.php" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

/*会員情報*/
if (isset($_POST["edit"])){
    echo '<a class="cant_edit">会員情報を更新出来ませんでした</a>';
}
    
echo '<a class="information_title">会員情報</a>';
echo '<form action="edit-in.php" method="post">';
    echo '<div class="infor-edit">';
        echo '<div class="edit-box"><a>お名前：</a>';
            echo '<input type="text" name="name" class="edittext" value="',$name,'">';
        echo '</div>';
        echo '<div class="edit-box"><a>電話番号：</a>';
            echo '<input type="text" name="tel" class="edittext" value="',$tel,'">';
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
<button type="submit" name="edit" class="comp-edit">完了</button>
</form>
</body>
</html>

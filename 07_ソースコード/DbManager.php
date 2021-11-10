<?php
function getDb() {
    // データベースへの接続を確認
    $dsn='mysql:host=mysql153.phy.lolipop.lan';
    $username='LAA1290633';
    $password='daisuke0804';
    $pdo=new PDO($dsn,$username,$password);
    return $pdo;
}
?>

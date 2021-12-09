<?php session_start();?>
<!--カート内ボタンを押した際に飛ぶページ-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>文房具サイト</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
<?php

echo '<div class="head">';
echo'<a href="toppage-log.html" id="vanner">文房具サイト</a>';/*トップページへ*/
echo '</div>';

require 'cart.php';
?>
    </body>
</html>

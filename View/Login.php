<?php
/**
 * ログイン画面のView
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

//  session_start();

?>

<!DOCTYPE html>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../public/css/Login.css">
        <link rel="icon" href="../public/img/favicon.ico">
        <title>LoginPage</title>
        
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <h1>Welcome</h1>
                <form action="../View/Login.php" method="POST"  class="form">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="E-Mail" name="email">
                    <input type="password" placeholder="Paasword" name="password">
                    <input type="submit" value="Login">
            </div>
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>
</html>
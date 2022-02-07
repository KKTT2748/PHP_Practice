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
                <form class="form">
                    <input type="text" placeholder="Username" @bind="@UserName">
                    <input type="password" placeholder="Password" @bind="@Password">
                    <button type="button" id="login-button" @onclick="this.Log_in">Login</button>
                </form>
            </div>
            <ul class="bg-bubbles">
                <li>d</li>
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
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
        <div class="container">
            <h1>Welcome!</h1>
            <div class="login_form">
                <form action="../Contoroller/LoginController.php" method="post">
                    <ul>
                        <li>
                            <label for="username">Username</label>
                            <input type="text" name="username">
                            <label for="errMsg"></label>
                            <?php  ?>
                        </li>
                        <li>
                            <label for="email">E:mail</label>
                            <input type="email" name="email">
                        </li>
                        <li>
                            <label for="password">Password</label>
                            <input type="password" name="password">
                        </li>
                    </ul>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
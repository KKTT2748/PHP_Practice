<?php
/**
 * ログイン画面のView
 *
 * @copyright (c)Kawakami_Taiga
 * @license https://codepen.io/
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

session_start();

$strErrMsg = $_SESSION;

session_destroy();

?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/Login.css">
    <link rel="icon" href="../public/img/favicon.ico">
    <title>Login</title>
</head>

<body>
    <div class="form-wrapper">
    <h1>User Regist</h1>
        <form action="../Contoroller/LoginController.php" method="POST" autocomplete="off">

            <div class="form-item">
            <input type="text" placeholder="Username" name="username">
            </div>

            <div class="form-item">
            <input type="password" placeholder="Paasword" name="password">
            </div>

            <div class="form-item">
            <input type="password" placeholder="Confirmation Password" name="conf_password">
            </div>

            <div class="button-panel">
            <input type="submit" class="button" title="Create an account" value="Create an account"></input>
            </div>

        </form>

        <div class="form-footer">
            <p><a href="../View/Login.php">Login</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>

    </div>
</body>

</html>

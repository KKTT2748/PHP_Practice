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
if(isset($_SESSION['id'])){
    header('Location: Login.php');
}

$strErrMsg = $_SESSION;

session_destroy();

?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/Login.css">
    <link rel="icon" href="../public/img/favicon.ico">
    <title>Sign In</title>
</head>

<body>
    <div class="form-wrapper">
    <h1>Welcome</h1>
        <form action="../Controller/LoginController.php" method="POST" autocomplete="off">

            <div class="form-item">
            <input type="text" placeholder="Username" name="username">
            <p><?php if(isset($strErrMsg['E001'])) { echo $strErrMsg['E001']; } ?></p>
            <p><?php if(isset($strErrMsg['V001'])) { echo $strErrMsg['V001']; } ?></p>
            </div>



            <div class="form-item">
            <input type="password" placeholder="Paasword" name="password">
            <p><?php if(isset($strErrMsg['E002'])) { echo $strErrMsg['E002']; } ?></p>
            <p><?php if(isset($strErrMsg['V002'])) { echo $strErrMsg['V002']; } ?></p>
            </div>

            <div class="button-panel">
            <input type="submit" class="button" title="Login" value="Login"></input>
            </div>

        </form>

        <div class="form-footer">
            <p><a href="../View/UserRegist.php">Create an account</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>

    </div>
</body>

</html>

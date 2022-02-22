<?php

/**
 * ログイン画面のController
 * Login.phpの入力情報を取得しログイン可否を判断する
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

require_once '../Model/LoginModel.php';
require_once '../Utility/errMsg.php';

session_start();

// フォーム入力情報を取得
$_POST['username'];
$strHashPass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// 空欄バリデーション
if(!$_POST['username'] = filter_input(INPUT_POST, 'username')) {
    $strErrMsg = errMsg::get_err_message();
    $_SESSION['E001'] = $strErrMsg['E001'];
}

if(!$_POST['password'] = filter_input(INPUT_POST, 'password')) {
    $strErrMsg = errMsg::get_err_message();
    $_SESSION['E002'] = $strErrMsg['E002'];
}

//ログインロジック
$arrUserData = LoginModel::select_users($_POST['username']);
if(($arrUserData)) {
    if(password_verify($_POST['password'], implode($arrUserData))) {
        $_SESSION['id'] = $_POST['username'];
        header('Location: ../View/Menu.php');
    }
} else {
    header('Location: ../View/Login.php');
} 
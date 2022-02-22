<?php

/**
 * ログイン画面のController
 * UserRegist.phpの入力情報を取得しユーザー登録可否を判断する
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

require_once '../Model/UserRegistModel.php';
require_once '../Utility/errMsg.php';

session_start();

// バリエーション
if(!$_POST['username'] = filter_input(INPUT_POST, 'username')) {
    $strErrMsg = errMsg::get_err_message();
    $_SESSION['E001'] = $strErrMsg['E001'];
}

if(!$_POST['password'] = filter_input(INPUT_POST, 'password')) {
    $strErrMsg = errMsg::get_err_message();
    $_SESSION['E002'] = $strErrMsg['E002'];
}

if(!$_POST['conf_password'] = filter_input(INPUT_POST, 'conf_password')) {
    $strErrMsg = errMsg::get_err_message();
    $_SESSION['E003'] = $strErrMsg['E003'];
}

// 登録処理
if(count($_SESSION) === 0) {
    UserRegistModel::insert_users($_POST);
    header('Location: ../View/Menu.php');
} else {
    header('Location: ../View/UserRegist.php');
}



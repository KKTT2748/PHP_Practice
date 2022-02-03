<?php

/**
 * ログイン画面のController
 * Login.viewの入力情報を取得しログイン可否を判断する
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

require_once '../Model/LoginModel.php';
require_once '../Utility/errMsg.php';
require_once '../Utility/Validattion.php';

// session_start();

// フォーム入力情報を取得
$strName  = $_POST['username'];
$strEmail = $_POST['email'];
$strPass  = $_POST['password'];

// 空欄バリデーション_falseなら対応するエラーメッセージを格納
$arrErrMsg = errMsg::get_err_message();
if(Validation::emp_validate($strName) === false) {
    $strErrMsg = $arrErrMsg['V001'];
}

if(Validation::emp_validate($strEmail) === false) {
    $strErrMsg = $arrErrMsg['V002'];
}

if(Validation::emp_validate($strPass) === false) {
    $strErrMsg = $arrErrMsg['V003'];
}

// var_dump($strErrMsg);

//ログインロジック
if(count($strErrMsg) === 0){
    $arrUser = LoginModel::login();
    foreach($arrUser as $key => $value){
    if($value['name'] === $strName && $value['email'] === $strEmail && $value['password'] === $strPass) {
        header('Location: ../View/Menu.php');
        exit;
    } else {
        header('Location: ../View/Login.php');
        exit;
    }
    }
}





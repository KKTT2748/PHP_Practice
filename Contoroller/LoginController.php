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

session_start();

// フォーム入力情報を取得
$strName  = $_POST['username'];
$strEmail = $_POST['email'];
$strPass  = $_POST['password'];

// バリデーション

// 1つでもエラーがあればセッションにエラーメッセージを格納してログイン画面に戻す

//ログインロジック
$user = LoginModel::login();
foreach($user as $key => $value){
    if($value['name'] === $strName && $value['email'] === $strEmail && $value['password'] === $strPass) {
        header('Location: ../View/Menu.php');
        exit;
    } else {
        header('Location: ../View/Login.php');
    }
}




<?php

/**
 * ログイン画面のModel
 * usersテーブルからユーザー情報を取得する
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

require_once '../dbconnect.php';

class LoginModel
{
     /**
     * DBからログイン情報を取得
     * @param $strUserData 
     * @return string $strUserData
     */
    public static function select_users($strUserName)
    {
        try {
            $sql = "SELECT password FROM users WHERE name = ? ";
            $stmt = connect() -> prepare($sql);
            $stmt -> bindValue(1, $strUserName, PDO::PARAM_STR);
            $stmt -> execute();
            $strUserData = $stmt -> fetch();
            return $strUserData;
            } catch(\Exception $e) {
                echo '接続エラー'. $e -> getMessage();
            };
        unset($pdo);
    }
}


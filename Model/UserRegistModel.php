<?php

/**
 * ログイン画面のModel
 * usersテーブルへユーザー情報を登録する
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

require_once '../dbconnect.php';

class UserRegistModel
{
    /**
     * DBへユーザー情報を登録
     * @param $strInputUsername $strInputPassword
     * @return array $user
     */
    public static function insert_users($strInputUsername, $strInputPassword)
    {
        $sql = 'INSERT INTO users (`name`, `password`) VALUES (`:name`,`:password`)';

        try {
            $stmt = connect() -> prepare($sql);
            $params = array(':name' => $strInputUsername, ':password' => $strInputPassword);
            $result = $stmt -> execute($params);
            return $result;
        } catch(\Exception $e) {
            echo '接続エラー'. $e -> getMessage();
        };
        unset($pdo);
    }
}


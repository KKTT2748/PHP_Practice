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
     * @param array $arrUserData
     * @return bool $result
     */
    public static function insert_users($arrUserData)
    {
        $result = false;

        $sql = 'INSERT INTO users (name, password) VALUES (?, ?)';
        $arr = [];
        $arr[] = $arrUserData['username'];
        // $arr[] = hash('sha256', $arrUserData['password']);
        $arr[] = password_hash($arrUserData['password'], PASSWORD_DEFAULT);

        try {
            $stmt = connect() -> prepare($sql);
            $result = $stmt -> execute($arr);
            return $result;
        } catch(\Exception $e) {
            return $result;
        };
        unset($pdo);
    }
}


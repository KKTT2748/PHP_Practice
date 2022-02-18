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
     *
     * @return array $user
     */
    public static function select_users()
    {
        $sql = 'SELECT * FROM users';

        try {
            $stmt = connect() -> query($sql);
            $user = $stmt -> fetchAll();
            return $user;
        } catch(\Exception $e) {
            echo '接続エラー'. $e -> getMessage();
        };
        unset($pdo);
    }
}


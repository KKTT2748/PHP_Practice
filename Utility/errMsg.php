<?php

/**
 * エラーメッセージクラス
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

class errMsg
{
        /**
     * エラーメッセージを連想配列に格納
     *
     * @return array $arrErrMsgDictionary
     */
    public static function get_err_message()
    {
        $arrErrMsgDictionary = [
            'E001' => 'ユーザーネームが未入力です。',
            'E002' => 'パスワードが未入力です。',
            'E003' => '確認用パスワードが未入力です。',
            'E004' => 'ユーザーの登録に失敗しました。',
            'E005' => 'パスワードの形式が不正です。',
            'E006' => '確認用パスワードの形式が不正です。',
            'E007' => 'パスワードが一致しません。',
        ];
        return $arrErrMsgDictionary;
    }
}
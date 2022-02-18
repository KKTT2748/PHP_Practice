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
            'V001' => 'ユーザーネームが不正です。',
            'V002' => 'パスワードが不正です。',
            'V003' => '確認用パスワードが不正です。',
            'V004' => 'パスワードが一致しません。',
        ];
        return $arrErrMsgDictionary;
    }
}
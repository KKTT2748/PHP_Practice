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
            'V001' => 'ユーザーネームが未入力です。',
            'V002' => 'メールアドレスが未入力です。',
            'V003' => 'パスワードが未入力です。',
            'V004' => 'ユーザーネームが不正です。',
            'V005' => 'メールアドレスが不正です。',
            'V006' => 'パスワードが不正です。',
        ];
        return $arrErrMsgDictionary;
    }
}
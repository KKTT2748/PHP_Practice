<?php

require_once '../Utility/errMsg.php';

$strErrMsg = errMsg::get_err_message();

// $strMsgDictionary = [
//             'V001' => 'ユーザーネームが未入力です。',
//             'V002' => 'メールアドレスが未入力です。',
//             'V003' => 'パスワードが未入力です。',
//             'V004' => 'ユーザーネームが不正です。',
//             'V005' => 'メールアドレスが不正です。',
//             'V006' => 'パスワードが不正です。',
//         ];
echo($strErrMsg['V001']);
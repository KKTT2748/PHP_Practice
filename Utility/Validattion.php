<?php

/**
 * バリデーションクラス
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

class Validation
{
     /**
     * 空欄バリデーションを行う
     * @param string $inputData
     * @return bool $result
     */
    public static function emp_validate($inputData)
    {
        $boolResult = true;
        if(strlen($inputData) === 0) {
            $boolResult = false;
            return $boolResult;
        } 
    }

     /**
     * 正規表現バリデーションを行う
     * @param string $inputData
     * @return bool $result
     */
    public static function preg_validate()
    {

    }
}
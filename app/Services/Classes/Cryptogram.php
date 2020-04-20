<?php

namespace App\Services\Classes;

class Cryptogram
{
    /**
     * 簡易的な暗号化
     */
    public static function easyEncryption($data)
    {
        // データをJSON形式に変換
        $jsonData = json_encode($data);

        // データをZIP形式で圧縮
        $zippedData = gzcompress($jsonData);

        // データのMAIL_ADDRESSPASSを鍵として使用し、暗号化
        $encryptedData = openssl_encrypt($zippedData, 'aes-256-ecb', env('MAIL_ADDRESSPASS'));

        // データを10進数から16進数へ変換
        $hexedEncryptedData = bin2hex($encryptedData);

        return $hexedEncryptedData;
    }

    /**
     * 簡易的な複合
     */
    public static function easyDecryption($hexedEncryptedData)
    {
        // 16進数から10進数に変換
        $encryptedData = hex2bin($hexedEncryptedData);

        // データのMAIL_ADDRESSPASSを鍵として使用し、復号
        $zippedData = openssl_decrypt($encryptedData, 'aes-256-ecb', env('MAIL_ADDRESSPASS'));

        // ZIP形式を解凍
        $jsonData = gzuncompress($zippedData);

        // JSON形式から連想配列に変換
        $data = json_decode($jsonData);

        return (array) $data;
    }
}

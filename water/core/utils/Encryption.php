<?php namespace core\utils;

use core\contracts\ICrypt;

final class Encryption implements ICrypt
{
    use \core\traits\ClassMethods;

    public static function encode($decrypted)
    {
        self::validateNumArgs(__FUNCTION__, func_num_args(), 1, 1);
        self::validateArgType(__FUNCTION__, $decrypted, 1, ['string']);

        $encrypted = mcrypt_encrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, $decrypted, MCRYPT_MODE_ECB);
        $encrypted = base64_encode($encrypted);
        return trim($encrypted);
    }

    public static function decode($encrypted)
    {
        self::validateNumArgs(__FUNCTION__, func_num_args(), 1, 1);
        self::validateArgType(__FUNCTION__, $encrypted, 1, ['string']);

        $encrypted = base64_decode($encrypted);
        $decrypted = mcrypt_decrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, $encrypted, MCRYPT_MODE_ECB);
        return trim($decrypted);
    }
}
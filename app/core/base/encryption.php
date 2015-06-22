<?php namespace core\base;

final class Encryption
{
    public static function make($decrypted)
    {
        $encrypted = mcrypt_encrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, $decrypted, MCRYPT_MODE_ECB);
        $encrypted = base64_encode($encrypted);
        return trim($encrypted);
    }

    public static function undo($encrypted)
    {
        $encrypted = base64_decode($encrypted);
        $decrypted = mcrypt_decrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, $encrypted, MCRYPT_MODE_ECB);
        return trim($decrypted);
    }
}
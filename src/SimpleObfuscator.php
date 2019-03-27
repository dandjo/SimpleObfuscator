<?php

namespace Dandjo\SimpleObfuscator;

/**
 * Class SimpleObfuscator.
 * Encryps and decrypts strings with given salt. Uses hexadecimal representation
 * of the calculated binary string.
 */
class SimpleObfuscator
{

    /**
     * @var string
     */
    private $salt;

    /**
     * SimpleObfuscator constructor.
     * @param $salt
     */
    public function __construct($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @param $string
     * @return string
     */
    function decrypt($string)
    {
        $result = '';
        foreach (str_split(hex2bin($string)) as $i => $char) {
            $saltChar = substr($this->salt, ($i % strlen($this->salt)) - 1, 1);
            $result .= chr(ord($char) - ord($saltChar));
        }
        return $result;
    }

    /**
     * @param $string
     * @return string
     */
    function encrypt($string)
    {
        $result = '';
        foreach (str_split($string) as $i => $char) {
            $saltChar = substr($this->salt, ($i % strlen($this->salt)) - 1, 1);
            $result .= chr(ord($char) + ord($saltChar));
        }
        return bin2hex($result);
    }

}

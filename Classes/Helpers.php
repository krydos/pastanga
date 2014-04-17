<?php
namespace Classes;

class Helpers {

    /**
     * generate unique link 
     */
    public static function generateLink($length = 4) {
       while (true) {
            $link = self::generateRandomString($length);

            $db = new \Classes\Database();

            /* check for exist this link */
            if(!$db->linkExist($link))
                return $link;
            else
                self::generateLink($length+1);
        }
    }

    /**
     * generate random string
     * needed for generation random string with length $length
     * using for link generation
     *
     * @param integer $length length of the string
     *
     * @return random string
     */
    protected static function generateRandomString($length)
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass); //turn the array into a string
    }
}

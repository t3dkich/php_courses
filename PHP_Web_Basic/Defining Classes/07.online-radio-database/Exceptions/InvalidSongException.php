<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 18:17
 */

class InvalidSongException extends Exception
{
    public function __construct($message = 'Invalid Song.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
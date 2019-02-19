<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 21:45
 */

namespace Database;


interface ResultSetInterface
{
    public function fetch($className) : \Generator;
}
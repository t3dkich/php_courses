<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:08
 */

namespace App\Services;


interface GenreServiceInterface
{
    public function get() : \Generator;
}
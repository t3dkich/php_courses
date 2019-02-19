<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:05
 */

namespace App\Repository;


interface GenreRepositoryInterface
{
    public function get() : \Generator;
}
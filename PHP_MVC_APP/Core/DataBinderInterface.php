<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 18:51
 */

namespace Core;


interface DataBinderInterface
{
    public function bind(string $className, array $formData);
}
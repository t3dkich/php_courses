<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 18:45
 */

namespace Core;


interface TemplateInterface
{
    public function render(string $pathName, $data) : void;
}
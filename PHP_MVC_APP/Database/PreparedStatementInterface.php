<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 21:44
 */

namespace Database;


interface PreparedStatementInterface
{
    public function execute(array $params = []) : ResultSetInterface;
}
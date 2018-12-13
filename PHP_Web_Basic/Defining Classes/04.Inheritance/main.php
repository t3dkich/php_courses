<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 00:19
 */

spl_autoload_register();

try {
    $person = new Child('no', 12);
    print_r($person);
} catch (Exception $e) {
    echo $e->getMessage();
}

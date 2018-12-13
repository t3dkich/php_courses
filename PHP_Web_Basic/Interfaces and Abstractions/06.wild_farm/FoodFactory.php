<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 02:27
 */

class FoodFactory
{
    public static function getFood(array $data) {
        $footType = $data[0];
        $quantity = floatval($data[1]);

        switch (strtolower($footType)) {
            case 'vegetable':
                return new Vegetable($quantity);
            case 'meat':
                return new Meat($quantity);
            default: return null;
        }
    }
}
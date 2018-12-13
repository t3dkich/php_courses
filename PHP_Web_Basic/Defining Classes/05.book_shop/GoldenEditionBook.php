<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 02:08
 */

class GoldenEditionBook extends Book
{
    public function goldenBook() {
        $this->setPrice(parent::getPrice() * 1.3);
    }
}
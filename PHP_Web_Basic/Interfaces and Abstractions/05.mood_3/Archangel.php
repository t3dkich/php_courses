<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 28/10/2018
 * Time: 23:00
 */

class Archangel extends AbstractPlayers
{
    public function __construct(string $username, string $hashedPassword, float $level, float $special_points = 0)
    {
        parent::__construct($username, $hashedPassword, $level, $special_points);
        $this->setHashedPassword($hashedPassword);
        $this->setSpecialPoints($special_points);
    }

    public function setHashedPassword(string $hashedPassword): void
    {
        $this->hashedPassword = strrev($hashedPassword) . (strlen($this->getUsername()) * 21);
    }

    public function setSpecialPoints(float $special_points): void
    {
        if (is_int($special_points)) {
            $this->special_points = $special_points;
        }
    }
}
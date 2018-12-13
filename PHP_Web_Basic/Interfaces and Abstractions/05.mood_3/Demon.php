<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 28/10/2018
 * Time: 22:47
 */

class Demon extends AbstractPlayers
{
    public function __construct(string $username, string $hashedPassword, float $level, float $special_points = 0)
    {
        parent::__construct($username, $hashedPassword, $level, $special_points);
        $this->setHashedPassword($hashedPassword);
        $this->setSpecialPoints($special_points);
    }

    public function setHashedPassword(string $hashedPassword): void
    {
        $this->hashedPassword = strlen($hashedPassword) * 217;
    }

    public function setSpecialPoints(float $special_points): void
    {
        $this->special_points = round($special_points, 1);
    }
}
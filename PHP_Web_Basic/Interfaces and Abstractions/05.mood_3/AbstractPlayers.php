<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 28/10/2018
 * Time: 22:34
 */

abstract class AbstractPlayers implements IhashPw
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $hashedPassword;

    /**
     * @var float
     */
    protected $level;

    /**
     * @var float
     */
    protected $special_points;

    /**
     * AbstractPlayers constructor.
     * @param string $username
     * @param string $hashedPassword
     * @param float $level
     * @param float $special_points
     */
    public function __construct(string $username, string $hashedPassword, float $level, float $special_points = 0)
    {
        $this->setUsername($username);
        $this->hashedPassword = $hashedPassword;
        $this->setLevel($level);
        $this->special_points = $special_points;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    private function setUsername(string $username): void
    {
        if (preg_match('/[a-zA-z]{0,10}/', $username)) {
            $this->username = $username;
        }
    }

    /**
     * @return string
     */
    public function getHashedPassword(): string
    {
        return $this->hashedPassword;
    }

    /**
     * @param string $hashedPassword
     */
    public function setHashedPassword(string $hashedPassword): void
    {
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @return float
     */
    public function getLevel(): float
    {
        return $this->level;
    }

    /**
     * @param float $level
     */
    private function setLevel(float $level): void
    {
        if (is_integer(intval($level))) {
            $this->level = $level;
        }
    }

    /**
     * @return float
     */
    public function getSpecialPoints(): float
    {
        return $this->special_points;
    }

    /**
     * @param float $special_points
     */
    public function setSpecialPoints(float $special_points): void
    {
        $this->special_points = $special_points;
    }
}
<?php

interface IhashPw
{
    public function setHashedPassword(string $hashedPassword);
}

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

$input = explode(' | ' ,readline());

if ($input[1] === 'Demon') {
    $char = new Demon($input[0], $input[0], $input[3], $input[2]);
} elseif ($input[1] === 'Archangel') {
    $char = new Archangel($input[0], $input[0], $input[3], $input[2]);
}
$type = new ReflectionClass($char);
$type = $type->getName();
$final = $type === 'Archangel' ? $char->getSpecialPoints() * $char->getLevel() : number_format($char->getSpecialPoints() * $char->getLevel(), 1, '.', '');
echo "\"{$char->getUsername()}\" | \"{$char->getHashedPassword()}\" -> $type\n{$final}";
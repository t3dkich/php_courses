<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 18:23
 */

class InvalidSongException extends Exception
{
    public function __construct($message = 'Invalid Song.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidArtistNameException extends InvalidSongException
{
    public function __construct($message = 'Artist name should be between 3 and 20 symbols.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongNameException extends InvalidSongException
{
    public function __construct($message = 'Song name should be between 3 and 20 symbols.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongLengthException extends InvalidSongException
{
    public function __construct($message = 'Invalid song length.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongMinutesException extends InvalidSongLengthException
{
    public function __construct($message = 'Song minutes should be between 0 and 14.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongSecondsException extends InvalidSongLengthException
{
    public function __construct($message = 'Song seconds should be between 0 and 59.', $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class Song
{
    /**
     * @var string
     */
    private $artist;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $time;

    /**
     * Song constructor.
     * @param string $artist
     * @param string $name
     * @param string $time
     * @throws InvalidArtistNameException
     * @throws Exception
     */
    public function __construct(string $artist, string $name, string $time)
    {
        $this->setArtist($artist);
        $this->setName($name);
        $this->setTime($time);
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     * @throws InvalidArtistNameException
     */
    public function setArtist(string $artist): void
    {
        if (strlen($artist) < 3 || strlen($artist) > 20) {
            throw new InvalidArtistNameException();
        }
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 3 || strlen($name) > 20) {
            throw new InvalidSongNameException();
        }
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getTime(): array
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return void
     * @throws InvalidSongMinutesException
     * @throws InvalidSongSecondsException
     * @throws InvalidSongLengthException
     */
    public function setTime(string $time): void
    {
        $time = explode(':', $time);
        foreach ($time as $val) {
            if ($val === '') {
                throw new InvalidSongLengthException();
            }
        }
        if (intval($time[0]) < 0 || intval($time[0]) > 14 || (int)$time[0] != $time[0]) {
            throw new InvalidSongMinutesException();
        }
        if (intval($time[1]) < 0 || intval($time[1]) > 59 || (int)$time[1] != $time[1]) {
            throw new InvalidSongSecondsException();
        }
        $this->time = [$time[0],$time[1]];
    }


}



$num = intval(readline());

/** @var Song[] $songs */
$songs = [];
$count = 0;

for ($i = 0; $i < $num; $i++) {
    $commands = explode(';', readline());
    try {
        if (count($commands) !== 3) {
            throw new InvalidSongException();
        }
    } catch (Exception $e) {
        echo $e->getMessage().PHP_EOL;
        continue;
    }
    try {
        $songs[] = new Song($commands[0], $commands[1], $commands[2]);
        $count++;
        echo 'Song added.'.PHP_EOL;
    } catch (Exception $e) {
        echo $e->getMessage().PHP_EOL;
    }
}
echo "Songs added: $count".PHP_EOL;

[$hours, $minutes, $seconds] = [0,0,0];
foreach ($songs as $song) {
    $time = $song->getTime();
    $minutes += $time[0];
    $seconds += $time[1];
}

$minutes += floor($seconds / 60);
$seconds = $seconds % 60;
$hours = floor($minutes / 60);
$minutes = $minutes % 60;
if ($minutes < 10){
    $minutes = '0'.$minutes;
}
if ($seconds < 10){
    $seconds = '0'.$seconds;
}
echo "Playlist length: {$hours}h {$minutes}m {$seconds}s";


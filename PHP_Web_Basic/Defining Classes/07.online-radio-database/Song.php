<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 18:05
 */

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
        if (strlen($artist) < 3 && strlen($artist) > 20) {
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
        if (strlen($name) < 3 && strlen($name) > 20) {
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
     * @return array
     * @throws InvalidSongMinutesException
     * @throws InvalidSongSecondsException
     */
    public function setTime(string $time): array
    {
        [$minutes,$seconds] = explode(':', $time);
        if (intval($minutes) < 0 || intval($minutes) > 14) {
            throw new InvalidSongMinutesException();
        }
        if (intval($seconds) < 0 || intval($seconds) > 59) {
            throw new InvalidSongSecondsException();
        }
        $this->time = [$minutes,$seconds];
    }


}
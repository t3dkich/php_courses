<?php

class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    private function surfaceArea()
    {
        return 2 * $this->length * $this->width +
            2 * $this->length * $this->height +
            2 * $this->width * $this->height;

    }

    private function lateralSurfaceArea()
    {
        return 2 * $this->length * $this->height +
            2 * $this->width * $this->height;
    }

    private function volume()
    {
        return $this->length * $this->width * $this->height;
    }

    private function rounding()
    {
        return [number_format($this->surfaceArea(), 2, '.', ''),
            number_format($this->lateralSurfaceArea(), 2, '.', ''),
            number_format($this->volume(), 2, '.', '')];
    }

    private function validityCheck(float $val, string $type) {
        if ($val <= 0) {
            throw new Exception( $type.' cannot be zero or negative');
        }
    }

    public function __toString()
    {
        [$surface, $lateral, $volume] = $this->rounding();

        return "Surface Area - {$surface}\nLateral Surface Area - {$lateral}\nVolume - {$volume}";
    }

    /**
     * @param float $length
     */
    public function setLength(float $length): void
    {
        $this->validityCheck($length, 'Length');
        $this->length = $length;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->validityCheck($width, 'Width');
        $this->width = $width;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->validityCheck($height, 'Height');
        $this->height = $height;
    }


}
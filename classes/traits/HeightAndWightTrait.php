<?php


namespace App\classes\traits;


trait HeightAndWightTrait
{
    /**
     * @var int
     */
    protected int $width;

    /**
     * @var int
     */
    protected int $height;


    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return HeightAndWightTrait
     */
    public function setHeight(int $height): HeightAndWightTrait
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return HeightAndWightTrait
     */
    public function setWidth(int $width): HeightAndWightTrait
    {
        $this->width = $width;
        return $this;
    }
}
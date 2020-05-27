<?php


namespace App\classes\Inputtags;

use App\classes\traits\TypeTrait;

class InputImage extends InputTag
{
    use TypeTrait;

    /**
     * @var string[]
     */
    static protected $alignValues = ['bottom', 'left', 'middle','right', 'top',''];

    /**
     * @var string
     */
    private $align;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var int
     */
    private $border;

    /**
     * @var string
     */
    private $src;

    public function __construct()
    {
        parent::__construct();

        $this->type = "image";
    }
    
    /**
     * @return string
     */
    public function getAlign(): string
    {
        return $this->align;
    }

    /**
     * @param string $align
     * @return InputImage
     */
    public function setAlign(string $align): InputImage
    {
        if (!in_array($align, static::$alignValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->align = $align;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     * @return InputImage
     */
    public function setAlt(string $alt): InputImage
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorder(): int
    {
        return $this->border;
    }

    /**
     * @param int $border
     * @return InputImage
     */
    public function setBorder(int $border): InputImage
    {
        $this->border = $border;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @param string $src
     * @return InputImage
     */
    public function setSrc(string $src): InputImage
    {
        $this->src = $src;
        return $this;
    }
}
<?php


namespace App\classes\Inputtags;


use App\classes\tabletags\TableTag;
use App\classes\traits\TypeTrait;

class InputFile extends TableTag
{
    use TypeTrait;

    /**
     * @var string
     */
    private $accept;

    /**
     * @var bool
     */
    private $multiple;

    /**
     * @var string
     */
    private $placeholder;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'file';
    }

    /**
     * @return string
     */
    public function getAccept(): string
    {
        return $this->accept;
    }

    /**
     * @param string $accept
     * @return InputFile
     */
    public function setAccept(string $accept): InputFile
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMultiple(): bool
    {
        return $this->multiple;
    }

    /**
     * @param bool $multiple
     * @return InputFile
     */
    public function setMultiple(bool $multiple): InputFile
    {
        $this->multiple = $multiple;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     * @return InputFile
     */
    public function setPlaceholder(string $placeholder): InputFile
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}
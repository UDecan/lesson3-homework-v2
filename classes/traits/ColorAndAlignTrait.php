<?php
declare(strict_types=1);

namespace App\classes\traits;


trait ColorAndAlignTrait
{
    /**
     * @var array
     */
    protected array $alignValues = [];

    /**
     * @var string
     */
    private string $align = '';


    /**
     * @var string
     */
    private string $bordercolor = '';

    /**
     * @var string
     */
    private string $bgcolor = '';


    /**
     * @param string $align
     * @return ColorAndAlignTrait
     */
    public function setAlign(string $align)
    {
        if (!in_array($align, $this->alignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->align = $align;
        return $this;
    }


    /**
     * @param string $bordercolor
     *
     */
    public function setBordercolor(string $bordercolor)
    {
        $this->bordercolor = $bordercolor;
        return $this;
    }

    /**
     * @param string $bgcolor
     *
     */
    public function setBgcolor(string $bgcolor)
    {
        $this->bgcolor = $bgcolor;
        return $this;
    }

    protected function getColorAndAlignAttributes(): string
    {
        $attributes = $this->getParam($this->align,'align');
        $attributes .= $this->getParam($this->bordercolor, 'bordercolor');
        $attributes .= $this->getParam($this->bgcolor, 'bgcolor');

        return $attributes;
    }
}
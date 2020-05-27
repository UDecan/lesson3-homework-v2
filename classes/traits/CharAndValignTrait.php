<?php


namespace App\classes\traits;

trait CharAndValignTrait
{
    use getParamForGetView;

    /**
     * @var string
     */
    private string $char = '';

    /**
     * @var string
     */
    private string $charoff = '';

    /**
     * @var array
     */
    private array $valignValues = [];

    /**
     * @var string
     */
    private string $valign = '';

    protected function getTableInnerAttributes(): string
    {
        $attributes = $this->getParam($this->char,'char');
        $attributes .= $this->getParam($this->charoff, 'charoff');
        $attributes .= $this->getParam($this->valign, 'valign');

        return $attributes;
    }

    /**
     * @return string
     */
    public function getChar(): string
    {
        return $this->char;
    }

    /**
     * @param string $char
     * @return CharAndValignTrait
     */
    public function setChar(string $char) : CharAndValignTrait
    {
        $this->char = $char;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharoff(): string
    {
        return $this->charoff;
    }

    /**
     * @param string $charoff
     * @return CharAndValignTrait
     */
    public function setCharoff(string $charoff) : CharAndValignTrait
    {
        $this->charoff = $charoff;
        return $this;
    }

    /**
     * @return string
     */
    public function getValign(): string
    {
        return $this->valign;
    }

    /**
     * @param string $valign
     * @return CharAndValignTrait
     */
    public function setValign(string $valign) : CharAndValignTrait
    {
        if (!in_array($valign, $this->valignValues)) {
            throw new \InvalidArgumentException('Значение вне диапазона');
        }
        $this->valign = $valign;
        return $this;
    }
}
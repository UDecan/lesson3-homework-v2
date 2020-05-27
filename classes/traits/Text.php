<?php


namespace App\classes\traits;


trait Text
{

    /**
     * @var string[]
     */
    static protected $autocompleteValues = ['on', 'off',''];

    /**
     * @var string
     */
    private $autocomplete;

    /**
     * @var string
     */
    private $list;

    /**
     * @var int
     */
    private $max;

    /**
     * @var int
     */
    private $maxlength;

    /**
     * @var int
     */
    private $min;

    /**
     * @var string[]
     */
    static protected $patternValues = ['\d [0-9]', '\D [^0-9]', '\s', '[A-Z]',
        '[A-Za-z]', '[А-Яа-яЁё]', '[A-Za-zА-Яа-яЁё]', '[0-9]{3}', '[A-Za-z]{6,}', '[0-9]{,3}',
        '[0-9]{5,10}', '^[a-zA-Z]+$', '^[А-Яа-яЁё\s]+$', '^[ 0-9]+$', '[0-9]{6}', '\d+(,\d{2})?',
        '\d+(\.\d{2})?', '\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}', ''];

    /**
     * @var string
     */
    private $pattern;

    /**
     * @var int
     */
    private $size;

    /**
     * @return string
     */
    public function getAutocomplete(): string
    {
        return $this->autocomplete;
    }

    /**
     * @param string $autocomplete
     * @return Text
     */
    public function setAutocomplete(string $autocomplete): Text
    {
        if (!in_array($autocomplete, static::$autocompleteValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * @return string
     */
    public function getList(): string
    {
        return $this->list;
    }

    /**
     * @param string $list
     * @return Text
     */
    public function setList(string $list): Text
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return Text
     */
    public function setMax(int $max): Text
    {
        $this->max = $max;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxlength(): int
    {
        return $this->maxlength;
    }

    /**
     * @param int $maxlength
     * @return Text
     */
    public function setMaxlength(int $maxlength): Text
    {
        $this->maxlength = $maxlength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return Text
     */
    public function setMin(int $min): Text
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return Text
     */
    public function setPattern(string $pattern): Text
    {
        if (!in_array($pattern, static::$patternValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Text
     */
    public function setSize(int $size): Text
    {
        $this->size = $size;
        return $this;
    }
}
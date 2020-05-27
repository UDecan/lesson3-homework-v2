<?php


namespace App\classes\inputtags;


use App\classes\traits\TypeTrait;

class InputRadio extends InputTag
{
    use TypeTrait;

    /**
     * @var string[]
     */
    static protected $autocompleteValues = ['on', 'off',''];

    /**
     * @var string
     */
    protected $autocomplete;

    /**
     * @var bool
     */
    protected $checked;


    public function __construct()
    {
        parent::__construct();
        $this->type = "radio";
    }

    /**
     * @return string
     */
    public function getAutocomplete(): string
    {
        return $this->autocomplete;
    }

    /**
     * @param string $autocomplete
     * @return InputRadio
     */
    public function setAutocomplete(string $autocomplete): InputRadio
    {
        if (!in_array($autocomplete, static::$autocompleteValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * @return bool
     */
    public function isChecked(): bool
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     * @return InputRadio
     */
    public function setChecked(bool $checked): InputRadio
    {
        $this->checked = $checked;
        return $this;
    }
}
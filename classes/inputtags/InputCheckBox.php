<?php


namespace App\classes\Inputtags;


use App\classes\traits\TypeTrait;

class InputCheckBox extends InputTag
{
    use TypeTrait;

    /**
     * @var string[]
     */
    static protected $autocompleteValues = ['on', 'off',''];

    /**
     * @var string
     */
    private $autocomplete;

    /**
     * @var bool
     */
    private $checked;
    
    public function __construct()
    {
        parent::__construct();
        $this->type = 'checkbox';
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
     * @return InputCheckBox
     */
    public function setAutocomplete(string $autocomplete): InputCheckBox
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
     * @return InputCheckBox
     */
    public function setChecked(bool $checked): InputCheckBox
    {
        $this->checked = $checked;
        return $this;
    }
}
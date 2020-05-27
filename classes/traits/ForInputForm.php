<?php


namespace App\classes\traits;


trait ForInputForm
{
    /**
     * @var string
     */
    protected $accesskey;

    /**
     * @var bool
     */
    protected $autofocus;

    /**
     * @var bool
     */
    protected $disabled;

    /**
     * @var string
     */
    protected $form;

    /**
     * @var string
     */
    protected $formaction;

    /**
     * @var string[]
     */
    static protected $formenctypeValues = ['application/x-www-form-urlencoded', 'multipart/form-data','text/plain', ''];

    /**
     * @var string
     */
    protected $formenctype;

    /**
     * @var string[]
     */
    static protected $formmethodValues = ['get', 'post', ''];

    /**
     * @var string
     */
    protected $formmethod;

    /**
     * @var bool
     */
    protected $formnovalidate;

    /**
     * @var string[]
     */
    static protected $formtargetValues = ['_blank', '_self', '_parent', '_top', ''];

    /**
     * @var string
     */
    protected $formtarget;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $placeholder;

    /**
     * @var bool
     */
    protected $readonly;

    /**
     * @var bool
     */
    protected $required;

    /**
     * @var float
     */
    protected $step;

    /**
     * @var int
     */
    protected $tabindex;

    /**
     * @var string[]
     */
    static protected $typeValues = ['button', 'checkbox', 'file', 'hidden', 'image', 'password', 'radio', 'reset',
        'submit', 'text', ''];

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getAccesskey(): string
    {
        return $this->accesskey;
    }

    /**
     * @param string $accesskey
     * @return ForInputForm
     */
    public function setAccesskey(string $accesskey): ForInputForm
    {
        $this->accesskey = $accesskey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutofocus(): bool
    {
        return $this->autofocus;
    }

    /**
     * @param bool $autofocus
     * @return ForInputForm
     */
    public function setAutofocus(bool $autofocus): ForInputForm
    {
        $this->autofocus = $autofocus;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return ForInputForm
     */
    public function setDisabled(bool $disabled): ForInputForm
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }

    /**
     * @param string $form
     * @return ForInputForm
     */
    public function setForm(string $form): ForInputForm
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormaction(): string
    {
        return $this->formaction;
    }

    /**
     * @param string $formaction
     * @return ForInputForm
     */
    public function setFormaction(string $formaction): ForInputForm
    {
        $this->formaction = $formaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormenctype(): string
    {
        return $this->formenctype;
    }

    /**
     * @param string $formenctype
     * @return ForInputForm
     */
    public function setFormenctype(string $formenctype): ForInputForm
    {
        if (!in_array($formenctype, static::$formenctypeValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->formenctype = $formenctype;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormmethod(): string
    {
        return $this->formmethod;
    }

    /**
     * @param string $formmethod
     * @return ForInputForm
     */
    public function setFormmethod(string $formmethod): ForInputForm
    {
        if (!in_array($formmethod, static::$formmethodValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->formmethod = $formmethod;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFormnovalidate(): bool
    {
        return $this->formnovalidate;
    }

    /**
     * @param bool $formnovalidate
     * @return ForInputForm
     */
    public function setFormnovalidate(bool $formnovalidate): ForInputForm
    {
        $this->formnovalidate = $formnovalidate;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormtarget(): string
    {
        return $this->formtarget;
    }

    /**
     * @param string $formtarget
     * @return ForInputForm
     */
    public function setFormtarget(string $formtarget): ForInputForm
    {
        $this->formtarget = $formtarget;
        return $this;
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
     * @return ForInputForm
     */
    public function setName(string $name): ForInputForm
    {
        $this->name = $name;
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
     * @return ForInputForm
     */
    public function setPlaceholder(string $placeholder): ForInputForm
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReadonly(): bool
    {
        return $this->readonly;
    }

    /**
     * @param bool $readonly
     * @return ForInputForm
     */
    public function setReadonly(bool $readonly): ForInputForm
    {
        $this->readonly = $readonly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return ForInputForm
     */
    public function setRequired(bool $required): ForInputForm
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return float
     */
    public function getStep(): float
    {
        return $this->step;
    }

    /**
     * @param float $step
     * @return ForInputForm
     */
    public function setStep(float $step): ForInputForm
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return int
     */
    public function getTabindex(): int
    {
        return $this->tabindex;
    }

    /**
     * @param int $tabindex
     * @return ForInputForm
     */
    public function setTabindex(int $tabindex): ForInputForm
    {
        $this->tabindex = $tabindex;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ForInputForm
     */
    public function setType(string $type): ForInputForm
    {
        if (!in_array($type, static::$typeValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ForInputForm
     */
    public function setValue(string $value): ForInputForm
    {
        $this->value = $value;
        return $this;
    }
}
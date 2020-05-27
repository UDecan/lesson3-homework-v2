<?php
declare(strict_types=1);

namespace App\classes\inputtags;

use App\classes\abstracts\AbstractInputTag;
use App\classes\traits\GetViewInputTrait;

class InputTag extends AbstractInputTag
{
    use GetViewInputTrait;

    public const TAG_NAME = 'input';

    protected static array $showAttribute = ['accept','accesskey','align','alt','autocomplete', 'autofocus', 'border', 'checked',
        'disabled', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget', 'list', 'max', 'maxlength',
        'min', 'multiple', 'name', 'pattern', 'placeholder', 'readonly', 'required', 'size', 'src', 'step', 'tabindex', 'type', 'value'];

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $disabled;

    /**
     * @var string
     */
    protected string $form;

    /**
     * @var bool
     */
    protected bool $required;

    /**
     * @var bool
     */
    protected bool $readonly;

    /**
     * @var string
     */
    protected string $value;

    public function __construct()
    {
        $this->availableTypes = [
            'button',
            'checkbox',
            'file',
            'hidden',
            'image',
            'password',
            'radio',
            'reset',
            'submit',
            'text'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getView(string $inner = ''): string
    {
        if ($inner === '' && strlen($this->inner)) {
            $inner = $this->inner;
        }
        return $this->getHTML(static::TAG_NAME, $this->getAttributes(), $inner);
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
     * @return InputTag
     */
    public function setName(string $name): InputTag
    {
        $this->name = $name;
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
     * @return InputTag
     */
    public function setDisabled(bool $disabled): InputTag
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
     */
    public function setForm(string $form): InputTag
    {
        $this->form = $form;
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
     */
    public function setRequired(bool $required): InputTag
    {
        $this->required = $required;
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
     * @return InputTag
     */
    public function setReadonly(bool $readonly): InputTag
    {
        $this->readonly = $readonly;
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
     * @return InputTag
     */
    public function setValue(string $value): InputTag
    {
        $this->value = $value;
        return $this;
    }

}
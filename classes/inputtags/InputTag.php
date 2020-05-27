<?php
declare(strict_types=1);

namespace App\classes\inputtags;

use App\classes\abstracts\AbstractInputTag;
use App\classes\traits\ForInputForm;
use App\classes\traits\GetViewInputTrait;

class InputTag extends AbstractInputTag
{
    use GetViewInputTrait;
    use ForInputForm;

    public const TAG_NAME = 'input';

    protected static array $showAttribute = ['accept','accesskey','align','alt','autocomplete', 'autofocus', 'border', 'checked',
        'disabled', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget', 'list', 'max', 'maxlength',
        'min', 'multiple', 'name', 'pattern', 'placeholder', 'readonly', 'required', 'size', 'src', 'step', 'tabindex', 'type', 'value'];

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
}
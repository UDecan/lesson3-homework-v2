<?php
declare(strict_types=1);

namespace App\classes;

use App\classes\abstracts\AbstractTag;
use App\classes\traits\TypeTrait;
use App\classes\traits\GetViewTrait;

class LiTag extends AbstractTag
{
    use TypeTrait;

    use GetViewTrait;

    protected static array $showAttribute = ['type', 'value'];

    public const TAG_NAME = 'li';

    protected static array $availableTypesForUl = ['disc', 'circle', 'square'];

    protected static array $availableTypesForOl = ['A', 'a', 'I', 'i', '1'];

    protected string $value;

    public function __construct(bool $forOl = false)
    {
        $this->availableTypes = $forOl ? static::$availableTypesForOl : static::$availableTypesForUl;
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
     * @param string $value
     * @return LiTag
     */
    public function setValue(string $value): LiTag
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
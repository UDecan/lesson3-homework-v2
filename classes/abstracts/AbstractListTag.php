<?php
namespace App\classes\abstracts;

use App\classes\traits\GetViewTrait;

abstract class AbstractListTag extends AbstractTag
{
    use GetViewTrait;

    /**
     * @var array|AbstractTag[]
     */
    protected array $elements;

    /**
     * @return array|AbstractTag[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param array|AbstractTag[] $elements
     * @return AbstractListTag
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @param AbstractTag $element
     * @return $this
     */
    public function addElement(AbstractTag $element)
    {
        $this->elements[] = $element;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getView(string $inner = ''): string
    {
        $inner .= $this->getElementsHtml();

        return $this->getHTML(static::TAG_NAME, $this->getAttributes(), $inner);
    }

    protected function getElementsHtml():string
    {
        $elements = '';
        /** @var AbstractTag $element */
        foreach ($this->elements as $element) {
            $elements .= (string) $element;
        }

        return $elements;
    }
}
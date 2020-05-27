<?php
declare(strict_types=1);

namespace App\classes\abstracts;
use App\classes\interfaces\ViewInterface;

abstract class AbstractTag implements ViewInterface
{
    protected static array $showAttribute = [];

    protected string $inner = '';

    protected function getAttributes(): string
    {
        $attributes = [];
        foreach (static::$showAttribute as $attribute) {
            if (isset($this->$attribute)) {
                switch (true) {
                    case is_array($this->$attribute):
                        $attributes[] = sprintf('%s="%s"', $attribute, implode(' ', $this->$attribute));
                        break;
                    case $this->$attribute !== null:
                        $attributes[] = sprintf('%s="%s"', $attribute, $this->$attribute);
                        break;
                }
            }
        }

        return implode(' ', $attributes);
    }

    public function __toString()
    {
        return $this->getView();
    }

    /**
     * @return string
     */
    public function getInner(): string
    {
        return $this->inner;
    }

    /**
     * @param string $inner
     * @return AbstractTag
     */
    public function setInner(string $inner): AbstractTag
    {
        $this->inner = $inner;
        return $this;
    }
}
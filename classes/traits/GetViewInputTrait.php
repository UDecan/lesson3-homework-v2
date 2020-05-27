<?php

declare(strict_types=1);

namespace App\classes\traits;


trait GetViewInputTrait
{
    /**
     * @param string $tag
     * @param string $attributes
     * @param string $inner
     * @return string
     */
    protected function getHTML(string $tag, string $attributes = '', string $inner = ''):string
    {
        if(strlen($attributes)) {
            $attributes = ' ' . $attributes;
        }
        return \sprintf('<%s %s>', $tag, $attributes);
    }
}
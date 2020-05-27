<?php

declare(strict_types=1);

namespace App\classes\interfaces;

/**
 * Interface ViewInterface
 */
interface ViewInterface
{
    /**
     * Выводит html сущность объекта
     *
     * @param string $inner
     * @return string
     */
    public function getView(string $inner = ''): string;
}
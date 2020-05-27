<?php
declare(strict_types=1);

namespace App\classes\traits;


trait TypeTrait
{
    protected array $availableTypes = [];

    protected string $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return mixed
     */
    public function setType(string $type)
    {
        if (!empty($this->availableTypes) && !in_array($type, $this->availableTypes))
        {
            throw new \InvalidArgumentException(sprintf('Type must be one of: %s', implode(', ', $this->availableTypes)));
        }
        $this->type = $type;

        return $this;
    }
}
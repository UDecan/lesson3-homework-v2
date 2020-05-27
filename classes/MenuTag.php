<?php
declare(strict_types=1);

namespace App\classes;

use App\classes\traits\TypeTrait;
use App\classes\abstracts\AbstractListTag;

class MenuTag extends AbstractListTag
{
    use TypeTrait;

    public const TAG_NAME = 'menu';

    protected static array $showAttribute = ['type', 'label'];

    /**
     * @var string
     */
    private string $label;

    public function __construct()
    {
        $this->availableTypes = [
            'context',
            'toolbar',
            'list'
        ];
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return MenuTag
     */
    public function setLabel(string $label): MenuTag
    {
        $this->label = $label;
        return $this;
    }

}
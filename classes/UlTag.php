<?php
declare(strict_types=1);

namespace App\classes;

use App\classes\abstracts\AbstractListTag;
use App\classes\traits\TypeTrait;
use App\classes\traits\GetViewTrait;

class UlTag extends AbstractListTag
{

    use TypeTrait;

    use GetViewTrait;

    public const TAG_NAME = 'ul';

    protected static array $showAttribute = ['type'];

    public function __construct()
    {
        $this->availableTypes = [
            'disc',
            'circle',
            'square'
        ];
    }
}
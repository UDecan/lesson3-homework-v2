<?php


namespace App\classes\tabletags;


use App\classes\abstracts\AbstractListTag;
use App\classes\traits\CharAndValignTrait;
use App\classes\traits\ColorAndAlignTrait;

class TrTag extends AbstractListTag
{
    use ColorAndAlignTrait;
    use CharAndValignTrait;

    public const TAG_NAME = 'tr';

    protected static array $showAttr = ['align', 'bgcolor', 'bordercolor',
        'char', 'charoff', 'valigin'];

    public function __construct()
    {
        $this->valignValues = ['top', 'middle', 'bottom', 'baseline', ''];
        $this->valignValues = ['top', 'middle', 'bottom', 'baseline', ''];
    }
}
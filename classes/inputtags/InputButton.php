<?php


namespace App\classes\inputtags;


use App\classes\tabletags\TableTag;
use App\classes\traits\TypeTrait;

class InputButton extends TableTag
{
    use TypeTrait;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'button';
    }
}